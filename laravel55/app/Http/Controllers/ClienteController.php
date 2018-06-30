<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function nuevoRegistro()
    {

        return view("registro");
    }

    public function index()
    {
        //
    return view("perfilcliente");

    }

    
    public function formLogin()
    {

        return view("login");
        
    }

    public function autenticarCliente(Request $request)
    {

        //return $request->txtUser;

        $clientes=Cliente::where("login","=",$request->txtUser)->get();

        if(count($clientes)>0)
        {
            $password = $clientes[0]->password;
            if(Hash::check($request->txtPassword, $password))
            {

                session(["cliente"=>$clientes[0]]);

                return redirect('/');

            }
        }

        return "Usuario y/o passwords incorrectos"; 

    }


    public function cerrarSesionCliente()
    {
        session(["cliente"=>null]);

        return redirect('/');
    }

    public function misCompras()
    {
        return view("compras.miscompras");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "hola CREATE";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $cliente = new Cliente();
        $cliente->nombres = $request->txtNombres;
        $cliente->apellidos = $request->txtApellidos;
        $cliente->fecha_nacimiento=\DateTime::createFromFormat('Y-m-d',  $request->txtFechaNac);


        $cliente->email = $request->txtCorreo;
        $cliente->login = $request->txtLogin;
        $cliente->password =  Hash::make( $request->txtPassword);

        

        $cliente->save();
        


       return "El cliente se guardo satisfactoriamente";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        return "hola";
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
}
