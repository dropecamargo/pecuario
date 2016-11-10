<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB, Log, Datatables;

use App\Models\Hato;

class HatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          if ($request->ajax()) {
            return Datatables::of(Hato::query())->make(true);
        }
        return view('referencias.hato.index');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('referencias.hato.create');    }

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

            $hato = new hato;
            if($hato->isValid($data)){
                DB::beginTransaction();
                try{
                    $hato->fill($data);
                    $hato->fillBoolean($data);
                    $hato->save();

                    DB::commit();

                    return response()->json(['success'=>true,'id' => $hato->id]);
                }catch(\exception $e){
                    DB::rollback();
                    Log::error($e->getMessage());
                    return response()->json(['success' => false,'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success'=>false,'errors' => $hato->errors]);
        }    
        abort(403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,request $request)
    {
        $hato = Hato::findOrFail($id);
        if ($request->ajax()) {
            return response()->json($hato);    
        }        
        return view('referencias.hato.show', ['hato' => $hato]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hato = Hato::findOrFail($id);
        return view('referencias.hato.edit', ['hato' => $hato]);  
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

            $hato = Hato::findOrFail($id);
            if($hato->isValid($data)){
                DB::beginTransaction();
                try{
                    $hato->fill($data);
                    $hato->fillBoolean($data);
                    $hato->save();

                    DB::commit();
                    return response()->json(['success' => true,'id' => $hato->id]);
                }catch(\Exception $e){
                    DB::rollback();
                    Log::errors($e->getMessage());
                    return response()->json(['success' => false, 'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success' => false, 'errors' => $hato->errors]);
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
