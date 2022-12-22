<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $beli= DB::table('penjualans')->select('harga_beli')->get();
        $monthCount=[60, 80, 70, 67, 80, 77, 100];

        // return view('main_page.employee.index',['harga_beli'=>$harga_beli, 'monthCount'=>$monthCount]);
        return view('main_page.employee.index',['beli'=>$beli, 'monthCount'=>$monthCount]);
        
    }
}
