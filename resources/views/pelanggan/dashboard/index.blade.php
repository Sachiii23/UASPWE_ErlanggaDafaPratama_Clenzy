@extends('pelanggan.layouts.index')

@section('content')
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Produk</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">4565</h2>
                                {{-- <p class="text-white mb-0">Jan - March 2019</p> --}}
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Transaksi</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">$ 8541</h2>
                                {{-- <p class="text-white mb-0">Jan - March 2019</p> --}}
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div>
                <!-- #/ container -->
            </div>


            <div class="row">
                <div class="col-12 m-b-30">
                    <h4 class="d-inline">Produk</h4>
                    <p class="text-muted">This is 3 column contents</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset('admin/images/big/img4.jpg') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text and below as a natural
                                        lead-in to the additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset('admin/images/big/img4.jpg') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text and below as a natural
                                        lead-in to the additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset('admin/images/big/img4.jpg') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text and below as a natural
                                        lead-in to the additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="img-fluid" src="{{ asset('admin/images/big/img4.jpg') }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text and below as a natural
                                        lead-in to the additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                </div>
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
