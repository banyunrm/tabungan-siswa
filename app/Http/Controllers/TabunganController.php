<?php

namespace App\Http\Controllers;

use App\Models\tabungan_controller;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
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
     * @param  \App\Models\tabungan_controller  $tabungan_controller
     * @return \Illuminate\Http\Response
     */
    public function show(tabungan_controller $tabungan_controller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabungan_controller  $tabungan_controller
     * @return \Illuminate\Http\Response
     */
    public function edit(tabungan_controller $tabungan_controller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabungan_controller  $tabungan_controller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabungan_controller $tabungan_controller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabungan_controller  $tabungan_controller
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabungan_controller $tabungan_controller)
    {
        //
    }
}
