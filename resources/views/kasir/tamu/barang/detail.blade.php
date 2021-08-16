@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Detail Data Stok Barang</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Detail Data Stok Barang</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="email-wrap bookmark-wrap">
        <div class="row">
            <div class="col-xl-9 col-md-12 box-col-12">
                <div class="email-right-aside bookmark-tabcontent contacts-tabs">
                    <div class="ps-0">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">

                                <div class="media"><img class="img-300 img-fluid m-r-20 update_img_0" src="../assets/images/user/2.png" alt="">
                                    <div style="margin-top: 25px;" class="media-body">
                                    </div>
                                </div>

                                <div class="col-xl-4 pt-3">
                                    <div class="best-seller-table responsive-tbl">
                                        <div class="item">
                                            <div class="table-responsive product-list">

                                                <table class="table table-bordernone">
                                                    <tbody>
                                                        <tr>
                                                            <!-- loop data -->
                                                            <h6> Sepatu</h6>
                                                            <p class="email_add_0">Rp. 10.000</p>
                                                        </tr>
                                                        <tr>

                                                            <th style="font-size: 12px;">Stok</th>
                                                            <th style="font-size: 12px;"> :</th>
                                                            <!-- loop data -->
                                                            <th style="font-size: 12px;">
                                                                <p>{{$stok->stok}}</p>
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()
