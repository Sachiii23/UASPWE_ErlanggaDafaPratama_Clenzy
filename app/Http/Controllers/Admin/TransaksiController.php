<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::with('pelanggan', 'produk')->get();
        // dd($data);
        return view('admin.transaksi.index', compact('data'));
    }


    public function getHarga(Request $request)
    {
        $id = $request->produk_id;
        $produk = Produk::find($id);
        // dd($produk);

        return response()->json(['harga' => $produk->harga]);
    }

    public function updateStatus(Transaksi $transaksi)
    {
        $transaksi->status = $transaksi->status == 'belum_lunas' ? 'lunas' : 'belum_lunas';
        $transaksi->save();

        return redirect()->back()->with('success', 'Status pembayaran transaksi berhasil diperbarui.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();

        return view('admin.transaksi.create', compact('produk', 'pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Transaksi::create($request->all());

        return redirect()->route('index.transaksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
