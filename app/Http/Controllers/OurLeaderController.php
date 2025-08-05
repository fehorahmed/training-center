<?php

namespace App\Http\Controllers;

use App\Models\OurLeader;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class OurLeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.leaders.index');
    }
    public function getData(Request $request)
    {
        // dd('asdsa');
        $datas = OurLeader::query();

        return DataTables::of($datas)
            ->addIndexColumn() // optional: adds serial number
            ->addColumn('action', function ($data) {
                return '<a href="' . route('leader.edit', $data->id) . '" class="btn btn-sm btn-primary">Edit</a>';
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
        return view('backend.leaders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:our_leaders,name',
            'designation' => 'required|string|max:255',
            'short_designation' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            "image" => 'nullable|image|mimes:jpeg,png,jpg,svg|dimensions:ratio=355/240|max:300',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            "details" => 'nullable|string|max:10000',
            "status" => 'nullable|boolean',
        ]);

        $ourLeader = new OurLeader();
        $ourLeader->name = $request->name;
        $ourLeader->slug = Str::slug($request->name);
        $ourLeader->designation = $request->designation;
        $ourLeader->short_designation = $request->short_designation;
        $ourLeader->short_description = $request->short_description;
        $ourLeader->phone = $request->phone;
        $ourLeader->email = $request->email;
        $ourLeader->details = $request->details;
        $ourLeader->status = $request->status ? 1 : 0;
        if ($request->hasFile('image')) {
            $upload = $request->file('image');
            $image = Image::read($upload)
                ->resize(355, 240);
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            // $image->encodeByExtension($upload->getClientOriginalExtension()
            Storage::disk('public')->put('leader/' . $filename, $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 70));
            $ourLeader->image = $filename;
        }
        if ($ourLeader->save()) {

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
    public function show(OurLeader $ourLeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurLeader $ourLeader)
    {
        return view('backend.leaders.edit', compact('ourLeader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurLeader $ourLeader)
    {

        $request->validate([
            'name' => 'required|string|max:255|unique:our_leaders,name,' . $ourLeader->id,
            'designation' => 'required|string|max:255',
            'short_designation' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            "image" => 'nullable|image|mimes:jpeg,png,jpg,svg|dimensions:ratio=355/240|max:300',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            "details" => 'nullable|string|max:10000',
            "status" => 'nullable|boolean',
        ]);

        $ourLeader->name = $request->name;
        $ourLeader->slug = Str::slug($request->name);
        $ourLeader->designation = $request->designation;
        $ourLeader->short_designation = $request->short_designation;
        $ourLeader->short_description = $request->short_description;
        $ourLeader->phone = $request->phone;
        $ourLeader->email = $request->email;
        $ourLeader->details = $request->details;
        $ourLeader->status = $request->status ? 1 : 0;

        if ($request->hasFile('image')) {
            if ($ourLeader->image) {
                Storage::disk('public')->delete('leader/' . $ourLeader->image);
            }
            $upload = $request->file('image');
            $image = Image::read($upload)
                ->resize(355, 240);
            $filename = time() . '.' . $upload->getClientOriginalExtension();
            Storage::disk('public')->put('leader/' . $filename, $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 70));
            $ourLeader->image = $filename;
        }

        if ($ourLeader->save()) {
            Flasher::success('Leader Updated Successfully.');
            return redirect()->route('admin.leader.index');
        } else {
            Flasher::error('Something went wrong');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurLeader $ourLeader)
    {
        //
    }
}
