<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsGradingController extends Controller
{
    public function firstForm()
{
    return view('begin');

}
public function secondForm()
{
    return view('enter-grades');
}

public function resultsPage()
{
    return view('compute-grades');
}

}
