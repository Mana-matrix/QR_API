<?php

namespace App\Http\Controllers;
use App\chat;
use Illuminate\Http\Request;

class chatController extends Controller
{
 public function getChat($id_from,$id_to){


     $items = chat::where(function ($query) use ($id_from,$id_to) {
         $query->where('from_id','=',$id_from)->where('to_id','=',$id_to);
     })->orwhere(function ($query) use ($id_from,$id_to) {
         $query->where('to_id','=',$id_from)->where('from_id','=',$id_to);
     })->get();
    $ids=['id_from'=>$id_from,'id_to'=>$id_to];
//return $items;
     return view('chat.main',compact('items'),compact('ids'));
 }
 public function sendMessage(Request $request){
    // dump($request->input('message'));
    if($request)
$id_from=$request->input('from');
$id_to=$request->input('to');
    $message = chat ::create([
         'from_id' => $request->input('from'),
         'to_id' => $request->input('to'),
         'text' =>$request->input('message'),
     ]);
    return redirect("/chat/$id_from/$id_to");
    echo "dasjkdigsfks";
 }
}
