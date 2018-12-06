<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HelloController extends BaseController
{
    public function index()
    {
        $data = "Devarsh"; //we pass this data into view as a arguments to use this data into view page
        return view('hello',['user' => $data]);
    }
}
