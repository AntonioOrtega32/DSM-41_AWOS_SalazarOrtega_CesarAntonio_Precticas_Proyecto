<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //↓ Aqui se manda a llamar a todos los campos de la tabla
        $products = Product::orderBy('id','desc')->get();
       
        //↓ Retorna la vista!
        return view('/productos/products', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //↓ Aqui se manda a llamar la vista de creacion o de formulario
        $categorias = Category::all();
        return view('/productos/createpro',['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProduct(Request $request)
    {
        //$products = new Product;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products)
    {
        return view('/productos/showpro', compact('products')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
        /*↓ En esta parte se declara las variables de envio */
    public function creaProduct(Request $request){/* ← Ademas este hace la funcion del Store!!! */
        
        $request->validate([
            'Prod'=>'required',
            'imagen'=>'required'
        ]);
        
        $input = $request->all();
        if ($request->hasFile('imagen')) {
            $products['imagen']=$request->file('imagen')->store('uploads','public');
        }


        $products = new Product();

        /*↓ Aqui se mandana llamar las varibles del formulario! 
        y los valores de la tabla*/

        $products->producto = $request->Prod;
        $products->capvolumetrica = $request->Vol;
        $products->numempaques = $request->Empaque;
        $products->preciounitario = $request->Pres;
        $products->imagen = $request->imagen;
        $products->category_id= $request->cat;
               

        $products->save();
        
        return redirect()->route('products');
    }

    public function view($product_id){
        $products = Product::find($product_id);

        $categorias = Category::all();
        return view('/productos/uppro',['categorias'=>$categorias, 'products'=>$products]);
    }
   
    public function updateProduct(Request $request){/* ← Ademas este hace la funcion del Store!!! */
        
        $products = Product::find($request->product_id);

        /*↓ Aqui se mandana llamar las varibles del formulario! 
        y los valores de la tabla*/

        $products->producto = $request->Prod;
        $products->capvolumetrica = $request->Vol;
        $products->numempaques = $request->Empaque;
        $products->preciounitario = $request->Pres;
        $products->category_id= $request->cat;
        
        $products->save();
        
        return redirect()->route('products');
    }    

 public function deleteProduct($product_id)
    {
        $products = Product::find($product_id);
        $products -> delete();

        return redirect()->route('products');

    }

}