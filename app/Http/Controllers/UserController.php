<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use HelperHistoryLog;
Use DB;
use DataTables;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(){

        $users = User::latest()->paginate(10);
        return view('main_page.users.index', compact('users'));

    }
    
    // public function getdata(Request $request)
    // {
    //     if ($request->ajax()) {
    //         // $data = User::latest()->get();
    //         $query = "SELECT * FROM users";
    //         $data = DB::connection('mysql')->select($query);
    //         // dd($data);
    //         return Datatables::of($data)
    //             ->addIndexColumn()
    //             ->filter(function ($instance) use ($request) {
    //                 if (!empty($request->get('name'))) {
    //                     $instance->collection = $instance->collection->filter(function ($row) use ($request) {
    //                         return Str::contains($row['name'], $request->get('name')) ? true : false;
    //                     });
    //                 }
    //                 if (!empty($request->get('email'))) {
    //                     $instance->collection = $instance->collection->filter(function ($row) use ($request) {
    //                         return Str::contains($row['email'], $request->get('email')) ? true : false;
    //                     });
    //                 }
    //                 if (!empty($request->get('search'))) {
    //                     $instance->collection = $instance->collection->filter(function ($row) use ($request) {
    //                         if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))){
    //                             return true;
    //                         }else if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))) {
    //                             return true;
    //                         }
    //                         return false;
    //                     });
    //                 }
    //             })
    //             ->addColumn('action', function ($data) {
                 
    //                 $showBtn =  '<button ' .
    //                                 ' class="btn btn-info" ' .
    //                                 ' onclick="showUser(' . $data->id . ')"> log ' .
    //                             '</button> ';
     
    //                 $editBtn =  '<button ' .
    //                                 ' class="btn btn-success" id="editUser" ' .
    //                                 ' onclick="editUser(' . $data->id . ')">Edit' .
    //                             '</button> ';
     
    //                 $deleteBtn =  '<button ' .
    //                                 ' class="btn btn-danger" ' .
    //                                 ' onclick="deleteUser(' . $data->id . ')">Delete' .
    //                             '</button> ';
     
              
     
    //                 return $showBtn . $editBtn . $deleteBtn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }
    // }

    public function getdata(Request $request)
    {
        if ($request->ajax()) {
            $query = "SELECT * FROM users";
            $data = DB::connection('mysql')->select($query);
            return Datatables::of($data)
                ->addIndexColumn()
                ->filter(function ($instance) use ($request) {
                    // Filter logic
                })
                ->make(true);
        }
    }
    
    public function create()
    {
        //
    }

    
    public function show()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
 

    /**
     * Show the form for editing the specified resource.
     */
    // $user = DB::select('select * from users where id = ?', [$id]);
    public function edit(User $user)
    {
        return view('main_page.users.edit', compact('user'));
    }

    // public function edit(User $user)
    public function editdata()
    {
        // Your edit logic here
        // return view('users.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('tess update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
