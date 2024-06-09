<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        $no = 1;
        // dd($data);
        if(auth()->user()->status=='admin'){
            return view('admin.customer.index', compact('data', 'no'));  
        }else{
            return view('karyawan.customer.index', compact('data', 'no'));
        }                
        
    }


    public function create()
    {
        if(auth()->user()->status=='admin'){
            return view('admin.customer.create');  
        }else{
            return view('karyawan.customer.create');
        }                
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        Pelanggan::create($data);
        return redirect()->route('index.customer');
    }

    public function edit(string $id)
    {
        $data = Pelanggan::findOrFail($id);
        
        if(auth()->user()->status=='admin'){
            return view('admin.customer.edit', compact('data'));  
        }else{
            return view('karyawan.customer.edit', compact('data'));
        }        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $item = Pelanggan::find($request->id);
        // dd($data);
        $item->update($data);

        return redirect()->route('index.customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pelanggan::findOrFail($id);
        $data->delete();
        return redirect()->route('index.customer');
    }
}
