<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;
/**
 * Description of SeriesController
 *
 * @author marcelo
 */
class SeriesController extends Controller 
{
    public function index()
    {   
        return Serie::query()->orderBy('nome')->get();
    }
    
    public function store(Request $request) {
        return response()
                ->json(
//                        Serie::create(["nome" => $request->nome]), 
                        Serie::create($request->all()), 
                        201
                        );
    }
    
    public function show(int $id) {
        $serie = Serie::find($id);
        if(is_null($serie)){
            return response()->json("", 204);
        }
        
        return response()->json($serie);
    }
    
    public function update(int $id, Request $request) {
        $serie = Serie::find($id);
        if(is_null($serie)){
            return response()->json("", 204);
        }
        
        $serie->fill($request->all());
        $serie->save();
        
        return response()->json($serie);
    }
    
    public function destroy(int $id) {
        $serie = Serie::find($id);
        if(is_null($serie)){
            return response()->json("", 204);
        }
        
        $serie->delete();
        return response()->json($serie);
    }
}
