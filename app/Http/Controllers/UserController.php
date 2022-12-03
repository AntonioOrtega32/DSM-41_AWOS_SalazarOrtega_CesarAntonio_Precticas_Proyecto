<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('/usuarios/users', ['users'=>$users]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //Aqui se manda a llamar la vista de creacion o de formulario
     return view('/usuarios/createusu');
        
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
    public function show(User $users)
    {
        return view('/usuarios/showusu', compact('users')); /* ← Esta parte del controlador funciona para mostrar los datos (NO MOVER!!!!) */
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
    
     public function creaUser(Request $request){/* ← Ademas este hace la funcion del Store!!! */
        $user = new User;


        $request->validate([
            'Nom'=>'required',
            'Passw'=>'required',  /* Validacion de datos!! */
            'Email'=>'required',
        ]);

    /*↓ Aqui se mandana llamar las varibles del formulario! 
        y los valores de la tabla*/

        $user->name = $request->Nom;
        $user->email = $request->Email;
        $user->password = $request->Passw; 
        
        $user->save();
        
        return redirect()->route('users');
    }

    public function view($user_id){

        $user = User::find($user_id);

        return view('/usuarios/upusu',['user'=>$user]);

    }

    public function updateUser(Request $request){
        $user = User::find($request->user_id);

        
        $user->name = $request->Nom;
        $user->email = $request->Email;
        $user->password = $request->Passw; 
        
        $user->save();
        
        return redirect()->route('users');
    }

    public function deleteUser($user_id)
    {
        $user = User::find($user_id);
        $user -> delete();

        return redirect()->route('users');

    }


}
