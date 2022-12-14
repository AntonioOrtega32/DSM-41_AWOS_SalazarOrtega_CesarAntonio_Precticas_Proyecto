<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
       
        return view('/categorias/categories', ['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         //Aqui se manda a llamar la vista de creacion o de formulario
         return view('/categorias/createcat');
       
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
    public function show(Category $categories)
    {
        return view('/categorias/showcat', compact('categories')); /* ← Esta parte del controlador funciona para mostrar los datos (NO MOVER!!!!) */
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
    
public function creaCategory(Request $request){/* ← Ademas este hace la funcion del Store!!! */
    $category = new Category;

/*↓ Aqui se mandana llamar las varibles del formulario! 
    y los valores de la tabla*/

    $category->nombrecategoria = $request->Nomcat;
  
    $category->save();
    
    return redirect()->route('categories');
}

public function view($category_id){

    $category = Category::find($category_id);

    return view('/categorias/upcat',['category'=>$category]);

}

public function updateCategory(Request $request){/* ← Ademas este hace la funcion del Store!!! */
    $category = Category::find($request->category_id);

/*↓ Aqui se mandana llamar las varibles del formulario! 
    y los valores de la tabla*/

    $category->nombrecategoria = $request->Nomcat;
  
    $category->save();
    
    return redirect()->route('categories');
}

public function deleteCategory($category_id)
    {
        $category = Category::find($category_id);
        $category -> delete();

        return redirect()->route('categories');

    }


}
