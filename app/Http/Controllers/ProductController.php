<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');

    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request-> validate([
            'name' => 'nullable',
            'surname' => 'nullable',
            'email' => 'email',
            'gender' => 'required',
            'strengths' => 'nullable',
            'weaknesses' => 'nullable',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }
}
