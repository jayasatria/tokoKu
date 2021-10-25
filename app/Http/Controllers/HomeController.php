<?php

namespace App\Http\Controllers;

use App\Models\imageProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $imageProduct = imageProduct::where('category', 'Emas Mini')->get();
        $antam = imageProduct::where('category', 'Emas Antam')->get();
        $data = [
            'page' => 'Home',
            'title' => 'EmasKu',
            'image_name' => $imageProduct,
            'image_antam' => $antam
        ];

        return view('home.index', $data);
    }
    public function show($image_product)
    {
        $product = imageProduct::where('image_product', $image_product)->get();
        $data = [
            'page' => 'Single',
            'title' => 'EmasKu',
            'image_name' => $product
        ];
        return view('home.show', $data);
    }
}
