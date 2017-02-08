<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
	public function getIndex(){
		$products = Product::all();
		return view('products.index', ['produits'=>$products]);
	}

	public function getShow($id){
		$product = Product::find($id);
		return view('products.show', ['product'=>$product]);

	}

	public function postResell($id){
		$product = Product::find($id);
		$product->stock--;
		$product->save();
		return back();

	}

	public function postRestock($id){
		$product = Product::find($id);
		$product->stock++;
		$product->save();
		return back();

	}


	public function getNew(){
		return view('products.new');
	}

	public function postNew(Request $request){
		$product = new Product;
		$product->name = $request->name;
		$product->price = $request->price;
		$product->description = $request->description;
		$product->stock = $request->stock;
		$product->save();
		return redirect('products');
	}

	public function getModifier($id){
		$product = Product::find($id);
		return view('products.edite',['produits'=>$product]);
	}

	public function postModif(Request $request){
		$product = Product::find($request->id);

		$product->name = $request->name;
		$product->price = $request->price;
		$product->description = $request->description;
		$product->stock = $request->stock;
		$product->save();
		return redirect('products');

	}

	public function postDelete($id){
		$product = Product::find($id);
		$product->delete();
		return back();

	}


}
