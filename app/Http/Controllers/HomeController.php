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
    public function emas_mini()
    {
        $category = "Emas Mini";
        $product = imageProduct::where('category', $category)->get();
        $data = [
            'page' => 'Single',
            'title' => 'EmasKu',
            'category' => $product,
            'judul' => 'Emas Mini'
        ];
        return view('home.category', $data);
    }
    public function emas_antam()
    {
        $category = "Emas Antam";
        $product = imageProduct::where('category', $category)->get();
        $data = [
            'page' => 'Single',
            'title' => 'EmasKu',
            'category' => $product,
            'judul' => 'Emas Antam'
        ];
        return view('home.category', $data);
    }
}
