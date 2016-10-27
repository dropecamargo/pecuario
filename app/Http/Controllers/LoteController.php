<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB, Log, Datatables;

use App\Models\Lote;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          if($request->ajax()){
            return DataTables::of(Lote::query())->make(true);
        }
        return view('referencias.lote.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('referencias.lote.create');
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

            $lote = new Lote;
            if($lote->isValid($data)){
                DB::beginTransaction();
                try{
                    $lote->fill($data);
                    $lote->fillBoolean($data);
                    $lote->save();

                    DB::commit();

                    return response()->json(['success'=>true,'id' => $lote->id]);
                }catch(\exception $e){
                    DB::rollback();
                    Log::error($e->getMessage());
                    return response()->json(['success' => false,'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success'=>false,'errors' => $lote->errors]);
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
         $lote = Lote::findOrFail($id);
        if ($request->ajax()) {
            return response()->json($lote);    
        }        
        return view('referencias.lote.show', ['lote' => $lote]);        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
