<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $title = 'project index';
        return view('project.index')->with('title', $title );
    }
}
