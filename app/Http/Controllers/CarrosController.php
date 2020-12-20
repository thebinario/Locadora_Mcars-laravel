<?php

namespace App\Http\Controllers;

use App\Carros;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $carros = Carros::all();
             return view('carros.listaCarro', ['carro' => $carros]);


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
     * @param  \App\Carros  $carros
     * @return \Illuminate\Http\Response
     */
    public function show(Carros $carros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carros  $carros
     * @return \Illuminate\Http\Response
     */
    public function edit(Carros $carros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carros  $carros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carros $carros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carros  $carros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carros $carros)
    {
        //
    }
}
