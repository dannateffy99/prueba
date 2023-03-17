<?php

namespace App\Http\Controllers;
use App\Http\Requests\NotaPostRequest;
use App\Models\Nota;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NotaRestController extends Controller
{
    public function index(){
        $notas=Nota::all();
        return response()->json($notas,Response::HTTP_OK);
       }
       public function store(NotaPostRequest $request){
        $nota=Nota::create($request->all());
        return response()->json([
            'message'=> "Registro creado satisfractoriamente",
            'nota'=> $nota
        ],Response::HTTP_CREATED);
       }
       public function update(NotaPostRequest $request,$nota){
        $nota=Nota::find($nota);
        $nota->update($request->only('name','descripcion'));
        return response()->json([
            'message'=> "Registro actualizado",
            'nota'=> $nota
        ],Response::HTTP_CREATED);
       }
       public function destroy($nota){
        $nota=Nota::find($nota);
        $nota->delete();
        return response()->json([
            'message'=> "Registro eliminado correctamente",
        ],Response::HTTP_OK);
       }
}
