<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('backend.teacher.index');
    }

    public function getData(Request $request)
    {
        // dd('asdsa');
        $datas = Teacher::query();

        return DataTables::of($datas)
            ->addIndexColumn() // optional: adds serial number
            ->addColumn('action', function ($data) {
                return '<a href="' . route('teacher.edit', $data->id) . '" class="btn btn-sm btn-primary">Edit</a>';
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
        return view('backend.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:our_leaders,name',
            'subject' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|dimensions:ratio=355/240|max:300',
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            "status" => 'nullable|boolean',
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->subject = $request->subject;
        $teacher->email = $request->email;
        $teacher->address = $request->address;
        $teacher->phone = $request->phone;
        $teacher->facebook = $request->facebook;
        $teacher->twitter = $request->twitter;
        $teacher->instagram = $request->instagram;
        $teacher->status = $request->status ? 1 : 0;
        if ($request->hasFile('image')) {
            $upload = $request->file('image');
            $image = Image::read($upload)
                ->resize(355, 240);
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            // $image->encodeByExtension($upload->getClientOriginalExtension()
            Storage::disk('public')->put('teacher/' . $filename, $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 70));
            $teacher->image = $filename;
        }
        if ($teacher->save()) {

            Flasher::success('Leader Created Successfully.');
            return redirect()->route('admin.leader.index');
        } else {
            Flasher::error('Something went wrong');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
