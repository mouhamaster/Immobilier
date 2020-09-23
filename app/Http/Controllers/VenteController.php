<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function index()
    {
    	return view('pages/listPost');
    }
     public function addPost()
    {
    	return View('pages/newPost');
    }

    public function show()
    {
    	return view('pages.details');
    }
}
