<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\RequestTuitor;
use Illuminate\Http\Request;
use Session;

class RequestTuitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front.requestTuitor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'location' => 'required',
            'gender' => 'required',
            'subject' => 'required',
            'phoneNumber' => 'required',
            'salary' => 'required',
            'tuitoringDays' => 'required',
            'tuitoringType' => 'required',
        ]);
         
        if ($validator->fails()) {

             Session::flash('error', $validator->messages()->first());
             return redirect()->back()->withInput();
        }
        else{
            
            $req = new RequestTuitor();
            $req->name = $request->name;
            $req->location = $request->location;
            $req->gender = $request->gender;
            $req->subject = $request->subject;
            $req->phoneNumber = $request->phoneNumber;
            $req->salary = $request->salary;
            $req->tuitoringDays = $request->tuitoringDays;
            $req->tutoringType = $request->tuitoringType;
            $req->save();
            return redirect()->route('reqTui')->with('status', 'You have succefully requested for a tuitor! We will help you to meet with a good tuitor.');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RequestTuitor  $requestTuitor
     * @return \Illuminate\Http\Response
     */
    public function show(RequestTuitor $requestTuitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RequestTuitor  $requestTuitor
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestTuitor $requestTuitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RequestTuitor  $requestTuitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestTuitor $requestTuitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RequestTuitor  $requestTuitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestTuitor $requestTuitor)
    {
        //
    }
   
}
