<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index')
        ->with('name','sebi')
        ->with('surname','ratu')
        ->with('job','<b>developer</b>')
        ->with('hobbies', ['tenis','fishing'])
        ->with('country', 'gb');
    }
}
