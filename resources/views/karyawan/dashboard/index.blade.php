@extends('karyawan.layouts.index')

@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="row">
            @php $jumlahTransaksi = 0;
            @endphp
            @foreach($data as $v)                
                @if($v->pelanggan->nama == $userAktif)
                    @php $jumlahTransaksi++
                    @endphp
                @endif
            @endforeach
                <div class="col-lg-6 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Transaksi</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $jumlahTransaksi }}</h2>
                                {{-- <p class="text-white mb-0">Jan - March 2019</p> --}}
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div>

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
                <!-- #/ container -->
            </div>


            {{-- <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a
                            href="https://themeforest.net/user/quixlab">Quixlab</a>
                        2018</p>
                </div>
            </div> --}}
        </div>
    @endsection
