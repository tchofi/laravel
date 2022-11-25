<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Http\Requests\StoreAvisRequest;
use App\Http\Requests\UpdateAvisRequest;

class AvisController extends Controller
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
     * @param  \App\Http\Requests\StoreAvisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function show(Avis $avis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function edit(Avis $avis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvisRequest  $request
     * @param  \App\Models\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvisRequest $request, Avis $avis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avis  $avis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avis $avis)
    {
        //
    }
}
