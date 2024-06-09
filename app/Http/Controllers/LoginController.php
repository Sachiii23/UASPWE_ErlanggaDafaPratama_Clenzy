<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use function Laravel\Prompts\alert;

class LoginController extends Controller
{
    public function index(){
 
        return view('login');
    }

    public function proses(Request $request ){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'status' => 'required'
        ]);

        $data = $request->only('email','password','status');
        if(Auth::attempt($data)){    
            if(auth()->user()->status=='admin'){
                return redirect()->route('index.dashboard');    
            }else{
                return redirect()->route('karyawan.index.dashboard');
            }        
            
        }else{  
            return redirect()->route('login')->with('failed','Email,Password atau Status anda salah!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('succes','Anda Berhasil Logout');
    }
}

