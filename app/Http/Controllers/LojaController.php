<?php

namespace App\Http\Controllers;

use App\Models\loja;
use App\Http\Requests\StorelojaRequest;
use App\Http\Requests\UpdatelojaRequest;

class LojaController extends Controller
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
     * @param  \App\Http\Requests\StorelojaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelojaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function show(loja $loja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function edit(loja $loja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelojaRequest  $request
     * @param  \App\Models\loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelojaRequest $request, loja $loja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function destroy(loja $loja)
    {
        //
    }
}
