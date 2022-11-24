<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

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
        $products = Product::all();
       
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
        $categoria = Category::all();
        return view('/productos/createpro',['categoria'=>$categoria]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function creaProduct(Request $request){
        $product = new Product();

        /*↓ Aqui se mandana llamar las varibles del formulario! 
        y los valores de la tabla*/

        $product->producto = $request->Prod;
        $product->capvolumetrica = $request->Vol;
        $product->numempaques = $request->Empaque;
        $product->preciounitario = $request->Pres;
        $product->category_id= $request->cat;
        
        $product->save();
        
        return redirect()->route('products');
    }


    public function delete($products_id){ 
 
        $product = Product::find($products_id);
        $product -> delete();
        return redirect()->route('products');}
}
