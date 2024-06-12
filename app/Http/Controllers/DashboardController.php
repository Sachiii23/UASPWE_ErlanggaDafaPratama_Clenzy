<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
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
        $dataPr = Produk::count();  

        $userAktif = Auth::user()->name;
        $data = Transaksi::with('pelanggan')->get();

        return view('karyawan.dashboard.index', compact('data','userAktif','dataPr'));
    }
    public function cariTransaksi(Request $request){        
        $dataP = Pelanggan::count();
        $dataPr = Produk::count();
        $dataT = Transaksi::count();
        $no = 1;

        $mulaiCari = $request->input('mulaiCari');
        $sampaiCari = $request->input('sampaiCari');

        $dataGabung = Transaksi::whereBetween('tanggalBuat',[$mulaiCari,$sampaiCari])->get();
        return view('admin.dashboard.index', compact('dataP','dataPr','dataT','no','dataGabung'));
    }
}

?>