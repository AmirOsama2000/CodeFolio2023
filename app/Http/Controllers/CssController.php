<?php

namespace App\Http\Controllers;

use App\Models\Css;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $csss = Css::orderBy('id' , 'asc')->simplepaginate(1);
        return response()->view('cms.css.index' , compact('csss'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()){
            return response()->view('cms.css.create');
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
            $csss = new Css();
            $csss->name = $request->get('name');
            $csss->file = $request->get('file');


            $isSaved = $csss->save();
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
            $csss = Css::findOrFail($id);
            return response()->view('cms.css.edit' , compact('csss'));
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
            $csss = Css::findOrFail($id);
            $csss->name = $request->get('name');
            $csss->file = $request->get('file');

            $isUpdate = $csss->save();
            return ['redirect' =>route('csss.index')];

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
        $csss = Css::destroy($id);
        return response()->json(['icon' => 'success' , 'title' => 'تم حذف المشروع بنجاح'] , $csss ? 200 : 400);
    }
}
