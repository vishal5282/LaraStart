<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ["name","email","password","mobile","date","gender","city","file_upload","photo_upload","userId"];

}
