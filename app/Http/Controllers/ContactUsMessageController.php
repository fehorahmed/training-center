<?php

namespace App\Http\Controllers;

use App\Models\ContactUsMessage;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactUsMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.contact.index');
    }
    public function getData(Request $request)
    {
        // dd('asdsa');
        $datas = ContactUsMessage::query();

        return DataTables::of($datas)
            ->addIndexColumn() // optional: adds serial number
            ->addColumn('action', function ($data) {
                return '<a href="" class="btn btn-sm btn-primary">View</a>';
                // return '<a href="'.route('users.edit', $data->id).'" class="btn btn-sm btn-primary">Edit</a>';
            })
            ->editColumn('status', function ($data) {
                return $data->status ? '<span class="badge badge-primary">Read</span>' : '<span class="badge badge-danger">Unread</span>';
            })

            ->rawColumns(['status', 'action']) // for rendering HTML in action column
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUsMessage $contactUsMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUsMessage $contactUsMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUsMessage $contactUsMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUsMessage $contactUsMessage)
    {
        //
    }
}
