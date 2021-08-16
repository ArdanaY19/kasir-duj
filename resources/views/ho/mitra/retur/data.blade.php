@extends('frontend.layout-frontend.master')

@section('content')

    <div class="container-fluid">
        <div class="page-title pt-3">
            <div class="row">
                <div style="color: #7366FF;" class="col-6">
                    <h3>Data Retur Mitra</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Data Retur Mitra</li>
                    </ol>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">

                </div>
                <div class="col-6 align-self-end">
                    <div class="pull-right">
                        <a href="{{ url('ho_retur_c') }}"><button class="btn btn-success" type="button" title="">Tambah
                                Retur</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">

            <div class="card-body table-responsive">
                <table class="display" id="advance-12">
                    <thead>
                        <tr>
                            <!-- loop data -->
                            <th>No</th>
                            <th>Nama Mitra</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama HO</th>
                            <th>Nama produk</th>
                            <th>Keterangan Retur</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    @foreach ($returs as $value => $re)
                        <tbody>
                            <!-- loop data -->
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $re->mitra->nama }}</td>
                                <td>Senin - {{ $re->tanggal }}</td>
                                <td>{{ auth()->user()->name }}</td>
                                <td>{{ $re->produk }}</td>
                                <td>{{ $re->keterangan }}</td>
                                <td>{{ $re->status }}</td>
                                <td><a href="#"><button class="icon-file btn btn-primary" type="button"
                                            title=""></button></a><a href="{{ url('ho_retur/' . $re->id) }}"><button
                                            class="icon-eye btn btn-success" type="button" title=""></button></a></td>

                            </tr>
                            <!-- loop data -->
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>

@endsection()
