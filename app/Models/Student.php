<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    protected $fillable  = ["ID","АТЫ","ПОШТА","ТЕЛЕФОН","АУДАН","МЕКТЕП","СЫНЫП"];
}
