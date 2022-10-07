<?php

namespace App\Http\Controllers;

use App\Models\Tel;
use Illuminate\Http\Request;

class TelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Tel::all();
    }

    public function foo()
    {
        //
        return Tel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required'
            ]
        );

        Tel::create($request->all());

        return response('', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tel  $tel
     * @return \Illuminate\Http\Response
     */
    public function show(Tel $tel)
    {
        //
        return $tel;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tel  $tel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tel $tel)
    {
        //

        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required'
            ]
        );

        $tel->update($request->all());
        return response('', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tel  $tel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tel $tel)
    {
        //
        $tel->delete();
        return response('', 204);
    }
}
