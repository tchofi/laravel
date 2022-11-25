<?php

namespace App\Http\Controllers;

use App\Models\Autorisation;
use App\Http\Requests\StoreAutorisationRequest;
use App\Http\Requests\UpdateAutorisationRequest;

class AutorisationController extends Controller
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
     * @param  \App\Http\Requests\StoreAutorisationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutorisationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autorisation  $autorisation
     * @return \Illuminate\Http\Response
     */
    public function show(Autorisation $autorisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autorisation  $autorisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Autorisation $autorisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutorisationRequest  $request
     * @param  \App\Models\Autorisation  $autorisation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutorisationRequest $request, Autorisation $autorisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autorisation  $autorisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autorisation $autorisation)
    {
        //
    }
}
