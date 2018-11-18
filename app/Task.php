<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	//in laravel there is no need to declare table name in model. It assumes pural form of model name as a table name. But we can declare it explicitly if we have other table name.
    function getAllTasks()
    {
    	$tasks = Task::all();		//this means SELECT * FROM tasks
    	return $tasks;
    }

    function getTaskDetail($id)
    {
    	$taskDetail = Task::where('id','=',$id)->get();
    	return $taskDetail;
    }

    function getCompletedTasks()
    {
        $tasks = Task::where('is_completed', '=',1)->get();//this means SELECT * FROM tasks where is_completed = 1
        return $tasks;
    }

    function getRemainingTasks()
    {
        $tasks = Task::where('is_completed', '=',0)->get();//this means SELECT * FROM tasks where is_completed = 0
        return $tasks;
    }
}
