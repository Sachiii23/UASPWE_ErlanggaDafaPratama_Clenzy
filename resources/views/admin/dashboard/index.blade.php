@extends('admin.layouts.index')

@section('content')
    <div class="content-body">
    
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Laporan Transaksi dan Pemasukan</h4>
                    <div class="table-responsive text-nowrap" style="overflow-x: scroll">
                        <table class="table table-striped table-bordered zero-configuration">
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
                            @php $jumlahSebelum=0;
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
                                    <td>{{ $p->created_at }}</td>
                                    @if($p['status'] == 'lunas')
                                    <td>{{ $p->updated_at }}</td>
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
                                <th colspan="1" >Rp. {{ $jumlahSekarang }}</th>
                            </tfoot>                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Produk</h3>
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
@endsection