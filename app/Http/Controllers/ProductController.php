<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use \App\Models\Product;
use \App\Models\Lent;
use Auth;

class ProductController extends Controller
{
    public function index(){
        return view('product.index',[
            'product' => \App\Models\Product::all()
        ]);
        
    }
    

    public function returnLentProduct($id) {
        Product::find($id)->sendback();
        return redirect()->back();
    }

    public function requestLentProduct($id) {
        Product::find($id)->borrow();
        return redirect()->back();
    }

    public function show($id)
    {
        return view('product.show',[
            'product' => \App\Models\Product::find($id),
        ]);
    }

    

    public function store(Request $request, \App\Models\Product $product)
    {
        $product->name = $request->input("name");
        $product->kind = $request->input("kind");
        $product->description = $request->input("description");
        $product->image = $request->input("image");
        $product->price = $request->input("price");
        $product->date = $request->input("date");
        $product->ownerID = Auth::user()->id;

        try{
            $product->save();
            return redirect('/');
        }
        catch(Execption $e){
            return redirect('/product/create');
        }
      
    }

    public function destroy($id) {

    
        Lent::where('productID', '=', $id)->delete();

        
        Product::destroy($id);

        // Redirect to all the products
        return redirect('/');
    }

    public function create(){
        return view('product.create', [
            'kind_of_product' => \App\Models\KindOfProduct::all()
        ]);
    }
}
