<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index() 
  {
    $title = 'This is title index';
    //return view('pages.index', compact('title'));
    return view('pages.index')->with('title', $title);
  }
  public function about() 
  {
    $title = 'This is about';
    return view('pages.about')->with('title', $title);
  }
  
  public function services() 
  {
    $data = array(
    'title' => 'ones',
    'services' => ['one', 'two']
    );
    //return view('pages.services');
    return view('pages.services')->with($data);
  }
}
