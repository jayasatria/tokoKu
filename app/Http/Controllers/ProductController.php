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
        $oo25 = $request->input('0,025_gr');
        $oo250 = round(((int)$oo25 * 0.12 + 3000) + (int)$oo25, -3);
        $oo5 = $request->input('0,05_gr');
        $oo50 = round(((int)$oo5 * 0.12 + 3000) + (int)$oo5, -3);
        $o1 = $request->input('0,1_gr');
        $o10 = round(((int)$o1 * 0.062 + 8000) + (int)$o1, -3);
        $o2 = $request->input('0,2_gr');
        $o20 = round(((int)$o2 * 0.062 + 8000) + (int)$o2, -3);
        $o5 = $request->input('0,5_gr');
        $o50 = round(((int)$o5 * 0.052 + 10000) + (int)$o5, -3);
        $i1 = $request->input('1_gr');
        $i01 = round(((int)$i1 * 0.052 + 15000) + (int)$i1, -3);
        $i5 = $request->input('5_gr');
        $i05 = round(((int)$i5 * 0.052 + 40000) + (int)$i5, -3);
        $i10 = $request->input('10_gr');
        $i010 = round(((int)$i10 * 0.047 + 40000) + (int)$i10, -3);
        $i25 = $request->input('25_gr');
        $i025 = round(((int)$i25 * 0.042 + 40000) + (int)$i25, -3);
        $i50 = $request->input('50_gr');
        $i050 = round(((int)$i50 * 0.037 + 40000) + (int)$i50, -3);
        $i100 = $request->input('100_gr');
        $i0100 = round(((int)$i100 * 0.032 + 40000) + (int)$i100, -3);
        $request->validate([
            'tanggal' => 'required',
            '0,025_gr' => 'required',
            '0,05_gr' => 'required',
            '0,1_gr' => 'required',
            '0,2_gr' => 'required',
            '0,5_gr' => 'required',
            '1_gr' => 'required',
            '5_gr' => 'required',
            '10_gr' => 'required',
            '25_gr' => 'required',
            '50_gr' => 'required',
            '100_gr' => 'required'
        ]);
        $data = [
            'tanggal' => $tanggal,
            '0,025_gr' => $oo25,
            '0,05_gr' => $oo5,
            '0,1_gr' => $o1,
            '0,2_gr' => $o2,
            '0,5_gr' => $o5,
            '1_gr' => $i1,
            '5_gr' => $i5,
            '10_gr' => $i10,
            '25_gr' => $i25,
            '50_gr' => $i50,
            '100_gr' => $i100
        ];
        $data2 = [
            'tanggal' => $tanggal,
            '0,025_gr' => $oo250,
            '0,05_gr' => $oo50,
            '0,1_gr' => $o10,
            '0,2_gr' => $o20,
            '0,5_gr' => $o50,
            '1_gr' => $i01,
            '5_gr' => $i05,
            '10_gr' => $i010,
            '25_gr' => $i025,
            '50_gr' => $i050,
            '100_gr' => $i0100
        ];
        DB::table('products')->insert($data2);
        $query = DB::table('harga_awal')->insert($data);
        if ($query) {
            return back();
        }
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
