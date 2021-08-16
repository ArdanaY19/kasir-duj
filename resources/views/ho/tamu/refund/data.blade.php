@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Data Refund Tamu</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Data Refund Tamu</li>
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
                            <th>Nama Tamu</th>
                            <th>Tanggal Refund</th>
                            <th>Nama Produk</th>
                            <th>Harga produk</th>
                            <th>Alasan Refund</th>
                            <th>Total Tabungan</th>

                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    @foreach($refunds as $r)
                    <tbody>
                        <!-- loop data -->
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$r->tamu->nama}}</td>
                            <td>Senin - {{$r->tanggal}}</td>
                            <td>{{$r->stok->produk}}</td>
                            <td>{{$r->stok->harga_retail}}</td>

                            <td>{{$r->alasan}}</td>
                            <td>{{$r->total}}</td>
                            <td>{{$r->status_verif}}</td>
                            <td><a href="#"><button class="icon-file btn btn-primary" type="button" title=""></button></a><a href="{{ url('ad_refund/'.$r->id) }}"><button class="icon-eye btn btn-success" type="button" title=""></button></a></td>

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
