<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
 
    public function index()
    {
        $data = User::all();
        $no = 1;
        // dd($data);

        return view('admin.user.index', compact('data', 'no'));
    }

 
    public function create()
    {
        return view('register');
    }

  
    public function store(Request $request)
    {
        $data = $request->all();

        $email = $request->input('email'); 
        $user = User::where('email',$email)->first(); //cek apakah email yg diinput sdh ad di DB
        if($user){
            return redirect()->route('register.user')->with('failed','Email sudah terdaftar');
        }
        
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => $data['status']
        ]);
        return redirect()->route('login');
    }


    public function edit(string $id)
    {
        $data = User::findOrFail($id);

        return view('admin.user.edit', compact('data'));
    }


    public function update(Request $request)
    {
        $data = $request->all();
        $item = User::find($request->id);
      
        $item->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => $data['status']
        ]);

        return redirect()->route('index.user');
    }


    public function destroy(string $id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('index.user');
    }
}


?>