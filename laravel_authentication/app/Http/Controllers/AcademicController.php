<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use App\Models\Academic;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academic = Academic::simplepaginate(10);
        return view('acad', compact('academic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated =  $request->validate([
            'name' => 'required | max:250',
            'roll_no' => 'required',
            'subject' => 'required'
        ]);

        // if ($validator->fails()) {
        //     return redirect()
        //                 ->back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }else{
            // $validated = $request->validated();
            $academic = Academic::create($validated);
            return redirect()->back()->with('success','User created successfully!');
        // }
        // dd($request->all());
      
        
        // return redirect()->back();
       
        // return response()->json(['status'=>1, 'success'=>'User created successfully1!']);

                //code for showing errors using ajax
                // if(!$validator->passes()){
                //     return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
                // }

                // else{
                //     $values = [
                //        'name' =>$request->name,
                //        'subject'=>$request->subject,
                //        "roll_no"=>$request->roll_no
                // ];
                // $query= DB :: table('academics')->insert($values);
                //        if($query ){
                //         return response()->json(['status'=>1, 'msg'=>'User created successfully1!']);
                //         // return redirect()->back()->with('success','User created successfully!');
                //  }

                // }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // dd($request->all());
        
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

    // sending Email
    public function sendEmail(Request $request)
    {
        // $emailData = [
        //     'subject' => 'welcome to rudra',
        //     'body' => 'welcome to rudra. this is test email sent using laravel mailer'
        // ];
        // Mail::to('sahil.sharma@rudrainnovative.com')->send(new WelcomeEmail($emailData));
        return view('email_send');
    }
}
