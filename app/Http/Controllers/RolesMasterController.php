<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\RolesMaster;

class RolesMasterController extends Controller
{
    public function index(){

        $query = "SELECT 
            a.*,b.name as status_name
            FROM roles_masters a 
            LEFT JOIN status_masters b
            ON a.status_id = b.status_id
        ";
        
        $rolesmasters = DB::connection('mysql')->select($query);
        return view('master_data.roles.index', compact('rolesmasters'));

    }
}
