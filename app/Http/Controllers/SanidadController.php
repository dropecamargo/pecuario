<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB, Log, Datatables;

use App\Models\Sanidad;

class SanidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          if($request->ajax()){
            return DataTables::of(Sanidad::query())->make(true);
        }
        return view('sanidad.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sanidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();

            $sanidad = new Sanidad;
            if($sanidad->isValid($data)){
                DB::beginTransaction();
                try{
                    $sanidad->fill($data);
                    $sanidad->fillBoolean($data);
                    $sanidad->save();

                    DB::commit();

                    return response()->json(['success'=>true,'id' => $sanidad->id]);
                }catch(\exception $e){
                    DB::rollback();
                    Log::error($e->getMessage());
                    return response()->json(['success' => false,'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success'=>false,'errors' => $sanidad->errors]);
        }    
        abort(403);    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
         $sanidad = Sanidad::getSanidad($id);
        if ($request->ajax()) {
            return response()->json($sanidad);    
        }        
        return view('sanidad.show', ['sanidad' => $sanidad]);        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sanidad = Sanidad::getSanidad($id);
        return view('sanidad.edit',['sanidad' => $sanidad]);    
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

            $sanidad = Sanidad::getSanidad($id);
            if($sanidad->isValid($data)){
                DB::beginTransaction();
                try{
                    $sanidad->fill($data);
                    $sanidad->fillBoolean($data);
                    $sanidad->save();

                    DB::commit();
                    return response()->json(['success' => true,'id' => $sanidad->id]);
                }catch(\Exception $e){
                    DB::rollback();
                    Log::errors($e->getMessage());
                    return response()->json(['success' => false, 'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success' => false, 'errors' => $sanidad->errors]);
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
