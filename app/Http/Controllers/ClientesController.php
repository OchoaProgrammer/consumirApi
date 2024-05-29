<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/clients');
        $finish = $response->json();
        //dd($finish);
        return view('clientes', compact('finish'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url.'/clients', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->adress,

        ]);
        return redirect()->route('clientes.index');
       
    }

    /**
     * Display the specified resource.
     */
    public function view($idCliente)
{
    $url = env('URL_SERVER_API', 'http://127.0.0.1');
    $response = Http::get($url.'/clients/'.$idCliente);
    $cliente = $response->json();
    return view('view', compact('cliente'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url.'/clients/'.$request->id, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->adress,

        ]);
       
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idCliente)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url.'/clients/'.$idCliente);
        return redirect()->route('clientes.index'); 
    }

    public function verServiciosCliente($idCliente)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/clients/'.$idCliente);
    $cliente = $response->json();
    $finish = $cliente['services'];
    return view('verServiciosCliente', compact('cliente', 'finish'));
    }
}
