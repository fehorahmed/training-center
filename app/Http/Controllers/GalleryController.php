<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Flasher\Laravel\Facade\Flasher;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.gallery.index');
    }
    public function getData(Request $request)
    {
        // dd('asdsa');
        $datas = Gallery::query();

        return DataTables::of($datas)
            ->addIndexColumn() // optional: adds serial number
            ->addColumn('action', function ($data) {
                return '<a href="' . route('gallery.edit', $data->id) . '" class="btn btn-sm btn-primary">Edit</a>';
                // return '<a href="'.route('users.edit', $data->id).'" class="btn btn-sm btn-primary">Edit</a>';
            })
            ->editColumn('image', function ($data) {
                return $data->image ? '<img src="'.asset('storage/gallery/'.$data->image).'" alt="" width="100" height="92">' : '';
            })
            ->editColumn('status', function ($data) {
                return $data->status ? '<span class="badge badge-primary">Active</span>' : '<span class="badge badge-danger">Inactive</span>';
            })

            ->rawColumns(['image','status', 'action']) // for rendering HTML in action column
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255|unique:our_leaders,name',
            'serial' => 'required|numeric|max:10000000',
            "image" => 'required|image|mimes:jpeg,png,jpg,svg|dimensions:ratio=317/343|max:1024',
            "status" => 'nullable|boolean',
        ]);

        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->serial = $request->serial;
        $gallery->status = $request->status ? 1 : 0;
        if ($request->hasFile('image')) {
            $upload = $request->file('image');
            $image = Image::read($upload)
                ->resize(317, 343);
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            // $image->encodeByExtension($upload->getClientOriginalExtension()
            Storage::disk('public')->put('gallery/' . $filename, $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 100));
            $gallery->image = $filename;
        }
        if ($gallery->save()) {

            Flasher::success('Image Store Successfully.');
            return redirect()->route('admin.gallery.index');
        } else {
            Flasher::error('Something went wrong');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:our_leaders,name',
            'serial' => 'required|numeric|max:10000000',
            "image" => 'nullable|image|mimes:jpeg,png,jpg,svg|dimensions:ratio=317/343|max:1024',
            "status" => 'nullable|boolean',
        ]);

        $gallery->title = $request->title;
        $gallery->serial = $request->serial;
        $gallery->status = $request->status ? 1 : 0;
        if ($request->hasFile('image')) {
            if ($gallery->image) {
                Storage::disk('public')->delete('gallery/' . $gallery->image);
            }
            $upload = $request->file('image');
            $image = Image::read($upload)
                ->resize(317, 343);
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            // $image->encodeByExtension($upload->getClientOriginalExtension()
            Storage::disk('public')->put('gallery/' . $filename, $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 100));
            $gallery->image = $filename;
        }
        if ($gallery->save()) {

            Flasher::success('Image Store Successfully.');
            return redirect()->route('admin.gallery.index');
        } else {
            Flasher::error('Something went wrong');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
