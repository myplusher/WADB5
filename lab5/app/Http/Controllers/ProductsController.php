<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProductsController extends Controller
{
   public function index()
   {
       $products = Product::all();

       return view('products', compact('products'));
   }

   public function create()
   {  
       return view('create'); 
   }

   public function save(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'price' => 'required'
        ]);

        $prod = new Product;
        $prod->name = $request->get('name');
        $prod->description = $request->get('description');
        $prod->photo = $request->get('photo');
        $prod->price = $request->get('price');

        $prod->save();

        

        return redirect('/');
    }

    public function destroy($id){

        Product::find($id)->delete();
        return redirect()->route('/');

    }
}


