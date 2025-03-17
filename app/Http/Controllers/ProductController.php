<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'No Mans Sky', 'price' => 23.99],
            ['id' => 2, 'name' => 'Red Dead Redemption 2', 'price' => 59.99],
            ['id' => 3, 'name' => 'Assassin\'s Creed IV: Black Flag', 'price' => 11.99],
            ['id' => 4, 'name' => 'Black Myth Wukong', 'price' => 59.99],
            ['id' => 5, 'name' => 'Baldur\'s Gate 3', 'price' => 47.99],
            ['id' => 6, 'name' => 'Elden Ring', 'price' => 35.99],
            ['id' => 7, 'name' => 'Warhammer 40000 Space Marine', 'price' => 38.99],
            ['id' => 8, 'name' => 'Final Fantasy VII', 'price' => 48.99],
        ];
        return view('products.index', compact('products'));
    }
}
