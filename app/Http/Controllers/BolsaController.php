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
            'Nombre' => $request->input('nombre'),
            'Meta' => $request->input('meta'),
            'fecha_meta' => $request->input('fecha_meta'),
            'Descripcion' => $request->input('descripcion'),
            'monto' => $request->input('monto'),
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
            'fecha_meta' => 'required|date',
            'Descripcion' => 'required',
            'monto' => 'required|numeric',
        ]);

        $bolsa = Bolsa::findOrFail($id);
        
        $bolsa->Nombre = $request->input('Nombre');
        $bolsa->Meta = $request->input('Meta');
        $bolsa->fecha_meta = $request->input('fecha_meta');
        $bolsa->Descripcion = $request->input('Descripcion');
        $bolsa->monto = $request->input('monto');
        $bolsa->save();
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
