<?php

namespace App\Http\Controllers\api;

namespace App\Http\Http\Requests;
namespace App\Http\Controllers;
use App\Http\Requests\studentItiRequest;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\RedirectResponse;


class studentController extends Controller
{
    function index(){
        $student = Student::all();
        return $student;
    }

    
}
