<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckListController extends Controller
{
    //
    public function __construct(){

    	$this->middleware('auth');
    }
     public function getchecklist()
    {
        
        return view('pages.checklist');
    }
  


}