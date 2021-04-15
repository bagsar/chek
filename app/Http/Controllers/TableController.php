<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Noj;

class TableController extends Controller
{

    public function nojPage(){
 return view('page');

}

public function nojData(){


$nojs = Noj::get();
$mydata = array();
foreach ($nojs as $noj) {

  array_push($mydata , 
                        array($noj->noj1,
                              $noj->noj2,
                              $noj->noj3,
                              $noj->noj4,
                              $noj->noj5,
                              $noj->noj6,
                              $noj->noj7,
                              $noj->noj8,
                              $noj->noj9,
                              $noj->noj10,
                              $noj->noj11,
                              $noj->noj12,
                              $noj->id));
}
return  json_encode(['data' => $mydata ]);

}
    

public function nojNum(){

$nojmax =Noj::max('noj1');

return $nojmax;
}


public function nojAdd(Request $req)
{
    $validated = $req->validate([
        'noj1' => 'required|unique:App\Models\Noj,noj1|max:255',
        // 'a2' => 'required',
    ]);

  $noj = new Noj();

$noj->noj1 = $req->input('noj1');
$noj->noj2 = $req->input('noj2');
$noj->noj3 = $req->input('noj3');
$noj->noj4 = $req->input('noj4');
$noj->noj5 = $req->input('noj5');
$noj->noj6 = $req->input('noj6');
$noj->noj7 = $req->input('noj7');
$noj->noj8 = $req->input('noj8');
$noj->noj9 = $req->input('noj9');
$noj->noj10 = $req->input('noj10');
$noj->noj11 = $req->input('noj11');
$noj->noj12 = $req->input('noj12');
$noj->save();

$info = '<div style="width: 370px;background-color: #ffffff99;">Нож с номером '.$req->input('noj1').' добавлена в базу данных </div>' ;
    return response()->json([
         'message' => "Добавлен",
         'info'=>$info
    ]);


}


public function nojInfo(Request $req){

 $id = $req->all()['id'];
 $noj =Noj::find($id);

return array(
    $noj->noj1,
    $noj->noj2,
    $noj->noj3,
    $noj->noj4,
    $noj->noj5,
    $noj->noj6,
    $noj->noj7,
    $noj->noj8,
    $noj->noj9,
    $noj->noj10,
    $noj->noj11,
    $noj->noj12
     );
}
  






public function nojUpdate(Request $req){

  $id = Noj::where('noj1', $req->input('upnoj1'))->get()[0]['id'];

  $noj =Noj::find($id);

$noj->noj2 = $req->input('upnoj2');
$noj->noj3 = $req->input('upnoj3');
$noj->noj4 = $req->input('upnoj4');
$noj->noj5 = $req->input('upnoj5');
$noj->noj6 = $req->input('upnoj6');
$noj->noj7 = $req->input('upnoj7');
$noj->noj8 = $req->input('upnoj8');
$noj->noj9 = $req->input('upnoj9');
$noj->noj10 = $req->input('upnoj10');
$noj->noj11 = $req->input('upnoj11');
$noj->noj12 = $req->input('upnoj12');
$noj->save();

$info = '<div style="width: 315px;background-color: #ffffff99;">Изменение сохранений:  Номер ножа '.$req->input('upnoj1').'.</div>' ;
    return response()->json([
         'message' => "Добавлен",
         'info'=>$info
    ]);

}


}
