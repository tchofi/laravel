<?php

namespace App\Http\Controllers;

use App\Models\Habilitation;
use App\Http\Requests\StoreHabilitationRequest;
use App\Http\Requests\UpdateHabilitationRequest;

class HabilitationController extends Controller
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
     * @param  \App\Http\Requests\StoreHabilitationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHabilitationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habilitation  $habilitation
     * @return \Illuminate\Http\Response
     */
    public function show(Habilitation $habilitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habilitation  $habilitation
     * @return \Illuminate\Http\Response
     */
    public function edit(Habilitation $habilitation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHabilitationRequest  $request
     * @param  \App\Models\Habilitation  $habilitation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHabilitationRequest $request, Habilitation $habilitation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habilitation  $habilitation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habilitation $habilitation)
    {
        //
    }
}
