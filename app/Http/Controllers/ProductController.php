<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::last();
        $data = [
            'page' => 'Update Harga',
            'title' => 'EmasKu',
            'product' => $product
        ];
        return view('harga/update_harga', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'page' => 'Update Harga',
            'title' => 'EmasKu'
        ];
        return view('harga/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggal = $request->input('tanggal');
        $oo25 = $request->input('0.025_gr');
        $oo5 = $request->input('0.05_gr');
        $o1 = $request->input('0.1_gr');
        $o2 = $request->input('0.2_gr');
        $o5 = $request->input('0.5_gr');
        $i1 = $request->input('1_gr');
        $i5 = $request->input('5_gr');
        $i10 = $request->input('10_gr');
        $i25 = $request->input('25_gr');
        $i50 = $request->input('50_gr');
        $i100 = $request->input('100_gr');
        $data = [
            'tanggal' => $tanggal,
            '0.025_gr' => $oo25,
            '0.05_gr' => $oo5,
            '0.1_gr' => $o1,
            '0.2_gr' => $o2,
            '0.5_gr' => $o5,
            '1_gr' => $i1,
            '5_gr' => $i5,
            '10_gr' => $i10,
            '25_gr' => $i25,
            '50_gr' => $i50,
            '100_gr' => $i100
        ];
        DB::table('harga_awal')->insert($data);
        return redirect()->route('/harga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
