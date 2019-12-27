<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;

class ProductsController extends Controller
{
    public function index(){
    	$products = Products::all();
    	return view('products.index',['products' => $products]);
    }
    public function tambah(){
    	return view('products.tambah');
    }
    public function store(Request $request) {				

		$save = [];
		$save['nama_products'] = $request->nama_products;
		$save['harga'] = $request->harga;
		$save['deskripsi'] = $request->deskripsi;
		$save['gambar'] = $request->gambar;
		$save['berat'] = $request->berat;

		// dd($save);

		Products::insert($save);
		
		return redirect('products');
	 
	}

	public function edit($id_products) {
		$products = products::where('id_products', decrypt($id_products))->get();		
		return view('products.edit',['products' => $products]);
	}

	public function update(Request $request) {
		
		Products::where('id_products',$request->id_products)->update([
			'nama_products' => $request->nama_products,
			'jenis_products' => $request->jenis_products

		]);
		
		return redirect('products');
	}

	public function delete($id) {
		
		$products = Products::find(decrypt($id))->delete();
			
		
		return redirect('products/index');
	}
}
