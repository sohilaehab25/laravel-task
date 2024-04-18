<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;


class StudentController extends Controller
{
    
    // private $students = [
    //     ['id' => 1,'email' => 'soso0a@example.com', 'password' => '1234'],
    //     ['id' => 2,'email' => 'soso1@example.com', 'password' => '1234'],
    //     ['id' => 3,'email' => 'soso2@example.com', 'password' => '1234'],
    // ];
    function index(){
        // $students = [
        //     ['id' => 1,'email' => 'soso0a@example.com', 'password' => '1234'],
        //     ['id' => 2,'email' => 'soso1@example.com', 'password' => '1234'],
        //     ['id' => 3,'email' => 'soso2@example.com', 'password' => '1234'],
        // ];
        $student = Student::all();
        return view('student.home', ['student' => $student]);
    }

    function create(){
            return view('student.create');
    }
    function store(Request $request) {
        //insert data to database 
        //1-validations
        //put data in database
        $student = new Student;
        $student -> name = $request -> name;
        $student -> email = $request -> email;
        $student -> password = $request -> password;
        $student -> user_id = $request -> user_id;

        $student ->save();
 
        return redirect('/students');
    }
        // //show 
        function show($id) {
            $student=Student::find($id);
            return view('student.show' , ['student' =>  $student]);
        }


        //edit 
        
        function edit($id){
            $student=Student::find($id);
            return view('student.edit' , ['student' =>  $student]);
        }

        function update($id ,Request $request){
            $student=Student::find($id);
            $student -> name = $request -> name;
            $student -> email = $request -> email;
            $student -> password = $request -> password;
            $student -> user_id = $request -> user_id;
            $student ->save();
            return redirect ('/students');
        }

        //delete
        function destroy($id){
            $student=Student::find($id);
            $student::destroy($id);
            return redirect ('/students');
        }



    
    

}
