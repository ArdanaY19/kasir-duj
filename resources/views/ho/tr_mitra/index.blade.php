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
        <!-- element cari tambah data -->
        <div class="row">
            <div class="col-10">

            </div>
            <div class="col-2">

                <a href="{{ url('ho_trmitra_c') }}"><button class="btn btn-success m-r-10" type="button" title="">Tambah Transaksi</button></a>
            </div>
        </div>
    </div>
</div>

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row size-column">
        <div style="margin-top: 10px;" class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div class="best-seller-table responsive-tbl">
                        <div class="item">


                            <table class="hover" id="example-style-4">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>ID Pembelian Mitra</th>
                                        <th>Nama Mitra</th>
                                        <th>Nama HO</th>
                                        <th>Status Pembayaran</th>
                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <!-- loop data -->
                                <?php $no = 1; ?>
                                @foreach($transaksis as $t)
                                <tbody>
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$t->tanggal}}</td>
                                        <td>{{$t->id_pembelian}}</td>
                                        <td><a href="{{ url('trmitra/all') }}"> {{$t->mitra->nama}}</a></td>
                                        <td>{{auth()->user()->name}}</td>
                                        <td>{{$t->status}}</td>
                                        <td><a href="{{ url('ho_trmitra/'.$t->id) }}"><button class="btn btn-success m-r-10" type="button" title="">Detail</button></a></td>

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
</div>

@endsection()
