<?php

namespace App\Http\Controllers;

use App\Models\Polygon;
use Illuminate\Http\Request;
use Validator;

class PolygonController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'coordinates' => 'required|array',
        ]);

        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 422); 
        }

        $polygon = new Polygon();
        $polygon->name = $request->input('name');
        $polygon->hectareas = $request->input('hectareas');
        $polygon->polygon = [
            'type' => 'Feature',
            'properties' => [],
            'geometry' => [
                'type' => 'Polygon',
                'coordinates' => $request->input('coordinates'),
            ]
        ];
        // Guarda el objeto en la base de datos
        $polygon->save();
        return response()->json(['message' => 'Polígono creado con éxito', 'data' => $polygon], 201);
    }

    public function index()
    {
        try{
            $polygons =  Polygon::get();
            return response()->json([
                'success' => 'The polygons was recovered',
                'polygons' => $polygons,
            ], 200 );
        }
        catch(\Exception $e){
            return response()->json(['error' => 'Something went wrong recovered the polygons'], 400);
        }   
    }

    /**
     * Display the specified resource.
     */
    public function show(Polygon $polygon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Polygon $polygon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Polygon $polygon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try{
            $polygon = Polygon::findOrFail($id);
            $polygon->delete();
            return response()->json(['success' => 'polygon deleted succesfully'],200);
        }
        catch(\Exception $e){
            return response()->json(['error' => 'Something went wrong deleiteing the saved polygon'],400);
        }
    }
}
