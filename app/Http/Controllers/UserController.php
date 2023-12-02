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

        $query = "SELECT 
                        a.*,
                        b.name as status_id_name,
                        c.name as roles_id_name
                  FROM users a
                  LEFT JOIN status_masters b
                  ON b.status_id = a.is_active
                  LEFT JOIN roles_masters c
                  ON c.roles_id = a.role_id
                ";
        $users = DB::connection('mysql')->select($query);

        // $users = User::latest()->paginate(10);
        // dd($users);
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
    public function destroy($id)
    {
        $query = "SELECT 
                    a.* 
                  FROM users 
                  WHERE user_id = $id";
        $user = DB::connection('mysql')->select($query);
    
        // Check if the user exists
        if (!$user) {
            // Redirect with an error message
            return redirect()->route('user.index')->with(['error' => 'User not found!']);
        }
    
        // Assuming $user is an array, you need to extract the first element
        $user = reset($user);
    
        // Delete the user using the user_id
        DB::table('users')->where('user_id', $user->user_id)->delete();
    
        // Redirect with a success message
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    
    
}
