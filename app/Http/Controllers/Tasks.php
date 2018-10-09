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
        $completedTasks = $this->taskModel->getCompletedTasks();
        $remainingTasks = $this->taskModel->getRemainingTasks();
        return view('tasks/tasks',['allTasks'=>$allTasks,'completedTasks'=>$completedTasks,'remainingTasks'=>$remainingTasks]);        
    }

    public function taskDetail($id)
    {
        //echo "Your daily tasks display here!";
       // $taskDetail = DB::table('tasks')->where('id', $id)->get(); //get task details by task id
        $taskDetail = $this->taskModel->getTaskDetail($id);
        //return $tasks;exit;
        return view('tasks/tasksDetail', ['tasksDetail' => $taskDetail]);
    }

    public function completedTask()
    {
        $taskDetail = $this->taskModel->getCompletedTasks();
        die($taskDetail);
        return view('tasks/tasks', ['completedTasks' => $taskDetail]);
    }

    public function remainingTask()
    {
        $taskDetail = $this->taskModel->getRemainingTasks();
        //die($taskDetail);
        return view('tasks/tasks', ['remainingTasks' => $taskDetail]);
    }
}
