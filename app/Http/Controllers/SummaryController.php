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
   

    public function index()
    {
        // list all summary
        $data = Summary::latest('id')->get();     //to get all records from summaries table orger by id DESC . select *
        //$summaryModel = new Summary;
        //$data = $summaryModel::all();

        return view('summary/showAllSummary',['summaryData'=>$data]);
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
           // echo "your summary added successfully";
           return redirect('/summary'); 
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
        //$summaryModel = new Summary;            
        $summary = Summary:: find($id);
        return view('summary.showSummary',compact('summary'));        
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
        //echo "hi";die;
        $summaryData = Summary:: find($id);
        return view('summary.editSummary', compact('summaryData'));
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
        $title = $request['title'];
        $summary = $request['summary'];

        $update = Summary:: find($id)->update(['title' => $title,'summary' => $summary]);
        if($update)
        {
            return redirect('/summary');
        }
        else
        {
            return redirect('summary/edit/'.$id);
        }
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
