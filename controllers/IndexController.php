<?php

namespace NueTemplate\Default\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) 
    {
        return view('theme::index');
    }
}