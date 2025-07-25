<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.batch.index');
    }
    public function getData(Request $request)
    {
        // dd('asdsa');
        $datas = Batch::with('course');

        return DataTables::of($datas)
            ->addIndexColumn() // optional: adds serial number
            ->addColumn('action', function ($data) {
                return '<a href="' . route('batch.edit', $data->id) . '" class="btn btn-sm btn-primary">Edit</a>';
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
        $courses = Course::where('status', 1)->get();
        return view('backend.batch.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255|unique:batches,name',
            'course' => 'required|exists:courses,id',
            "details" => 'nullable|string|max:10000',
            "status" => 'nullable|boolean',
        ]);

        $batch = new Batch();
        $batch->name = $request->name;
        $batch->course_id = $request->course;
        $batch->details = $request->details;
        $batch->status = $request->status ? 1 : 0;
        if ($batch->save()) {

            Flasher::success('Batch Created Successfully.');
            return redirect()->route('admin.batch.index');
        } else {
            Flasher::error('Something went wrong');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        $courses = Course::where('status', 1)->get();
        return view('backend.batch.edit', compact('batch', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batch $batch)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:batches,name,'.$batch->id,
            'course' => 'required|exists:courses,id',
            "details" => 'nullable|string|max:10000',
            "status" => 'nullable|boolean',
        ]);
        $batch->name = $request->name;
        $batch->course_id = $request->course;
        $batch->details = $request->details;
        $batch->status = $request->status ? 1 : 0;
        if ($batch->save()) {
            Flasher::success('Batch Updated Successfully.');
            return redirect()->route('admin.batch.index');
        } else {
            Flasher::error('Something went wrong');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        //
    }
}
