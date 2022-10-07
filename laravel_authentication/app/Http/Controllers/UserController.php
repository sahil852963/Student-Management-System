<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Session;
use App\Jobs\EmailJob;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::simplepaginate(10);
        return view('users', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = User::find($id);
        return view('edit', compact('user_id'));
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
        // dd($request->all());
        $updateUser = User::find($id);
        $updateUser->name = $request->name;
        $updateUser->email = $request->email;
        $updateUser->save();
        return redirect(url('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $del = User::find($id);
        $del->delete();
        return redirect(url('user'));
    }
    // public function sendEmailQueue()
    // {
    //     return view('email_send');
    // }
    public function sentEmail(Request $request)
    {
        $request_data = $request->toArray();
        $emails = explode(',', $request_data['emails']);
        foreach($emails as $email){
            dispatch(new EmailJob($email));
        } 
        return "sending prcessing started...";
         
    }
}   
   
