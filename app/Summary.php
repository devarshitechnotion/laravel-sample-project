<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    //by default laravel use pural name of modelNAME as table name. 
    //so we created summaries table in our db so we do not need to mention table name here.It will get automatically.

	//if table name is differrent we can decalre like protected $table = 'TABLE_NAME';

	//if our table does not contain created_at , updated_at fields set bellow variable as false. by default it is true.
    public $timestamps = false;

    protected $fillable = ['title','summary'];
}
