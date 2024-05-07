@extends('layout.v_template')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="cad-tools">
                            <a href="/Buku/Tambah" class="btn btn-success btn-blok btn-xs float-right">Tambah</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    @if (session('pesan'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i>Sukses!</h5>
                        {{ session('pesan') }}
                    </div>
                    @endif

                    @if (session('update'))
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i>Sukses!</h5>
                        {{ session('update') }}
                    </div>
                    @endif

                    @if (session('delete'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i>Sukses!</h5>
                        {{ session('delete') }}
                    </div>
                    @endif

                    <h2 class="text-center mt-2"><b>SDN 01 Minas Barat</b></h2>
                    <h5 class="text-center">Jl. Yos Sudarso KM 35, Minas Barat, Kec. Minas, Kab. Siak</h5>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Kode Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Tebal Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;  ?>
                                @foreach ($buku as $data)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td class="text-center">{{ $data->kd_buku }}</td>
                                    <td>{{ $data->judul_buku }}</td>
                                    <td>{{ $data->pengarang }}</td>
                                    <td>{{ $data->penerbit }}</td>
                                    <td class="text-center">{{ $data->thn_terbit }}</td>
                                    <td class="text-center">{{ $data->tebal_buku }}</td>
                                    <td class="text-center">
                                        <a href="/Buku/Edit/{{ $data->id_buku }}"
                                            class="btn btn-warning btn-blok">Edit</a>
                                        <a href="/Buku/Delete/{{ $data->id_buku }}"
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