@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3 ">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Data ganti Produk Tamu</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Data Ganti Produk Tamu</li>
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
                            <div class="col-xl-4">

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
                                                <div class="col-xl-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <table>
                                                                <div style="color: #7366FF;">
                                                                    <h6>Produk Awal</h6>
                                                                </div>
                                                                <tbody>
                                                                    <tr>
                                                                        <th style="font-size: 14px;">Nama Produk</th>
                                                                        <th style="font-size: 14px;"> :</th>
                                                                        <!-- loop data -->
                                                                        <th style="font-size: 14px;">
                                                                            <p>Laptop</p>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size: 14px;">Harga Produk</th>
                                                                        <th style="font-size: 14px;"> :</th>
                                                                        <!-- loop data -->
                                                                        <th style="font-size: 14px;">
                                                                            <p>Rp. 12.000</p>
                                                                        </th>
                                                                    </tr>


                                                                </tbody>

                                                            </table>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <table>
                                                                <div style="color: #7366FF;">
                                                                    <h6>Produk Akhir</h6>
                                                                </div>
                                                                <tbody>
                                                                    <tr>
                                                                        <th style="font-size: 14px;">Nama Produk</th>
                                                                        <th style="font-size: 14px;"> :</th>
                                                                        <!-- loop data -->
                                                                        <th style="font-size: 14px;">
                                                                            <p>HP</p>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size: 14px;">Harga Produk</th>
                                                                        <th style="font-size: 14px;"> :</th>
                                                                        <!-- loop data -->
                                                                        <th style="font-size: 14px;">
                                                                            <p>Rp. 12.000</p>
                                                                        </th>
                                                                    </tr>


                                                                </tbody>

                                                            </table>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-xl-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="email-left-aside">

                                                <div class="card-body">

                                                    <div class="best-seller-table responsive-tbl">
                                                        <div class="item">
                                                            <div class="table-responsive product-list">

                                                                <table class="table table-bordernone">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Mutasi ke</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>2</p>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Total Tabungan</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>Rp. 12.000</p>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Status Verifikasi</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>Diverifikasi</p>
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

                                            <a href="#"><button class="btn btn-primary" type="button" title="">Unduh Pernyataan</button></a>
                                        </div>
                                        <div class="card-body">

                                            <a href="{{ url('/#') }}"><button class="btn btn-success" type="button" title="">Cetak Struk</button></a>
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