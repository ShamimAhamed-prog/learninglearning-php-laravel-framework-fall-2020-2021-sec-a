<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "employee";
    protected $primaryKey =  "id";
    public $timetamps = false;
}
