@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Detail Data Tabungan Tamu</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Detail Data Tabungan Tamu</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="email-wrap">
        <div class="row">
            <div class="col-xl-3">
                <div>
                    <div class="card-body">
                        <div class="email-app-sidebar">
                            <div class="media">
                                <div class="media-size-email"><img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" src="../assets/images/user/2.png" alt="">
                                </div>
                                <!-- loop data -->
                                <div class="media-body">
                                    <h6 class="f-w-600">{{$tabungan->nama}}</h6>
                                    <!-- loop data end-->
                                    <p>Tamu</p>
                                </div>
                            </div>
                            <hr>


                            <div class="media">
                                <div class="media-body">
                                    <h6 class="f-w-600">Detail Profile</h6>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="best-seller-table responsive-tbl">
                                    <div class="item">
                                        <div class="table-responsive product-list">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th style="font-size: 12px;">Nama Staff</th>
                                                        <th style="font-size: 12px;"> :</th>
                                                        <!-- loop data -->
                                                        <th style="font-size: 12px;">
                                                            <p>{{$tabungan->namaS}}</p>
                                                        </th>
                                                        <!-- loop data end-->
                                                    </tr>
                                                    <tr>
                                                        <th style="font-size: 12px;">Nama Center</th>
                                                        <th style="font-size: 12px;"> :</th>
                                                        <!-- loop data -->
                                                        <th style="font-size: 12px;">
                                                            <p>{{$tabungan->namacenter}}</p>
                                                        </th>
                                                        <!-- loop data end-->

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>





            <div class="col-xl-9 pt-4">
                <div class="card">
                    <div class="card-body">

                        <div class="best-seller-table responsive-tbl">
                            <div class="item">
                                <div class="table-responsive product-list">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Nama Produk</th>
                                                <th>Harga Produk</th>
                                                <th>Keterangan Pembayaran</th>
                                                <th>Nominal Pembayaran</th>
                                                <th>Total Tabungan</th>
                                                <th>Status </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <!-- loop data -->
                                                <td>1</td>
                                                <td>
                                                    <p>Minggu</p>| {{$tabungan->tanggal}}
                                                </td>
                                                <td>{{$tabungan->produk}}</td>
                                                <td>{{$tabungan->harga}}</td>
                                                <td>{{$tabungan->keterangan}}</td>
                                                <td>{{$tabungan->nominal}}</td>
                                                <td>{{$tabungan->total}}</td>
                                                <td>{{$tabungan->status}}</td>
                                                <!-- loop data end-->
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()
