@extends('layout.v_template')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $judul }}</h3>
                        <div class="cad-tools">
                            <a href="/Pengembalian/Tambah" class="btn btn-success btn-blok btn-xs float-right">Tambah</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Judul Buku</th>
                                    <th>Nama Peminjam</th>
                                    <th>No Hp</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;  ?>
                                @foreach ($pengembalian as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->judul_buku }}</td>
                                    <td>{{ $data->nama_peminjam }}</td>
                                    <td>{{ $data->no_hp }}</td>
                                    <td>{{ $data->tgl_pengembalian }}</td>
                                    <td class="text-center">
                                        <a href="/Pengembalian/Edit/{{ $data->id_pengembalian }}" class="btn btn-warning btn-blok">Edit</a>
                                        <a href="/Pengembalian/Delete/{{ $data->id_pengembalian }}"
                                            class="btn btn-danger btn-blok">Hapus</a>
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
</section>
@endsection