@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3 ">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Detail Data Transaksi Tamu</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Detail Data Transaksi Tamu</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="email-wrap bookmark-wrap">
        <div class="row">
            <div class="col-xl-12 col-md-12 box-col-12">
                <div class="email-right-aside bookmark-tabcontent contacts-tabs">
                    <div class="ps-0">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">

                                <div class="media"><img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" src="../assets/images/user/2.png" alt="">
                                    <div style="margin-top: 10px;" class="media-body">
                                        <h6> <span class="first_name_0">{{$transaksi->nama}} </span><span class="last_name_0"></span></h6>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6">

                                <div class="card-body">

                                    <div class="best-seller-table responsive-tbl">
                                        <div class="item">
                                            <div class="table-responsive product-list">

                                                <table class="table table-bordernone">
                                                    <tbody>
                                                        <tr>
                                                            <th style="font-size: 14px;">Nama Staff</th>
                                                            <th style="font-size: 14px;"> :</th>
                                                            <!-- loop data -->
                                                            <th style="font-size: 14px;">
                                                                <p>{{$transaksi->namaS}}</p>
                                                            </th>
                                                            <!-- loop data end -->

                                                            <th style="font-size: 14px;">Nama Center</th>
                                                            <th style="font-size: 14px;"> :</th>
                                                            <!-- loop data -->
                                                            <th style="font-size: 14px;">
                                                                <p>{{$transaksi->namacenter}}</p>
                                                            </th>
                                                            <!-- loop data end-->
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="email-left-aside">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="best-seller-table responsive-tbl">
                                                    <div class="item">


                                                        <table class="table table-bordernone">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Produk</th>
                                                                    <th>Jumlah</th>
                                                                    <th>Harga Produk</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                            </thead>
                                                            <!-- loop data -->
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td style="font-size: 11px;">{{$transaksi->produk}}</td>
                                                                    <td style="font-size: 11px;">{{$transaksi->jumlah}}</td>
                                                                    <td style="font-size: 11px;">{{$transaksi->harga}}</td>
                                                                    <td style="font-size: 11px;">{{$transaksi->total}}</td>
                                                                </tr>
                                                                <!-- loop data end -->
                                                                <tr>

                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Total harga</td>
                                                                    <!-- loop data -->
                                                                    <td>{{$transaksi->total}}</td>
                                                                    <!-- loop data end -->
                                                                </tr>


                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-4">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="email-left-aside">

                                                <div class="card-body">

                                                    <div class="best-seller-table responsive-tbl">
                                                        <div class="item">
                                                            <div class="table-responsive product-list">

                                                                <table class="table table-bordernone">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">ID Transaksi</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>{{$transaksi->id_transaksi}}</p>
                                                                            </th>
                                                                            <!-- loop data end-->
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Keterangan</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>{{$transaksi->keterangan}}</p>
                                                                            </th>
                                                                            <!-- loop data end-->
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Nominal Pembayaran</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>{{$transaksi->nominal}}</p>
                                                                            </th>
                                                                            <!-- loop data end-->
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Pembayaran</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>{{$transaksi->pembayaran}}</p>
                                                                            </th>
                                                                            <!-- loop data end-->
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Status</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>{{$transaksi->status }}</p>
                                                                            </th>
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


                                    <div class="email-left-aside">

                                        <div class="card-body">

                                            <a href="{{url('kas/cetak_tab')}}"><button class="btn btn-success m-r-10" type="button" title="">Cetak Struk</button></a>

                                        </div>
                                    </div>

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
