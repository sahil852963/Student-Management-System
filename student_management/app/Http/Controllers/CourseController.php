<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $courses = Course::all();
        return view('showallcourses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $courseDetail = new Course;
        $courseDetail->course_name = $request->Course_Name;
        $courseDetail->teacher_name = $request->Teacher_Name;
        $courseDetail->batch_time = $request->Batch_Time;
        $courseDetail->teaching_day = $request->Teaching_Day;
        $courseDetail->save();
        return redirect('course');
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
        $courseDetail =Course::find($id);
        $courseDetail->course_name = $request->Course_Name;
        $courseDetail->teacher_name = $request->Teacher_Name;
        $courseDetail->batch_time = $request->Batch_Time;
        $courseDetail->teaching_day = $request->Teaching_Day;
        $courseDetail->save();
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Course::find($id);
        $user->delete();
        return redirect('course');
    }
}
