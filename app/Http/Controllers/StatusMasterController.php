<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\StatusMaster;

class StatusMasterController extends Controller
{
    public function index(){

        $query = "SELECT * FROM status_masters ";
        $statusmasters = DB::connection('mysql')->select($query);
        return view('master_data.status.index', compact('statusmasters'));
    }
}
