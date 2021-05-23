<?php

namespace App\Http\Controllers;

use App\Tuition;
use Illuminate\Http\Request;

class TuitionController extends Controller
{
    
    public function index()
    {
        return view('backend.pages.tuition_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tuitionList = Tuition::all();
        return view('backend.pages.add_tuition')->withAll_tuitions($tuitionList);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gender' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'preferred_tuition' => 'required',
            'tuitoring_time' => 'required',
            'number_of_days' => 'required',
            'number_of_students' => 'required',
            'salary' => 'required',
            'salary' => 'required',
        ]);
        if ($validated->fails()) {
            return redirect()->route('tuition.create')->withErrors($validator)
                                                      ->withInput();
        }else{
            $tuition = new Tuition();
            $tuition->gender = $request->gender;
            $tuition->class = $request->class;
            $tuition->medium = $request->medium;
            $tuition->subject = $request->subject;
            $tuition->preferred_tuition = $request->preferred_tuition;
            $tuition->tuitoring_time = $request->tuitoring_time;
            $tuition->tuitoring_days = $request->number_of_days;
            $tuition->no_of_students = $request->number_of_students;
            $tuition->salary = $request->salary;
            $tuition->location = $request->location;

            $tuition->save();
            return redirect()->route('tuition.index')
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function show(Tuition $tuition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function edit(Tuition $tuition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tuition $tuition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tuition  $tuition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tuition $tuition)
    {
        //
    }
}
