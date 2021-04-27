<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\StudentDataTable;

class StudentController extends Controller
{
   public function index(StudentDataTable $dataTable){
     return $dataTable->render('students');
   }
}
