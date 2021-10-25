<?php

namespace App\Http\Controllers;

use App\Models\imageProduct;
use Illuminate\Http\Request;

class ImageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return collect()->all();
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
     * @param  \App\Models\imageProduct  $imageProduct
     * @return \Illuminate\Http\Response
     */
    public function show(imageProduct $imageProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imageProduct  $imageProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(imageProduct $imageProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\imageProduct  $imageProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imageProduct $imageProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imageProduct  $imageProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(imageProduct $imageProduct)
    {
        //
    }
}
