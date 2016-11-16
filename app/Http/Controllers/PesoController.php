<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB, Log, Datatables;
use App\Town;
use App\Models\Peso;

class PesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return Datatables::of(Peso::getPesos())->make(true);
        }
        return view('referencias.peso.index');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('referencias.peso.create');  
    }

    
    
 
    public function postSelect(Request $request){
        dd($request->all());
    }
    

  
    public function store(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();

            $peso = new Peso;
            if($peso->isValid($data)){
                DB::beginTransaction();
                try{
                    $peso->fill($data);
                    $peso->fillBoolean($data);
                    $peso->save();

                    DB::commit();

                    return response()->json(['success'=>true,'id' => $peso->id]);
                }catch(\exception $e){
                    DB::rollback();
                    Log::error($e->getMessage());
                    return response()->json(['success' => false,'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success'=>false,'errors' => $peso->errors]);
        }    
        abort(403);   
     }
        public function buscar_usuarios($pais,$dato="")
        {

        $usuarios= User::Busqueda($pais,$dato)->paginate(25);  
        $paises=Pais::all();
        $paissel=$paises->find($pais);
        return view('listados.listado_usuarios')
        ->with("paises", $paises )
        ->with("paissel", $paissel )
        ->with("usuarios", $usuarios );       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,request $request)
    {
        $peso = Peso::getPeso($id);
        
        if ($request->ajax()) {
            return response()->json($peso);    
        }        
        return view('referencias.peso.show', ['peso' => $peso]);   
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peso = Peso::getPeso($id);
        return view('referencias.peso.edit', ['peso' => $peso]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         if($request->ajax()){
            $data = $request->all();

            $peso = Peso::getPeso($id);
            if($peso->isValid($data)){
                DB::beginTransaction();
                try{
                    $peso->fill($data);
                    $peso->fillBoolean($data);
                    $peso->save();

                    DB::commit();
                    return response()->json(['success' => true,'id' => $peso->id]);
                }catch(\Exception $e){
                    DB::rollback();
                    Log::errors($e->getMessage());
                    return response()->json(['success' => false, 'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success' => false, 'errors' => $peso->errors]);
        }       
        abort(403);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
