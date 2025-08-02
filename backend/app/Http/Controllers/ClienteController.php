<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Cliente::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
    {
        $request-> validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'direccion'=>'required',
            'celular'=>'required',
            'nit'=> 'nullable',
            
         ]);
         $cliente = Cliente:: create($request->all());
 
         return response()->json([
           'mensaje'=>'cliente creada exitosamente',
           'cliente'=>$cliente,
         ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::find($id);
        if(!$cliente){

            return response()->json([
                'mensaje'=>'cliente no encontrada'

            ],404
            );
        }
        return response()->json($cliente,200);

        $request-> validate([
           'nombres'=>'required',
            'apellidos'=>'required',
            'direccion'=>'required',
            'celular'=>'required',
            'nit'=> 'nullable',
         ]);
         $cliente = Cliente:: create($request->all());
 
         return response()->json([
           'mensaje'=>'cliente creada exitosamente',
           'cliente'=>$cliente,
         ], 201);
         $cliente ->update($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'direccion'=>'required',
            'celular'=>'required',
            'nit'=> 'nullable',
         ]);
        $cliente = Cliente::find($id);
        if(!$cliente){

            return response()->json([
                'mensaje'=>'Cliente no encontrada'

            ],404
            );
        }
        $cliente ->update($request->all());

        return response()->json([
            'mensaje'=>'cliente actualizada exitosamente',
            'cliente'=>$cliente,
          ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        if(!$cliente){

            return response()->json([
                'mensaje'=>'Cliente no encontrada'

            ],404
            );
        }
        $cliente->delete();

        return response()->json([
            'mensaje'=>'cleinte eliminada correctamente'
        ],200
    );
    }
}
