<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Models\movielist;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function add(){
        return view('form');
    }
 public function store( Request $request){
    $movies=new movielist();
    $movies->movie=$request->movies;
    $movies->lead=$request->lead;
    $movies->date=$request->date;
    $movies->time=$request->time;
    $movies->save();
    return back();
 }
 public function list()
    {
        $movies = movielist::all();
        return view('/welcome',compact('movies'));
    }
 public function delete(movielist $id ){
    $id->delete();
    return back();
 }
 public function update(Request $request,movielist $id)
 {
    $id->movie=$request->movies;
    $id->lead=$request->lead;
    $id->date=$request->date;
    $id->time=$request->time;
    $id->save();
    return back();
 }
}