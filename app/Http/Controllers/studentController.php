<?php
namespace App\Http\Http\Requests;
namespace App\Http\Controllers;

use App\Http\Requests\studentItiRequest;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class StudentController extends Controller
{
    
    function index(){
        $student = Student::all();
        return view('student.home', ['student' => $student]);
    }

    function create(){
            return view('student.create');
    }
    function store(studentItiRequest $request): RedirectResponse {
        //insert data to database 
        //1-validations
        // $validated = $request->validate([
        //     'email' => 'required|unique:posts|max:255',
        //     'password' => 'required',
        //     'name' => 'required',
        //     'user_id' => 'required'    
    //    ]);        
        
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

        function update($id ,studentItiRequest $request): RedirectResponse{
            $student = Student::find($id);
            
            if (!$student) {
                // Handle case where student is not found
                return redirect('/students')->with('error', 'Student not found');
            }
            
            // Validate input data if needed
            
            // Check if the associated user exists
            $userId = $request->input('user_id');
            $user = User::find($userId);
            if (!$user) {
                // Handle case where associated user is not found
                return redirect('/students')->with('error', 'Associated user not found');
            }
        
            // Update student attributes
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->password = $request->input('password');
            
            // Update user association
            $student->user()->associate($user);
            
            $student->save();
            
            return redirect('/students')->with('success', 'Student updated successfully');
        }

        //delete
        function destroy($id){
            $student=Student::find($id);
            $student::destroy($id);
            return redirect ('/students');
        }



    
    

}
