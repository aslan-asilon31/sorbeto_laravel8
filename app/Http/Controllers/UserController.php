<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use HelperHistoryLog;
Use DB;
use DataTables;
use Illuminate\Support\Str;
use App\Http\Requests\UserRequest;
use App\Helpers\HistoryLog;
use Hash;

class UserController extends Controller
{
    public function index(){

        $users = User::latest()->paginate(10);
        return view('main_page.users.index', compact('users'));

    }
    
    public function getdata(Request $request)
    {

        try {
            

                header('Content-Type: application/json');
                if ($request->ajax()) {
                    // $data = User::latest()->get();
                    $query = "SELECT * FROM users";
                    $data = DB::connection('mysql')->select($query);
                    return Datatables::of($data)
                        ->addIndexColumn()
                        ->filter(function ($instance) use ($request) {
                            if (!empty($request->get('name'))) {
                                $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                    return Str::contains($row['name'], $request->get('name')) ? true : false;
                                });
                            }
                            if (!empty($request->get('email'))) {
                                $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                    return Str::contains($row['email'], $request->get('email')) ? true : false;
                                });
                            }
                            if (!empty($request->get('search'))) {
                                $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                    if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))){
                                        return true;
                                    }else if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))) {
                                        return true;
                                    }
                                    return false;
                                });
                            }
                        })
                        ->addColumn('action', function ($data) {
                        
                            $showBtn =  '<button ' .
                                            ' class="btn btn-info" ' .
                                            ' onclick="showUser(' . $data->id . ')"> log ' .
                                        '</button> ';
            
                            $editBtn =  '<button ' .
                                            ' class="btn btn-success" id="editUser" ' .
                                            ' onclick="editUser(' . $data->id . ')">Edit' .
                                        '</button> ';
            
                            $deleteBtn =  '<button ' .
                                            ' class="btn btn-danger" ' .
                                            ' onclick="deleteUser(' . $data->id . ')">Delete' .
                                        '</button> ';
            
                    
            
                            return $showBtn . $editBtn . $deleteBtn;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
                }
        } catch (\Exception $e) {
            // Tangani kesalahan dan kembalikan respons kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
        }
        
    }

    // public function getdata(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $query = "SELECT * FROM users";
    //         $data = DB::connection('mysql')->select($query);
    //         return Datatables::of($data)
    //             ->addIndexColumn()
    //             ->filter(function ($query) use ($request) {
    //                 if ($request->has('search') && !empty($request->input('search')['value'])) {
    //                     $searchTerm = $request->input('search')['value'];
    //                     $query->where('name', 'like', "%$searchTerm%");
    //                 }
    //             })
    //             ->make(true);
    //     }
    // }
    
    public function create()
    {
        return view('main_page.users.create');
    }

    
    public function show()
    {
        //
    }


    public function store(UserRequest $request)
    {
        $data = $request->validated();

        // dd('cekk data ud masuk blm');

        $user = User::create([
            'name'     => $request->name,
            'email'   => $request->email,
            'password' => Hash::make($data['password']),
        ]);

        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('user.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('user.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

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
    public function historylog(string $id)
    {
        
        $query = "SELECT * FROM history_logs where key_id = $id";
        $data = DB::connection('mysql')->select($query);

        return view('main_page.users.historylog', compact('data'));


      
    }


    public function update(UserRequest $request, string $id)
    {
        $data_new = $request->validated();
        
        $query = "SELECT * FROM users where user_id = $id";
        $data_old = DB::connection('mysql')->select($query);
        $table = 'users';
        $module = 'USER-TABLE';
        $dataHistoryLog = HistoryLog::afterUpdate($data_new, $data_old, $module, $id, $table);
      
        
            // Temukan objek User berdasarkan ID
            $user = User::find($id);


            if ($user) {
                // Update properti objek User
                $user->update([
                    'name' => $data_new['name'],
                    'email' => $data_new['email']
                ]);
        
                // $user sekarang sudah diperbarui
            } else {
                // Handle jika objek User tidak ditemukan
                dd('User not found.');
            }
        

        return view('main_page.users.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
