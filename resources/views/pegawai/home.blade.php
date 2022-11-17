@extends('layouts.backend-dashboard.app')
@section('title')
    Data Pegawai
@endsection
@section('breadcrumb')
    Data Pegawai
@endsection
@section('content')
    <div class="card-body">
        <a href="tambahpegawai"
                    ><button type="button" class="btn btn-success">
                        Tambah +
                    </button></a
                >
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIP</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no=1;
            @endphp
            @foreach ($datas as $row)
            <tr>
                <th scope="row">{{ $no ++}}</th>
                <td>{{ $row ->name}}</td>
                <td>{{ $row ->nip}}</td>
                <td>{{ $row ->email}}</td>
                <td>{{ $row ->alamat}}</td>
                <td>{{ $row ->jabatan}}</td>
                <td>{{ $row ->created_at->format('D N Y')}}</td>
                <td>
                    <a href="lihatdata/{{$row->id}}" type="button" class="btn btn-info">
                        Edit</a>
                    <a href="/delete/{{$row->id}}" type="button" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{ $row ->name}}">
                        Delete
                    </a>
                <!--a href delete pakai ini kalau offline
                /delete/{{$row->id}}-->
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </div>
    </div>
    <!-- /.card -->
@endsection