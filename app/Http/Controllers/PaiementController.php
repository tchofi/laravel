<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Http\Requests\StorePaiementRequest;
use App\Http\Requests\UpdatePaiementRequest;

class PaiementController extends Controller
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
     * @param  \App\Http\Requests\StorePaiementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaiementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show(Paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function edit(Paiement $paiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaiementRequest  $request
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaiementRequest $request, Paiement $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paiement $paiement)
    {
        //
    }
}
