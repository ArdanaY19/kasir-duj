@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3 ">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Detail Data Transaksi Mitra</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Detail Data Transaksi Mitra</li>
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

                                <div class="media">
                                    <div style="margin-top: 10px;" class="media-body">
                                        <h5> <span class="first_name_0">Bucky </span><span class="last_name_0">Barnes</span></h5>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-10">

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
                                                                <p>Noval</p>
                                                            </th>

                                                            <!-- loop data end -->
                                                            <th style="font-size: 14px;">Nama Center</th>
                                                            <th style="font-size: 14px;"> :</th>
                                                            <!-- loop data -->
                                                            <th style="font-size: 14px;">
                                                                <p>banyuwangi</p>
                                                            </th>

                                                            <th style="font-size: 14px;">ID Transaksi</th>
                                                            <th style="font-size: 14px;"> :</th>
                                                            <!-- loop data -->
                                                            <th style="font-size: 14px;">
                                                                <p>#31317310</p>
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
                                    <!-- UPDATE UI-->
                                    <form class="form theme-form">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">

                                                            <div class="best-seller-table responsive-tbl">
                                                                <div class="item">
                                                                    <div class="table-responsive product-list">

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
                                                                            <tbody>
                                                                                <!-- loop data -->
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>
                                                                                        laptop
                                                                                    </td>
                                                                                    <td>1</td>
                                                                                    <td>120.000</td>
                                                                                    <td>120.000
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- loop data -->
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer bg-primary p-2">
                                                            <div class="pull-right pr-4">
                                                                <a>Total Harga :</a>
                                                                <a style="font-weight: bold;"> 120.000 </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

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
                                                                            <th style="font-size: 14px;">Keterangan</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>DP</p>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Nominal Pembayaran</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>12.000.000</p>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Pembayaran</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>Cash</p>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Status</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>Lunas</p>
                                                                            </th>
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

                                            <a href="#"><button class="btn btn-success m-r-10" type="button" title="">Cetak Struk</button></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="page-title pt-3 ">
            <div class="row">
                <div style="color: #7366FF;" class="col-6">
                    <h3>Detail Pembayaran</h3>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-6">

                </div>
                <div class="col-xl-6 align-self-end">
                    <div class="pull-right">

                        <a href="{{ url('/tambahpembayaranmitraHO') }}"><button class="btn btn-success" type="button" title="">Tambah Pembayaran</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- UPDATE UI PAGE 2-->
        <form class="form theme-form">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <table class="display" id="advance-12">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>ID Tabungan</th>
                                            <th>Nama kasir</th>
                                            <th>Keterangan</th>
                                            <th>Nominal</th>
                                            <th>Status</th>
                                            <th>Pembayaran</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- loop data -->
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                Senin - 04-08-2021
                                            </td>
                                            <td>#52242424</td>
                                            <td>Agus</td>
                                            <td>DRCT</td>
                                            <td>HO1</td>
                                            <td>Belum Lunas</td>
                                            <td>12.000</td>

                                            <td> <a href="#"><button class="btn btn-success m-r-10" type="button" title="">Cetak Struk</button></a></td>
                                        </tr>
                                        <!-- loop data -->
                                    </tbody>
                                </table>

                            </div>
                            <div class="card-footer bg-primary p-2">
                                <div class="pull-right pr-4">
                                    <a>Total Tabungan :</a>
                                    <a style="font-weight: bold;"> 120.000 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection()