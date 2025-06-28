<?php

namespace App\Http\Controllers;

use App\Models\GlobalConfig;
use Illuminate\Http\Request;

class GlobalConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.config.global-config');
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
    public function show(GlobalConfig $globalConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GlobalConfig $globalConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GlobalConfig $globalConfig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GlobalConfig $globalConfig)
    {
        //
    }
}
