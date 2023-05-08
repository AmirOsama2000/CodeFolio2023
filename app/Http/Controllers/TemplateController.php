<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = Template::orderBy('id' , 'asc')->simplepaginate(1);
        return response()->view('cms.template.index' , compact('templates'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()){

            return response()->view('cms.template.create');
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
            $templates = new Template();
            $templates->name = $request->get('name');
            $templates->file = $request->get('file');


            $isSaved = $templates->save();
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
            $templates = Template::findOrFail($id);
            return response()->view('cms.template.edit' , compact('templates'));
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
            $templates = Template::findOrFail($id);
            $templates->name = $request->get('name');
            $templates->file = $request->get('file');

            $isUpdate = $templates->save();
            return ['redirect' =>route('templates.index')];

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
        $templates = Template::destroy($id);
        return response()->json(['icon' => 'success' , 'title' => 'تم حذف المشروع بنجاح'] , $templates ? 200 : 400);

    }
}
