<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Asuntos;
use Illuminate\Http\Request;

class AsuntosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.asuntos.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asuntos  $asuntos
     * @return \Illuminate\Http\Response
     */
    public function show(Asuntos $asuntos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asuntos  $asuntos
     * @return \Illuminate\Http\Response
     */
    public function edit(Asuntos $asuntos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asuntos  $asuntos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asuntos $asuntos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asuntos  $asuntos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asuntos $asuntos)
    {
        //
    }
}
