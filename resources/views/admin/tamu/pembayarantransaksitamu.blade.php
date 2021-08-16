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

                                <div class="media"><img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" src="../assets/images/user/2.png" alt="">
                                    <div style="margin-top: 10px;" class="media-body">
                                        <h6> <span class="first_name_0">Bucky </span><span class="last_name_0">Barnes</span></h6>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-12">

                                <div class="card-body">

                                </div>



                            </div>
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="email-left-aside">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="best-seller-table responsive-tbl">
                                                    <div class="item">


                                                        <table class="hover" id="example-style-4">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Tanggal Transaksi</th>
                                                                    <th>Nama Produk</th>
                                                                    <th>Keterangan Pembayaran</th>
                                                                    <th>Nama Staff</th>
                                                                    <th>Nominal</th>
                                                                </tr>
                                                            </thead>
                                                            <!-- loop data -->
                                                            <tr>
                                                                <td>1</td>
                                                                <td style="font-size: 12px;">Senin - 04/07/2021</td>
                                                                <td style="font-size: 12px;">laptop</td>
                                                                <td style="font-size: 12px;">DRCT</td>
                                                                <td style="font-size: 12px;">Agus</td>
                                                                <td style="font-size: 12px;">12.000</td>
                                                            </tr>
                                                            <!-- loop data end -->


                                                            <tbody>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-3">
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
                                                                            <th style="font-size: 14px;">Total Harga</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>12.000</p>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Keterangan</th>
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

                                            <a href="{{url('cetak_tab')}}"><button class="btn btn-success m-r-10" type="button" title="">Cetak Struk</button></a>
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
