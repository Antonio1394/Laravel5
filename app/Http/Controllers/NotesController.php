<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Note;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Redirect

class NotesController extends Controller
{
   public function index()
   {
        $notes =Note::all();
        return view('notes/list',compact('notes'));
   }

   public function create()
   {
        return view('notes/create');
   }

   public function store(Request $request)
   {
        data= $request()->all();
        Note::create($data);
        return redirect->to('notes');
   }

   public function show($note)
   {
        dd($note);
   }
}
