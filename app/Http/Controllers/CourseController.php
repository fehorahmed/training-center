<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.course.index');
    }

    public function getData(Request $request)
    {
        // dd('asdsa');
        $datas = Course::query();

        return DataTables::of($datas)
            ->addIndexColumn() // optional: adds serial number
            ->addColumn('action', function ($data) {
                return '<a href="' . route('course.edit', $data->id) . '" class="btn btn-sm btn-primary">Edit</a>';
                // return '<a href="'.route('users.edit', $data->id).'" class="btn btn-sm btn-primary">Edit</a>';
            })
            ->editColumn('status', function ($data) {
                return $data->status ? '<span class="badge badge-primary">Active</span>' : '<span class="badge badge-danger">Inactive</span>';
            })

            ->rawColumns(['status', 'action']) // for rendering HTML in action column
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course_categories = CourseCategory::where('status', 1)->get();
        return view('backend.course.create', compact('course_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:courses,name',
            'course_category' => 'nullable|numeric',
            'details' => 'required|string|max:10000',
            'image' => 'required|image|mimes:jpeg,png,jpg|dimensions:ratio=1/1|max:300',
            'status' => 'nullable|boolean',
        ]);

        $data = new Course();
        $data->name = $request->name;
        $data->course_category_id = $request->course_category;
        $data->details = $request->details;
        $data->status = $request->status ? $request->status : 0;
        if ($request->hasFile('image')) {
            $upload = $request->file('image');
            $image = Image::read($upload)
                ->resize(100, 100);
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            // $image->encodeByExtension($upload->getClientOriginalExtension()
            Storage::disk('public')->put('course/' . $filename, $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 70));
            $data->image =$filename;
        }

        if ($data->save()) {

            Flasher::success('Course Created Successfully.');
            return redirect()->route('admin.course.index');
        } else {
            Flasher::error('Something went wrong');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $course_categories = CourseCategory::where('status', 1)->get();
        return view('backend.course.edit', compact('course', 'course_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:courses,name,' . $course->id,
            'course_category' => 'nullable|numeric',
            'details' => 'required|string|max:10000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|dimensions:ratio=1/1|max:300',
            'status' => 'nullable|boolean',
        ]);

        $course->name = $request->name;
        $course->course_category_id = $request->course_category;
        $course->details = $request->details;
        $course->status = $request->status ? $request->status : 0;
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($course->image && Storage::disk('public')->exists('course/' . $course->image)) {
                Storage::disk('public')->delete('course/' . $course->image);
            }
            $upload = $request->file('image');
            $image = Image::read($upload)
                ->resize(100, 100);
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            // $image->encodeByExtension($upload->getClientOriginalExtension()
            Storage::disk('public')->put('course/' . $filename, $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 70));
            $course->image =$filename;
        }

        if ($course->save()) {
            Flasher::success('Course Updated Successfully.');
            return redirect()->route('admin.course.index');
        } else {
            Flasher::error('Something went wrong');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
