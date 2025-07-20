<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.course-category.index');
    }
    public function getData(Request $request)
    {
        // dd('asdsa');
        $datas = CourseCategory::query();

        return DataTables::of($datas)
            ->addIndexColumn() // optional: adds serial number
            ->addColumn('action', function ($data) {
                return '<a href="'.route('course-category.edit',$data->id).'" class="btn btn-sm btn-primary">Edit</a>';
                // return '<a href="'.route('users.edit', $data->id).'" class="btn btn-sm btn-primary">Edit</a>';
            })
            ->editColumn('status', function ($data) {
                return $data->status?'<span class="badge badge-primary">Active</span>' : '<span class="badge badge-danger">Inactive</span>';
            })
            ->editColumn('image', function ($data) {
                return $data->image?'<img src="'.asset('storage/course_category/'.$data->image).'" alt="" height=60px width=60px>' : '';
            })
            ->rawColumns(['status','image','action']) // for rendering HTML in action column
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.course-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:course_categories,name',
            'image' => 'required|image|mimes:png|dimensions:ratio=1/1|max:300',
            'status' => 'nullable|boolean',
        ]);
        // dd($request->all());
        $data = new CourseCategory();
        $data->name = $request->name;
        $data->status = $request->status ? $request->status : 0;

        if ($request->hasFile('image')) {
            $upload = $request->file('image');
            $image = Image::read($upload)
                ->resize(100, 100);
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            // $image->encodeByExtension($upload->getClientOriginalExtension()
            Storage::disk('public')->put('course_category/' . $filename, $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 70));
            $data->image =$filename;
        }
        if($data->save()){
            return redirect()->route('admin.course-category.index')->with('success','Course Category Created Successfully.');
        }else{
            return redirect()->back()->withInput()->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseCategory $courseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseCategory $courseCategory)
    {
        return view('backend.course-category.edit',compact('courseCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseCategory $courseCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:course_categories,name,'.$courseCategory->id,
            'image' => 'nullable|image|mimes:png|dimensions:ratio=1/1|max:300',
            'status' => 'nullable|boolean',
        ]);

        $courseCategory->name = $request->name;
        $courseCategory->status = $request->status ? $request->status : 0;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($courseCategory->image && Storage::disk('public')->exists('course_category/' . $courseCategory->image)) {
                Storage::disk('public')->delete('course_category/' . $courseCategory->image);
            }
            $upload = $request->file('image');
            $image = Image::read($upload)
                ->resize(100, 100);
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            // $image->encodeByExtension($upload->getClientOriginalExtension()
            Storage::disk('public')->put('course_category/' . $filename, $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 70));
            $courseCategory->image =$filename;
        }
        if($courseCategory->save()){
            return redirect()->route('admin.course-category.index')->with('success','Course Category Updated Successfully.');
        }else{
            return redirect()->back()->withInput()->with('error','Something went wrong');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseCategory $courseCategory)
    {
        //
    }
}
