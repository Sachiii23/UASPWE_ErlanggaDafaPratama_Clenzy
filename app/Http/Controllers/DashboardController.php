<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function ambil(){
        $dataP = Pelanggan::count();
        $dataPr = Produk::count();
        $dataT = Transaksi::count();
        $no = 1;

        $dataGabung = Transaksi::with('pelanggan','produk')->get();     
        return view('admin.dashboard.index', compact('dataP','dataPr','dataT','dataGabung','no'));
    }
    public function ambil2(){
        $userAktif = Auth::user()->name;
        $data = Transaksi::with('pelanggan')->get();

        return view('karyawan.dashboard.index', compact('data','userAktif'));
    }
}

?>