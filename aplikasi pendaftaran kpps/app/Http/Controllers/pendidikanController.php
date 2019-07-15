<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendidikanController extends Controller
{
    public function index(){
    	return view('pages.pendidikan.pendidikan');
    }
    public function create(){
    	return view('pages.pendidikan.create');
    }

     public function edit(){
    	return view('pages.pendidikan.edit');
    }
}
