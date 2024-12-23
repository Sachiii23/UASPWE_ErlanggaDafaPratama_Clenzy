<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 110%;  /* Menambah lebar tabel */
            margin-left: -10%;  /* Menggeser tabel ke kiri */
            border-collapse: collapse;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #000;
            word-wrap: break-word;
            white-space: normal;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        tfoot {
            font-weight: bold;
        }

        /* Menambahkan margin dan padding */
        body {
            margin: 20px;
        }

        /* Memastikan Waktu Pelunasan cukup lebar */
        th:nth-child(10), td:nth-child(10) {
            width: 20%; /* Menambah lebar untuk kolom 'Waktu Pelunasan' */
        }
    </style>
</head>
<body>

    <h1>Laporan Transaksi dan Pemasukan</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Produk</th>
                <th>Berat</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Metode Pembayaran</th>
                <th>Konfirmasi Pembayaran</th>
                <th>Jadwal Pesan</th>
                <th>Waktu Pelunasan</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($dataGabung as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->pelanggan->nama }}</td>
                <td>{{ $p->produk->nama }}</td>
                <td>{{ $p->berat }} kg</td>
                <td>Rp. {{ number_format($p->produk->harga, 0, ',', '.') }}</td>
                <td>Rp. {{ number_format($p->jumlah, 0, ',', '.') }}</td>
                <td>{{ $p->metodePembayaran }}</td>
                <td>{{ $p->status }}</td>
                <td>{{ $p->tanggalBuat }}</td>
                @if($p->status == 'lunas')
                <td>{{ $p->updated_at }}</td>
                @endif
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">Total Pemasukan</td>
                <td>Rp. {{ number_format($jumlahSekarang, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>

</body>
</html>
