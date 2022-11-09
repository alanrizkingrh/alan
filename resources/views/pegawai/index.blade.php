<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />


        <title>CRUD LARAVEL</title>
    </head>
    <body>
        <h1 class="text-center mb-4">Data Pegawai</h1>
        <div class="container">
            <a href="tambahpegawai"
                ><button type="button" class="btn btn-success">
                    Tambah +
                </button></a
            >
            <div class="row">
                @if($messege = Session::get('success'))
                <div class="alert alert-info" role="alert">
                    {{ $messege }}
                </div>
                @endif
                <table class="table">
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
                                <a href="tampilkandata/{{$row->id}}" type="button" class="btn btn-info">
                                    Edit</a>
                                <a href="#" type="button" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{ $row ->name}}">
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
        </div>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
       
            <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
<script>
            $('.delete').click(function(){
                var pegawaiid = $(this).attr('data-id');
                var pegawainama = $(this).attr('data-nama');
                swal({
        title: "Yakin?",
        text: "kamu akan menghapus data pegawai dengan nama "+pegawainama+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/delete/"+pegawaiid+" "
            swal("Pringatan! Data berhasil terhapus", {
            icon: "success",
            });
        } else {
            swal("Data tidak jadi dihapus!");
        }
        });
            });
    </script>
</html>
