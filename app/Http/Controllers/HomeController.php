<?php

namespace App\Http\Controllers;

use App\Models\imageProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $imageProduct = imageProduct::where('category', 'Emas Mini')->get();

        $data = [
            'title' => 'EmasKu',
            'image_name' => $imageProduct
        ];

        return view('home.index', $data);
    }
}
