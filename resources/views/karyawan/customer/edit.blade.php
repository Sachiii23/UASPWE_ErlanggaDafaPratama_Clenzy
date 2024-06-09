@extends('karyawan.layouts.index')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Produk</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">create</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Data</h4>
                            <div class="basic-form">
                                <form action="{{ route('update.customer', $data->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nama</label>
                                            <input type="text" name="nama" value="{{ $data->nama }}"
                                                class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{ $data->email }}"
                                                class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>No Handphone</label>
                                            <input type="text" name="no_hp" value="{{ $data->no_hp }}"
                                                class="form-control" placeholder="No Handphone">
                                        </div>
                                    </div>
                                 
                                    <button type="submit" class="btn btn-dark">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection