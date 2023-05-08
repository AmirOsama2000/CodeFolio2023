<?php

namespace App\Http\Controllers;

use App\Models\Js;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jses = Js::orderBy('id' , 'asc')->simplepaginate(1);
        return response()->view('cms.js.index' , compact('jses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()){
            return response()->view('cms.js.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() , [
            'name' => 'required',
            'file' => 'required',

        ]);

        if(!$validator->fails()){
            $jses = new Js();
            $jses->name = $request->get('name');
            $jses->file = $request->get('file');


            $isSaved = $jses->save();
            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => 'تم إضافة المشروع بنجاح'] , 200);

            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'لم يتم إضافة المشروع'] , 400);

            }
        }
        else{
            return response()->json(['icon' => 'error' ,'title'=> $validator->getMessageBag()->first()] , 400);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()){

            $jses = Js::findOrFail($id);
            return response()->view('cms.js.edit' , compact('jses'));
        }


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
        $validator = Validator($request->all() , [
            'name' => 'required',
            'file' => 'required',
        ]);

        if(!$validator->fails()){
            $jses = Js::findOrFail($id);
            $jses->name = $request->get('name');
            $jses->file = $request->get('file');

            $isUpdate = $jses->save();
            return ['redirect' =>route('jses.index')];

            if($isUpdate){
                return response()->json(['icon' => 'success' , 'title' => 'تم تعديل المشروع بنجاح'] , 200);

            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'لم يتم تعديل المشروع'] , 400);

            }
        }
        else{
            return response()->json(['icon' => 'error' ,'title'=> $validator->getMessageBag()->first()] , 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jses = Js::destroy($id);
        return response()->json(['icon' => 'success' , 'title' => 'تم حذف المشروع بنجاح'] , $jses ? 200 : 400);
    }
}
