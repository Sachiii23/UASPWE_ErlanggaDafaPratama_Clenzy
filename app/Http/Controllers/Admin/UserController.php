<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


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
        return view('admin.user.register');
    }

  
    public function store(Request $request)
    {
        $data = $request->all();
        
        User::create($data);
        return redirect()->route('index.user');
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
      
        $item->update($data);

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