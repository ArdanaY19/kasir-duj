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
                     @foreach ($returs as $value=>$retur)
                    <tbody>
                        <!-- loop data -->
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$retur->nama}}</td>
                            <td>Senin - {{$retur->tanggal}}</td>
                            <td>{{$retur->nama_ho}}</td>
                            <td>{{$retur->produk}}</td>
                            <td>{{$retur->keterangan}}</td>
                            <td>{{$retur->status}}</td>
                            <td><a href="#"><button class="icon-file btn btn-primary" type="button" title=""></button></a><a href="{{ url('ad_retur/'.$retur->id) }}"><button class="icon-eye btn btn-success" type="button" title=""></button></a></td>

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
