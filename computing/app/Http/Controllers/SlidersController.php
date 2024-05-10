<?php

namespace App\Http\Controllers;

use App\Models\sliders;
use App\Http\Requests\StoreslidersRequest;
use App\Http\Requests\UpdateslidersRequest;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreslidersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreslidersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function show(sliders $sliders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function edit(sliders $sliders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateslidersRequest  $request
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateslidersRequest $request, sliders $sliders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function destroy(sliders $sliders)
    {
        //
    }
}
