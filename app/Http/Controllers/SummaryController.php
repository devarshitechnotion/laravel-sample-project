<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summary;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $summaryModel = new Summary;
    // }

    public function index()
    {
        // list all summary
        $summaryModel = new Summary;
        $data = $summaryModel::all();

        return view('summary/showSummary',['summaryData'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // display add summary form

        return view('summary/addSummary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get post data
        // $title = $request['title'];
        // $body = $request['summary'];
        //dd($request->all());     

        //store data into database
          //creating object of Summary model. must include use App\Summary in the beigning of this controller to use this. 
        $summaryModel = new Summary;
        $summaryModel->title = $request['title'];
        $summaryModel->summary = $request['summary'];
        //simply use save() function to add record into summaries table.
        if($summaryModel->save())
        {
            echo "your summary added successfully";
        }
        else
        {
            echo "try again";
        }

        //redirect to display all summary page.



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
