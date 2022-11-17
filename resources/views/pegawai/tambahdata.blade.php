@extends('layouts.backend-dashboard.app')
@section('title')
    Tambah Pegawai
@endsection
@section('breadcrumb')
    Tambah Data
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <!-- left column -->
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="insertpegawai" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nama Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">NIP</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nip"placeholder="Nomor Induk Pegawai">
                    </div>
                        <div class="form-group">
                            <label
                                for="exampleInputEmail1"
                                class="form-label"
                                >Email address</label
                            >
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="Email Anda"
                            />
                            <div id="emailHelp" class="form-text">
                                We'll never share your email with anyone
                                else.
                            </div>
                        </div>
                        <div class="form-group">
                            <label
                                for="exampleInputPassword1"
                                class="form-label"
                                >Alamat</label
                            >
                            <input
                                type="text"
                                name="alamat"
                                class="form-control"
                                id="exampleInputPassword1"
                                placeholder="Alamat Anda"
                            />
                        </div>
                        <div class="form-group">
                        <label
                            for="exampleInputPassword1"
                            class="form-label"
                            >Jabatan</label
                        >
                        <input
                            type="text"
                            name="jabatan"
                            class="form-control"
                            id="exampleInputPassword1"
                            placeholder="Jabatan Anda"
                        />
                    </div>
                <!-- /.card-body -->

                <div class="card-footer ">
                    <div class="float-sm-right">
                    <button type="submit" class="btn btn-primary mr-9">Submit</button></div>
                </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
      </div>
    </div>
</section>
@endsection
