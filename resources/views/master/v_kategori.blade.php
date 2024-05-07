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
                            <a href="/Kategori/Tambah" class="btn btn-success btn-blok btn-xs float-right">Tambah</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
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
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;  ?>
                                @foreach ($kategori as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->kategori }}</td>
                                    <td class="text-center">
                                    <a href="/Kategori/Edit/{{ $data->id_kategori }}"
                                            class="btn btn-warning btn-blok">Edit</a>
                                    <a href="/Kategori/Delete/{{ $data->id_kategori }}"
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