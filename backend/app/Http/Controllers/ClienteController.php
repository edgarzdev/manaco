<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clienteModel;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(ClienteModel::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'nullable',
            'celular' => 'required',
            'nit' => 'required'
        ]);

        $cliente = ClienteModel::create($request->all());

        return response()->json([
            "mensaje" => "caliente creada correctamente",
            "cliente" => $cliente
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $cliente = ClienteModel::find($id);
        if (!$cliente) {
            return response()->json([
                'mensaje' => 'cliente no encontrado'
            ], 404);
        }

        return response()->json([
            'cliente' => $cliente
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validación
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'nullable',
            'celular' => 'required',
            'nit' => 'required'
        ]);

        // Buscar cliente
        $cliente = ClienteModel::find($id);

        if (!$cliente) {
            return response()->json([
                "mensaje" => "Cliente no encontrado"
            ], 404);
        }

        // Actualizar datos
        $cliente->update($request->all());

        return response()->json([
            "mensaje" => "Cliente actualizado correctamente",
            "cliente" => $cliente
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cliente = ClienteModel::find($id);
        if (!$cliente) {
            return response()->json([
                'mensaje' => 'cliente no encontrado'
            ], 404);
        }
        $cliente->delete();
        return response()->json([
            'mensaje' => 'cliente eliminado correctamente'
        ], 200);

    }
}
