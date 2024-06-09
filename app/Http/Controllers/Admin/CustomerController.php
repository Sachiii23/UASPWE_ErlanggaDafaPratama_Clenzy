<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Pelanggan::all();
        $no = 1;

        // dd($data);

        return view('admin.customer.index', compact('data', 'no'));        
        
    }


    public function create()
    {
        
        return view('admin.customer.create');            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $nameI= $request->input('name');

        // dd($data);
        Pelanggan::create($data);
        
        return redirect()->route('index.customer');                 
        
    }

    public function edit(string $id)
    {
        $data = Pelanggan::findOrFail($id);
        
        return view('admin.customer.edit', compact('data'));       
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
