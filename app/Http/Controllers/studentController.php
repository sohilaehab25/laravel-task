<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students = [
        ['id' => 1,'email' => 'soso0a@example.com', 'password' => '1234'],
        ['id' => 2,'email' => 'soso1@example.com', 'password' => '1234'],
        ['id' => 3,'email' => 'soso2@example.com', 'password' => '1234'],
    ];
    function index(){
        $students = [
            ['id' => 1,'email' => 'soso0a@example.com', 'password' => '1234'],
            ['id' => 2,'email' => 'soso1@example.com', 'password' => '1234'],
            ['id' => 3,'email' => 'soso2@example.com', 'password' => '1234'],
        ];
        return view('student.home', ['students' => $students]);
    }

    function create(){
            return view('student.create');
    }
    function store(Request $request) {
 
        return redirect('/students', ['students' => $this->students]);
    }
        // //show 
        function show($id) {
            $student = 
                ['id' => $id,'email' => 'soso0a@example.com', 'password' => '1234'];
           
        
            return view('student.show' , ['student' =>  $student]);
        }


        //edit 
        
        function edit($id){
            $student = 
                ['id' => $id,'email' => 'soso0a@example.com', 'password' => '1234']
            ;
        
            return view('student.edit' , ['student' =>  $student]);
        }

        function update($id ,Request $request){
            return ('updated');
        }
        function destroy($id){
            return ("destroid");
        }
    
    

}
