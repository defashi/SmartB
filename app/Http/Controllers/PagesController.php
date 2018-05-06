<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  // public function __construct(){
  //   $this->middleware('auth');
  // }  

	public function index(){
        return view('pages.index');
    }
   public function addadmin(){
        return view('pages.addadmin');
    }

       public function reguser(){
        return view('pages.reguser');
    }

       public function regbus(){
        return view('pages.regbus');
    }

       public function regbusowner(){
        return view('pages.regbusowner');
    }
}
