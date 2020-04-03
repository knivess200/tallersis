<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator ,Str;

use App\Http\Models\Category,App\Http\Models\Product ;

class ProductController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    	$this->middleware('isadmin');
    }

    public function getHome(){

    	return view('admin.products.home'); 
    }
    public function getProductAdd(){
        $cats = Category::where('module', '0')->pluck('name', 'id');
        $data = ['cats' => $cats];
    	return view('admin.products.add', $data); 
    
    }

    public function postProductAdd(Request $request){
        $rules = [
            'name' => 'required',
            'img' => 'required',
            'price' => 'required',
            'content' => 'required'
        ];

        $messages = [
            'name.required' => 'El nombre del producto es requerido',
            'img.required' => 'Seleccione una imagen destacada',
            'img.image' => 'El archivo no es una imagen',
            'price.required' => 'Ingrese el precio del producto',
            'content.required' => 'Ingrese una descripcion del producto'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);       
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $product = new Product;
            $product->status = '0';
            $product->name = e($request->input('name'));
            $product->slug = Str::slug($request->input('name'));
            $product->category_id = $request->input('category');
            $product->image = "image.png";
            $product->price = $request->input('price');
            $product->in_discount = $request->input('indiscount');
            $product->discount = $request->input('discount');
            $product->content = e($request->input('content'));

            if($product->save()):
                return redirect('/admin/products')->with('message', 'Guardado con exito')->with('typealert', 'success');
            endif;

        endif;
    }
}
