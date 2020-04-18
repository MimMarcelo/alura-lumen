<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

abstract class Controller extends BaseController
{
    private $classe;
    
    public function __construct(string $classe) {
        $this->classe = $classe;
    }
    
    public function index()
    {   
        return $this->classe::query()->orderBy('nome')->get();
    }
    
    public function store(Request $request) {
        return response()
                ->json(
//                        $this->classe::create(["nome" => $request->nome]), 
                        $this->classe::create($request->all()), 
                        201
                        );
    }
    
    public function show(int $id) {
        $recurso = $this->classe::find($id);
        if(is_null($recurso)){
            return response()->json("", 204);
        }
        
        return response()->json($recurso);
    }
    
    public function update(int $id, Request $request) {
        $recurso = $this->classe::find($id);
        if(is_null($recurso)){
            return response()->json("", 204);
        }
        
        $recurso->fill($request->all());
        $recurso->save();
        
        return response()->json($recurso);
    }
    
    public function destroy(int $id) {
        $recurso = $this->classe::find($id);
        if(is_null($recurso)){
            return response()->json("", 204);
        }
        
        $recurso->delete();
        return response()->json($recurso);
    }
}
