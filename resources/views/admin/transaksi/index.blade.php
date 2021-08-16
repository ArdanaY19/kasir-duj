@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Data Transaksi Mitra</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Data Transaksi Mitra</li>
                </ol>
            </div>
        </div>
        <!-- element cari mitra -->
        <div style="margin-top: 20px;" class="row">
            <div class="col-9">

            </div>
            <div class="col-3">
                {{-- empty --}}
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="hover" id="example-style-4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mitra</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Nama HO</th>
                                    <th>ID Pembelian Mitra</th>
                                    <th>Status Pembayaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                                @foreach($transaksis as $t)
                                <tbody>
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td><a href="{{ url('trmitra/all') }}"> {{$t->mitra->nama}}</a></td>
                                        <td>{{$t->tanggal}}</td>
                                        <td>{{auth()->user()->name}}</td>
                                        <td>{{$t->id_pembelian}}</td>
                                        <td>{{$t->status}}</td>
                                        <td><a href="{{ url('ad_trmitra/'.$t->id) }}"><button class="btn btn-success m-r-10" type="button" title="">Detail</button></a></td>

                                    </tr>

                                </tbody>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()
