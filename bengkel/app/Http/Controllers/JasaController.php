<?php

namespace App\Http\Controllers;

use App\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Jasa::all();
    }

    public function home(){
        return view('vueApp');
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
     * @param  \App\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function show(Jasa $jasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Jasa $jasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jasa $jasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jasa $jasa)
    {
        //
    }
}
