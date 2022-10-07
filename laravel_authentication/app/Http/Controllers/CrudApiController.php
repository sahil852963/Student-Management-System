<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crudapi;
use Validator;

class CrudApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $users = Crudapi::get()->toArray();
        $res = [];
        $res['users '] = $users;
        return json_encode($res);
        // echo $users;
        // $crudApi = Crudapi::simplePaginate();
        // return view('api.apiuser', compact('crudApi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        $res = [];
        $res['request '] = $request->all();
        return json_encode($res);
        // return view('api.apicreate');
        // return view('api.apicreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =   Validator::make($request->all(), [
            'name' => 'required',
            'city' => 'required',
            'gender' => 'required'
        ]);
        $res = [];

        if ($validator->fails()) {
            $res['success'] = false;
            $res['error'] = $validator->errors();
        }else{
            $res['success'] = true;
            $user = $request->all();
            $model = Crudapi::create($user);

            //Other method    // 
            // $model = new Crudapi();
            // $model->name = $user['name'];
            // $model->city = $user['city'];
            // $model->gender = $user['gender'];
            // $model->save();

            $res['data'] = $model;
        }
       
        return json_encode($res);
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
        //
    }
}
