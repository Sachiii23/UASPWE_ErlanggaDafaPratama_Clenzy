@extends('admin.layouts.index')

@section('content')
    <div class="content-body">
        <!-- #/ container -->

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Jenis Laundry</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $dataPr }}</h2>
                                {{-- <p class="text-white mb-0">Jan - March 2019</p> --}}
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Transaksi</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $dataT }}</h2>
                                {{-- <p class="text-white mb-0">Jan - March 2019</p> --}}
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">Customers</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $dataP }}</h2>
                                {{-- <p class="text-white mb-0">Jan - March 2019</p> --}}
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
    
<div class="container-fluid">
    
        <div class="container mt-5">
            <form action="{{ route('cari.transaksi.dashboard') }}" method="post">
                @csrf
                <div class="row">        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Cari Data Transaksi </label>
                                <label for="exampleInputDate">Mulai dari</label>
                                <input type="date" class="form-control" id="exampleInputDate" name="mulaiCari">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputDate">Sampai</label>
                                <input type="date" class="form-control" id="exampleInputDate" name="sampaiCari">                                                                                        
                            </div>                                                        
                        </div>                                                                          
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Search</button>                                                                                                    
                </div>                                 
            </form>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Laporan Transaksi dan Pemasukan</h4>
                    <div class="table-responsive text-nowrap" style="overflow-x: scroll">
                        <table class="table table-striped table-bordered ">
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
                                    <th>Untung</th>
                                </tr>
                            </thead>
                            <tbody> 
                            @php $jumlahSebelum=0;                                
                                 $jumlahSekarang=0;
                            @endphp    
                            @foreach ($dataGabung as $p)                           
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $p->pelanggan->nama }}</td>
                                    <td>{{ $p->produk->nama }}</td>
                                    <td>{{ $p->berat }} kg</td>
                                    <td>Rp. {{ $p->produk->harga }}</td>                                    
                                    <td>Rp. {{ $p->jumlah }}</td>
                                    <td>{{ $p->metodePembayaran }}</td>
                                    <td>{{ $p->status }}</td>
                                    <td>{{ $p->tanggalBuat }}</td>
                                    @if($p['status'] == 'lunas')
                                    <td>{{ $p->updated_at }}</td>
                                   <td></td>
                                    @endif
                                </tr>   
                                @if($p['status'] == 'lunas')
                                    @php                                                                                  
                                        $jumlahSekarang = $p['jumlah'] + $jumlahSebelum;
                                        $jumlahSebelum = $jumlahSekarang;                          
                                    @endphp                         
                                @endif   
                                @endforeach                          
                            </tbody>    
                            <tfoot>
                                <th colspan="9">Total Pemasukan</th>
                                <th colspan="1" >Rp. {{$jumlahSekarang}}</th>
                            </tfoot>                        
                        </table>
                    </div>
                </div>
            </div>
        </div>        
                
            </div>
            <div class="row">                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">                                                                
                                 <canvas id="myChart" width="300" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>

<!-- #/ container -->

        <!--**********************************
                Content body end
            ***********************************-->


        <!--**********************************
                Footer start
            ***********************************-->
        <!--**********************************
                Footer end
                ***********************************-->
        {{-- <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a
                            href="https://themeforest.net/user/quixlab">Quixlab</a>
                        2018</p>
                </div>
            </div> --}}
    </div>
@stop
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        var dataR = <?php echo json_encode($nilaiRugi); ?>;        
        var valuesR = [];
        var labels = [];

        var dataK = <?php echo json_encode($nilaiKeuntungan); ?>;
        var valuesK = [];

           var monthNames = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        // Mengonversi dataR menjadi format yang bisa digunakan oleh Chart.js
        for (var key in dataR) {
            var monthIndex = parseInt(key) - 1; // Karena array dimulai dari indeks 0 dan bulan dimulai dari 1
            labels.push(monthNames[monthIndex]);
            valuesR.push(parseFloat(dataR[key]));
        }
        for(var key in dataR){
            valuesK.push(parseFloat(dataK[key]));
        }

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {      
            type: 'bar', // Anda dapat mengubah tipe chart sesuai kebutuhan (contoh: bar, line, dll.)           
            data: {
                labels: labels,
                datasets: [{
                    label: 'Kerugian',
                    data: valuesR,
                    borderColor: 'rgba(54, 162, 235, 1)', 
                    backgroundColor: 'rgb(255, 43, 11, 0.4)',
                    borderWidth: 1
                },
                {
                    label: 'Keuntungan',
                    data: valuesK,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.4)',
                    borderWidth: 1
                }]            
            },            
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Grafik Data Laba-Rugi Perbulan',
                        font: {
                            size: 16
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
</script>
@stop