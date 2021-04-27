<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\TeacherDataTable;
use App\Models\Teacher;

class TeacherController extends Controller
{
   public function index(TeacherDataTable $dataTable){
     return $dataTable->render('teachers');
   }
}
