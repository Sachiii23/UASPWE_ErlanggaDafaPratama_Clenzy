@extends('admin.layouts.index')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Produk</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User</h4>                        

                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>                                            
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $d->name }}</td>
                                                <td>{{ $d->email }}</td>
                                                <td>{{ $d->password }}</td>
                                                <td>{{ $d->status }}</td>
                                                <td>
                                                    <span>
                                                        <a href="{{ route('edit.user', $d->id)}}" class="btn btn-warning"
                                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action="{{ route('destroy.user', $d->id) }}" method="POST"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-close color-danger"></i>
                                                            </button>
                                                        </form>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
