<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	$category = Category::all();
    	return view('category.index',['category' => $category]);
    }
    public function tambah(){
    	return view('category.tambah');
    }
    public function store(Request $request) {				

		$save = [];
		$save['jenis_category'] = $request->jenis_category;
		$save['nama_category'] = $request->nama_category;

		// dd($save);

		Category::insert($save);
		
		return redirect('category');
	 
	}

	public function edit($id_category) {
		$category = Category::where('id_category', decrypt($id_category))->get();		
		return view('category.edit',['category' => $category]);
	}

	public function update(Request $request) {
		
		Category::where('id_category',$request->id_category)->update([
			'nama_category' => $request->nama_category,
			'jenis_category' => $request->jenis_category

		]);
		
		return redirect('category');
	}

	public function delete($id) {
		$category = Category::find(decrypt($id))->delete();
		return redirect('category');
	}

}
