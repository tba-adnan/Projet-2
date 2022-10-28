<?php

namespace App\Http\Controllers;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index(){
    $promotion = Promotion::all();   
        return view('index',compact('promotion'));
        
}

    public function create(){
        return view('add');
}

public function save(Request $request){
    $promotion = new Promotion();
    $promotion->name = $request->Name ;
    $promotion->save();
    return redirect('index');  
}

public function edit($id){
    $promotion = Promotion::where('id',$id)->get();
    return view('edit',compact('promotion'));
}

public function update(Request $request,$id){
    $promotion = Promotion::where('id',$id)->Update(["name"=>$request->name]);
    return redirect('index')->with("done");
}

public function delete($id){
    Promotion::where('id',$id)->Delete();
     return redirect('/');
}


public function search(Request $request)
{
if($request->ajax()){
    $input = $request->key;
$output="";
$searchPromotion=Promotion::where('name','like','%'.$input."%")->get();
if($searchPromotion)
{
foreach ($searchPromotion as $promotion) {
$output.='<tr>
<td>'.$promotion->id.'</td>
<td>'.$promotion->name.'</td>';
}
return Response($output);
   }
   }
}
}
