<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function ambil(){
        $dataP = Pelanggan::count();
        $dataPr = Produk::count();
        $dataT = Transaksi::count();
        return view('admin.dashboard.index', compact('dataP','dataPr','dataT'));
    }
    public function ambil2(){
        $dataT = Transaksi::count();
        $dataP = Pelanggan::count();        
        return view('karyawan.dashboard.index', compact('dataT','dataP'));
    }
}

?>