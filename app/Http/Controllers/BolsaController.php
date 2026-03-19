<?php

namespace App\Http\Controllers;

use App\Models\Bolsa;
use Illuminate\Http\Request;
use App\Models\User;


class BolsaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bolsas = Bolsa::all();
        return view('bolsas.index', compact('bolsas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = User::all();
        return view('bolsas.create', compact('usuarios'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Bolsa::create([
            'Nombre' => $request->input('Nombre'),
            'Meta' => $request->input('Meta'),
            'Fecha de Meta' => $request->input('Fecha de Meta'),
            'Descripcion' => $request->input('Descripcion'),
            'Monto Actual' => $request->input('Monto Actual'),
        ]);

        return redirect()->route('bolsas.index')->with('success', 'Bolsa registrada exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          //$bolsas = Bolsa::all();
      //  return view('bolsas.index', compact('bolsas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bolsa = Bolsa::findOrFail($id);
        return view('bolsas.edit' , compact('bolsa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Nombre' => 'required',
            'Meta' => 'required|numeric',
            'Fecha de Meta' => 'required|date',
            'Descripcion' => 'required',
            'Monto Actual' => 'required|numeric',
        ]);

        $bolsa = Bolsa::findOrFail($id);
        $bolsa->update($request->all());
        return redirect()->route('bolsas.index')->with('success', 'Bolsa actualizada exitosamente!');

    }

    /**
     * Remove the specified resource from storage.
     */
 public function destroy($id)
    {
        $bolsa = Bolsa::findOrFail($id);
        $bolsa->delete();

        return redirect()->route('bolsas.index')
            ->with('success', 'Bolsa eliminada correctamente');
    }
}
