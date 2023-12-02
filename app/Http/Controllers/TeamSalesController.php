<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamSalesController extends Controller
{
    public function index(){
        return view('main_page.teamsales.index');
    }
}
