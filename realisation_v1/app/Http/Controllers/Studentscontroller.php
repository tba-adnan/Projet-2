<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Studentscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $students = DB::table('students')->get();
         return view('students', ['name' => $students]); 
    }


    public function display(){
        // $students = DB::table('')->get();
        //  return view('students', ['name' => $students]); 
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view ('student/add',compact('id')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
    $id =  $request->id;
    $request->validate(['email'=>['email']]);
// 
    $Student=new Student();
    $Student->name = $request->name;
    $Student->nickname = $request->nickname;
    $Student->email = $request->email;
    $Student->id_promo = $id;
    $Student->save();
    return redirect("/students");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Student = Student::where('id',$id)->get();
          return view('edit-student',compact('Student'));
    }

    public function update(Request $request,$id){
        $Student = Student::where('id',$id)->update(["name"=>$request->name]);
        $Student = Student::where('id',$id)->update(["nickname"=>$request->nickname]);
        $Student = Student::where('id',$id)->update(["email"=>$request->email]);
        return redirect('students');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        Student::where('id',$id)->Delete();
        return redirect('students');
    }

    public function search(Request $request)
    {
    if($request->ajax()){
        $input = $request->key;
    $output="";
    $searchStudents=Student::where('name','like','%'.$input."%")->get();
    if($searchPromotion)
    {
    foreach ($searchStudents as $Student) {
    $output.='<tr>
    <td>'.$Student->id.'</td>
    <td>'.$Student->name.'</td>';
    }
    return Response($output);
       }
       }
    }
}
























