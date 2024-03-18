<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('order');
    }

    public function store(Request $request)
    {
        $tamaño = $request->input('tamaño');
        $sabor1 = $request->input('sabor1');
        $sabor2 = $request->input('sabor2');

        // Acá Guardar los datos de la orden en la base de datos

        // Guardar los datos de la orden en la sesión
        $request->session()->put('tamaño', $tamaño);
        $request->session()->put('sabor1', $sabor1);
        $request->session()->put('sabor2', $sabor2);


        // Redirigir a la tercera pantalla
        return redirect()->route('confirmar-pedido');
    }

    public function confirm(Request $request)
    {
        $tamaño = $request->session()->get('tamaño');
        $sabor1 = $request->session()->get('sabor1');
        $sabor2 = $request->session()->get('sabor2');

        // Simular el estado del pedido (horno o en camino)
        $estado = "En horno";

        return view('confirm', compact('tamaño', 'sabor1', 'sabor2', 'estado'));
    }
}
