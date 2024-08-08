<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class add_studentController extends Controller
{
    function add(Request $request){
        $student = new Student();
        $student->name= $request->name;
        $student->email= $request->email;
        $student->phone= $request->phone;
        // $table->timestamps();
        $student->save();
        if($student){
            return redirect('list');
        }



        // return $request->input();
    }

    function list(){
        $student = Student::paginate(5);
        return view('listdata',['data'=>$student]);
    }
    function delete($id) {
        $student = Student::destroy($id);
        if($student){
            return redirect('list');
        }  
    }
    function edit($id){
        $student = Student::find($id);
        if($student){
            return view('/edit',['data'=>$student]);
        }
    
    }
    function update(Request $request , $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        if($student->save()){
            return redirect('list');
        }
        else{
            return 'cant update';
        }
    }

    function search(Request $request){

        $studentData = Student::where('name','like',"%$request->search%")->get();
        return view('listdata',['data'=>$studentData, 'search'=>$request->search]);





        // return $student;
    }



}
