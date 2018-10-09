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
}
