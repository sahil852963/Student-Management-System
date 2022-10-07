<?php

namespace App\Http\Controllers;
use App\Models\Apiuser;
use Illuminate\Http\Request;
use Validator;

class TestController extends Controller
{
    public function index(){
        // echo "hello";
        $users = Apiuser::get();
        return json_encode($users);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'fname' => 'required',
            'lname' => 'required'
        ]);
        $res = [];
        if($validator->fails()){
            $res['errors'] = true;
            $res['errors'] = $validator->errors();
        }else{
            $res['success'] = true;
            // $res['request'] = $request->all();
            $user = Apiuser::create($request->all());
            $res['data'] = $user;
        }
        
        return json_encode($res);

    }
    public function show(Apiuser $id){
        $user = Apiuser::find($id);
        return json_encode($user);
    }
    public function update(Request $request, $id){
        $userupd = Apiuser::find($id);
        $userupd->fname = $request->fname;
        $userupd->lname = $request->lname;
    }
    public function destroy(Request $request, $id){
        $userDel = Apiuser::find($id);
        $res = [];
    if($userDel){
        $userDel->delete(); 
        $res['success'] = 'user deleted!';
    }
     else{
         $res['success'] = 'user deleted already!';
     }
       
     return response()->json($res); 
    }
}
