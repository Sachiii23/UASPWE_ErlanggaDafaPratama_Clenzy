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
        <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Advanced Smil Animation</h4>
                                <div id="smil-animations" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Simple line chart</h4>
                                <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line Scatter Diagram</h4>
                                <div id="scatter-diagram" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line chart with tooltips</h4>
                                <div id="line-chart-tooltips" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line chart with area</h4>
                                <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bi-polar Line chart with area only</h4>
                                <div id="bi-polar-line" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">SVG Path animation</h4>
                                <div id="svg-animation" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line Interpolation / Smoothing</h4>
                                <div id="line-smoothing" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Different configuration for different series</h4>
                                <div id="different-series" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">SVG Animations chart</h4>
                                <div id="svg-dot-animation" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bi-polar bar chart</h4>
                                <div id="bi-polar-bar" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Overlapping bars on mobile</h4>
                                <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Multi-line labels</h4>
                                <div id="multi-line-chart" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Stacked bar chart</h4>
                                <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Horizontal bar chart</h4>
                                <div id="horizontal-bar-chart" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Extreme responsive configuration</h4>
                                <div id="extreme-chart" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Distributed series</h4>
                                <div id="distributed-series" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Label placement</h4>
                                <div id="label-placement-chart" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animating a Donut with Svg.animate</h4>
                                <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Simple pie chart</h4>
                                <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie chart with custom labels</h4>
                                <div id="pie-chart" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gauge chart</h4>
                                <div id="gauge-chart" class="ct-chart ct-golden-section"></div>
                            </div>
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
@endsection