<?php

namespace App\Http\Controllers;

use App\Tuition;
use Illuminate\Http\Request;

class TuitionController extends Controller
{
    
    public function index()
    {
        $tuitionList = Tuition::all();
        return view('backend.pages.tuition_list')->withAlltuitions($tuitionList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('backend.pages.add_tuition');
        
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
            return redirect()->route('tuition.index');
        
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

    // public function getTuitions(Request $request){

    //     ## Read value
    //     $draw = $request->get('draw');
    //     $start = $request->get("start");
    //     $rowperpage = $request->get("length"); // Rows display per page
   
    //     $columnIndex_arr = $request->get('order');
    //     $columnName_arr = $request->get('columns');
    //     $order_arr = $request->get('order');
    //     $search_arr = $request->get('search');
   
    //     $columnIndex = $columnIndex_arr[0]['column']; // Column index
    //     $columnName = $columnName_arr[$columnIndex]['data']; // Column name
    //     $columnSortOrder = $order_arr[0]['dir']; // asc or desc
    //     $searchValue = $search_arr['value']; // Search value
   
    //     // Total records
    //     $totalRecords = Tuition::select('count(*) as allcount')->count();
    //     $totalRecordswithFilter = Tuition::select('count(*) as allcount')->where('id', 'like', '%' .$searchValue . '%')->count();
   
    //     // Fetch records
    //     $records = Tuition::orderBy($columnName,$columnSortOrder)
    //       ->where('tuitions.id', 'like', '%' .$searchValue . '%')
    //       ->select('tuitions.*')
    //       ->skip($start)
    //       ->take($rowperpage)
    //       ->get();
   
    //     $data_arr = array();
        
    //     foreach($records as $record){
    //        $id = $record->id;
    //        $gender = $record->gender;
    //        $class = $record->class;

    //        $mediums = [
    //        '0' => "Bangla Medium",
    //        '1' => "English Medium",
    //        '2' => "English Version",
    //        '3' => "Arbi",
    //     ];
    //      foreach ($mediums as $key => $value) {
    //          if ($key==$record->medium) {
    //              $medium = $value;       
    //          }
    //      }
    //        $subject = $record->subject;
    //        $preferred_tuition = $record->preferred_tuition;
    //        $tuitoring_time = $record->tuitoring_time;
    //        $tuitoring_days = $record->tuitoring_days;
    //        $no_of_students = $record->no_of_students;
    //        $salary = $record->salary;
    //        $location = $record->location;

   
    //        $data_arr[] = array(
    //         "id" => $id,
    //         "gender" => $gender,
    //         "class" => $class,
    //         "medium" => $medium,
    //         "subject" => $subject,
    //         "preferred_tuition" => $preferred_tuition,
    //         "tuitoring_time" => $tuitoring_time,
    //         "tuitoring_days" => $tuitoring_days,
    //         "no_of_students" => $no_of_students,
    //         "salary" => $salary,
    //         "location" => $location
    //        );
    //     }
   
    //     $response = array(
    //        "draw" => intval($draw),
    //        "iTotalRecords" => $totalRecords,
    //        "iTotalDisplayRecords" => $totalRecordswithFilter,
    //        "aaData" => $data_arr
    //     );
   
    //     echo json_encode($response);
    //     exit;
    //   }
}
