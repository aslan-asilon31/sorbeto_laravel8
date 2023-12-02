<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IceCream;
use DB;

class IceCreamController extends Controller
{
    public function index(){
        $query = "SELECT 
                a.*,
                b.name as statud_id_name
            FROM ice_creams a 
            LEFT JOIN status_masters b
            ON a.status_id = b.status_id
            
         ";
        $icecreams = DB::connection('mysql')->select($query);
        return view('main_page.ice_cream.index', compact('icecreams'));
    }
}
