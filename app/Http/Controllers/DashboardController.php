<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Carbon\Carbon;

use function PHPSTORM_META\map;

class DashboardController extends Controller
{
    public function ambil(){
        $dataP = Pelanggan::count();
        $dataPr = Produk::count();
        $dataT = Transaksi::count();
        $no = 1;

        // $namaBulan = $date->format('F');
        $dataKeuntungan = DB::table('transaksis')
                        // ->select(DB::raw('DATE_FORMAT(tanggalBuat, "%M") as month, SUM(jumlah) as pendapatan')) ( Ambil Berdasarkan urutan nama Bulannya )
                        ->select(DB::raw('DATE_FORMAT(tanggalBuat, "%M") as month, SUM(jumlah) as pendapatan'))
                        ->where('status','lunas')
                        ->groupBy(DB::raw('DATE_FORMAT(tanggalBuat, "%M")'))
                        ->get()->toArray();

        $dataRugi = DB::table('transaksis')
                    ->select(DB::raw('DATE_FORMAT(tanggalBuat, "%M") as month, SUM(jumlah) as pendapatan'))
                    ->where('status','belum_lunas')
                    // ->skip(1)
                    // ->take(1)                    
                    ->groupBy(DB::raw('DATE_FORMAT(tanggalBuat, "%M")'))
                    ->get()->toArray();

        $namaBulan = [];
        $nilaiKeuntungan = [];
        $nilaiRugi = [];
        for($i = 1; $i<=12; $i++){
            $date = Carbon::create(null, $i, 1)->format('F');            
            $namaBulan[$i] = $date;

            foreach($dataRugi as $rugi){
                if($rugi->month == $namaBulan[$i]){
                    $nilaiRugi[$i] = $rugi->pendapatan;
                    break;
                }else{
                    $nilaiRugi[$i] = 0;
                }
            }
            foreach($dataKeuntungan as $keuntungan){
                if($keuntungan->month == $namaBulan[$i]){
                    $nilaiKeuntungan[$i] = $keuntungan->pendapatan;
                    break;
                }else{
                    $nilaiKeuntungan[$i] = 0;
                }
            }
        }
            
        // dd($nilaiKeuntungan);
        $dataGabung = Transaksi::with('pelanggan','produk')->get();     
        return view('admin.dashboard.index', compact('dataP','dataPr','dataT','no','dataGabung','nilaiRugi','nilaiKeuntungan'));
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
        
        $dataKeuntungan = DB::table('transaksis')                        
                        ->select(DB::raw('DATE_FORMAT(tanggalBuat, "%M") as month, SUM(jumlah) as pendapatan'))
                        ->where('status','lunas')
                        ->groupBy(DB::raw('DATE_FORMAT(tanggalBuat, "%M")'))
                        ->get()->toArray();

        $dataRugi = DB::table('transaksis')
                    ->select(DB::raw('DATE_FORMAT(tanggalBuat, "%M") as month, SUM(jumlah) as pendapatan'))
                    ->where('status','belum_lunas')                               
                    ->groupBy(DB::raw('DATE_FORMAT(tanggalBuat, "%M")'))
                    ->get()->toArray();

        $namaBulan = [];
        $nilaiKeuntungan = [];
        $nilaiRugi = [];
        for($i = 1; $i<=12; $i++){
            $date = Carbon::create(null, $i, 1)->format('F');            
            $namaBulan[$i] = $date;

            foreach($dataRugi as $rugi){
                if($rugi->month == $namaBulan[$i]){
                    $nilaiRugi[$i] = $rugi->pendapatan;
                    break;
                }else{
                    $nilaiRugi[$i] = 0;
                }
            }
            foreach($dataKeuntungan as $keuntungan){
                if($keuntungan->month == $namaBulan[$i]){
                    $nilaiKeuntungan[$i] = $keuntungan->pendapatan;
                    break;
                }else{
                    $nilaiKeuntungan[$i] = 0;
                }
            }
        }

        $mulaiCari = $request->input('mulaiCari');
        $sampaiCari = $request->input('sampaiCari');

        $dataGabung = Transaksi::whereBetween('tanggalBuat',[$mulaiCari,$sampaiCari])->get();
        return view('admin.dashboard.index', compact('dataP','dataPr','dataT','no','dataGabung','nilaiRugi','nilaiKeuntungan'));
    }
}

?>