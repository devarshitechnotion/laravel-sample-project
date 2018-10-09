<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;     //include databse to perform Query Builders
use App\Task;   //include Task Model

class Tasks extends Controller
{
    public function __construct()
    {
        //parent::__construct();
        //declaring model
        $this->taskModel = new Task();
    }

    //
    public function index()   
    {
        //$tasks = DB::table('tasks')->get();      this is done using query builder
        $allTasks = $this->taskModel->getAllTasks();      //calling model function
        return view('tasks',['allTasks'=>$allTasks]);
    }

    public function taskDetail($id)
    {
        //echo "Your daily tasks display here!";
       // $taskDetail = DB::table('tasks')->where('id', $id)->get(); //get task details by task id
        $taskDetail = $this->taskModel->getTaskDetail($id);
        //return $tasks;exit;
        return view('tasksDetail', ['tasksDetail' => $taskDetail]);
    }
}
