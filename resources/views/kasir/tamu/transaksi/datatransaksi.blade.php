@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">

        </div>
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Data Transaksi Tamu</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Data Transaksi Tamu</li>
                </ol>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">

            </div>
            <div class="col-6 align-self-end">
                <div class="pull-right">

                    <a href="{{ url('/tambahtransaksitamukasir') }}"><button class="btn btn-success" type="button" title="">Tambah Transaksi</button></a>
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
                            <th>Tanggal Transaksi</th>
                            <th>ID Pembelian tamu</th>
                            <th>Nama Tamu</th>
                            <th>Nama HO</th>
                            <th>Status Pembayaran</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- loop data -->
                        <tr>
                            <td>1</td>
                            <td>Senin - 07-09-2021
                            </td>
                            <td>#4141414</td>
                            <td><a href="{{ url('/alldatatrstamukasir') }}"> Sukian</a></td>
                            <td>Joni</td>
                            <td>Lunas</td>
                            <td><a href="{{ url('/detaildatatrstamukasir') }}"><button class="btn btn-success" type="button" title="">Detail</button></a></td>

                        </tr>
                        <!-- loop data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection()