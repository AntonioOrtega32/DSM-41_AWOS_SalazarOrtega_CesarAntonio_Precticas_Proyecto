<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //↓ Aqui se manda a llamar a todos los campos de la tabla
        $clients = Client::all();

        //↓ Retorna la vista!
        return view('/clientes/clients', ['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //Aqui se manda a llamar la vista de creacion o de formulario
        return view('/clientes/createcli');
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
    public function show(Client $clients)
    {
        return view('/clientes/showcli', compact('clients')); /* ← Esta parte del controlador funciona para mostrar los datos (NO MOVER!!!!) */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $clients)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $clients)/* ← Ademas este hace la funcion del Store!!! */
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }

      /*↓ En esta parte se declara las variables de envio */
    
    public function creaClient(Request $request){
        $client = new Client;


        $request->validate([
            'Nom'=>'required',
            'Tel'=>'required',
            'Email'=>'required',
        ]);
    /*↓ Aqui se mandana llamar las varibles del formulario! 
        y los valores de la tabla*/

        $client->nombre = $request->Nom;
        $client->apPaterno = $request->Apat;
        $client->apMaterno = $request->Amat;
        $client->telefono = $request->Tel;
        $client->email = $request->Email;
        $client->direccion = $request->Dir;
        $client->password = $request->Passw;

        $client->save();
        
        return redirect()->route('clients');
    }

    public function view($client_id){

        $client = Client::find($client_id);

        return view('/clientes/upcli',['client'=>$client]);

    }

    public function updateClient(Request $request){
        $client = Client::find($request->client_id);

        
        $client->nombre = $request->Nom;
        $client->apPaterno = $request->Apat;
        $client->apMaterno = $request->Amat;
        $client->telefono = $request->Tel;
        $client->email = $request->Email;
        $client->direccion = $request->Dir;
        $client->password = $request->Passw;

        $client->save();
        
        return redirect()->route('clients');
    }

    public function deleteClient($client_id)
    {
        $client = Client::find($client_id);
        $client -> delete();

        return redirect()->route('clients');

    }

}
 