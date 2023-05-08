<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $forms = Form::orderBy('id' , 'asc')->simplepaginate(5);
            return response()->view('cms.form.index' , compact('forms'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return response()->view('cms.form.create');

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
            'age' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'course' => 'required',
            'message' => 'required',

        ]);

        if(!$validator->fails()){
            $forms = new Form();
            $forms->name = $request->get('name');
            $forms->age = $request->get('age');
            $forms->contact = $request->get('contact');
            $forms->email = $request->get('email');
            $forms->course = $request->get('course');
            $forms->message = $request->get('message');


            $isSaved = $forms->save();
            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => 'تم إرسال الرسالة بنجاح'] , 200);

            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'لم يتم إرسال الرسالة'] , 400);

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
        $forms = Form::destroy($id);
        return response()->json(['icon' => 'success' , 'title' => 'تم حذف الرسالة بنجاح'] , $forms ? 200 : 400);

    }
}
