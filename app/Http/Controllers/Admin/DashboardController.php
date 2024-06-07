<?php 
namespace App\Http\Controllers\admin;

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
}

?>