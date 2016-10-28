<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB, Log, Datatables;

use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return Datatables::of(Animal::getAnimales())->make(true);
        }
        return view('animal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animal.create');  
     }
    

  
    public function store(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();

            $animal = new Animal;
            if($animal->isValid($data)){
                DB::beginTransaction();
                try{
                    $animal->fill($data);
                    $animal->fillBoolean($data);
                    $animal->save();

                    DB::commit();

                    return response()->json(['success'=>true,'id' => $animal->id]);
                }catch(\exception $e){
                    DB::rollback();
                    Log::error($e->getMessage());
                    return response()->json(['success' => false,'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success'=>false,'errors' => $animal->errors]);
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
        $animal = Animal::getAnimal($id);
        if ($request->ajax()) {
            return response()->json($animal);    
        }        
        return view('animal.show', ['animal' => $animal]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::getAnimal($id);
        return view('animal.edit', ['animal' => $animal]);  
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

            $animal = Animal::getAnimal($id);
            if($animal->isValid($data)){
                DB::beginTransaction();
                try{
                    $animal->fill($data);
                    $animal->fillBoolean($data);
                    $animal->save();

                    DB::commit();
                    return response()->json(['success' => true,'id' => $animal->id]);
                }catch(\Exception $e){
                    DB::rollback();
                    Log::errors($e->getMessage());
                    return response()->json(['success' => false, 'errors' => trans('app.exception')]);
                }
            }
            return response()->json(['success' => false, 'errors' => $animal->errors]);
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
