<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaModel;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(CategoriaModel::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "nombre" => 'required',
            "descripcion" => 'nullable'
        ]);

        $categoria = CategoriaModel::create($request->all());

        return response()->json([
            "mensaje" => "categoria creada correctamente",
            "categoria" => $categoria
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = CategoriaModel::find($id);
        if (!$categoria) {
            return response()->json([
                'mensaje' => 'categoria no encontrada'
            ], 404);
        }

        return response()->json([
            'categoria' => $categoria
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            "nombre" => 'required',
            "descripcion" => 'nullable'
        ]);

        $categoria = CategoriaModel::find($id);
        if (!$categoria) {
            return response()->json([
                'mensaje' => 'categoria no encontrada'
            ], 404);
        }

        $categoria->update($request->all());
        return response()->json([
            'mensaje' => 'categoria actualizada correctamente',
            'categoria' => $categoria
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categoria = CategoriaModel::find($id);
        if (!$categoria) {
            return response()->json([
                'mensaje' => 'categoria no encontrada'
            ], 404);
        }
        $categoria->delete();
        return response()->json([
            'mensaje' => 'categoria eliminada correctamente'
        ], 200);
    }
}
