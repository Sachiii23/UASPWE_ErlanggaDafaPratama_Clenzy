<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Fungsi untuk mendownload PDF
    public function downloadPDF()
    {
        // Ambil data transaksi yang ingin di-export ke PDF
        $dataGabung = Transaksi::with('pelanggan', 'produk')->get();

        $jumlahSebelum = 0;
        $jumlahSekarang = 0;

        // Hitung total pemasukan
        foreach ($dataGabung as $p) {
            if ($p->status == 'lunas') {
                $jumlahSekarang = $p->jumlah + $jumlahSebelum;
                $jumlahSebelum = $jumlahSekarang;
            }
        }

        // Load view dan pass data untuk export PDF
        $pdf = Pdf::loadView('admin.laporan.transaksi_pdf', compact('dataGabung', 'jumlahSekarang'));

        // Export PDF dan langsung mengunduh
        return $pdf->download('laporan_transaksi.pdf');
    }

    // Fungsi untuk menampilkan PDF di halaman baru
    public function viewPDF()
    {
        // Ambil data transaksi yang ingin di-export ke PDF
        $dataGabung = Transaksi::with('pelanggan', 'produk')->get();

        $jumlahSebelum = 0;
        $jumlahSekarang = 0;

        // Hitung total pemasukan
        foreach ($dataGabung as $p) {
            if ($p->status == 'lunas') {
                $jumlahSekarang = $p->jumlah + $jumlahSebelum;
                $jumlahSebelum = $jumlahSekarang;
            }
        }

        // Load view dan pass data untuk menampilkan PDF
        $pdf = Pdf::loadView('admin.laporan.transaksi_pdf', compact('dataGabung', 'jumlahSekarang'));

        // Menampilkan PDF di halaman baru
        return $pdf->stream('laporan_transaksi.pdf');
    }
}
