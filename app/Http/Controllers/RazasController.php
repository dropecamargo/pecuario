<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB, Log, Datatables;

use App\Models\Razas;

class RazasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return DataTables::of(Razas::query())->make(true);
        }
        return view('referencias.razas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('referencias.razas.create');    
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

            $raza = new Razas;
            if($raza->isValid($data)){
                DB::beginTransaction();
                try{
                    $raza->fill($data);
                    $raza->fillBoolean($data);
                    $raza->save();

                    DB::commit();

                    return response()->json(['success'=>true,'id' => $raza->id]);
                }catch(\exception $e){
                    DB::rollback();
                    Log::error($e->getMessage());
                    return response()->json(['success' => false,'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success'=>false,'errors' => $raza->errors]);
        }    
        abort(403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $razas = Razas::findOrFail($id);
        if($request->ajax()){
            return response()->json($razas);
        }
        return view('referencias.razas.show',['razas' => $razas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $razas = Razas::findOrFail($id);
        return view('referencias.razas.edit', ['razas' => $razas]);        
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

            $raza = Razas::findOrFail($id);
            if($raza->isValid($data)){
                DB::beginTransaction();
                try{
                    $raza->fill($data);
                    $raza->fillBoolean($data);
                    $raza->save();

                    DB::commit();
                    return response()->json(['success' => true,'id' => $raza->id]);
                }catch(\Exception $e){
                    DB::rollback();
                    Log::errors($e->getMessage());
                    return response()->json(['success' => false, 'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success' => false, 'errors' => $raza->errors]);
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
