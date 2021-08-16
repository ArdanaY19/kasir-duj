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
                                        <h6> <span class="first_name_0">{{$t->mitra->nama}} </span><span class="last_name_0"></span></h6>
                                    </div>

                                </div>
                            </div>


                            <div class="card-body">


                            </div>


                            <div class="row">
                                <div class="col-xl-12">
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
                                                                    <th>Nama HO</th>
                                                                    <th>Keterangan Pembayaran</th>
                                                                    <th>Nominal Pembayaran</th>
                                                                    <th>Status Pembayaran</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <!-- loop data -->

                                                            <tr>
                                                                <td>1</td>
                                                                <td style="font-size: 12px;">Senin - {{$t->tanggal}}</td>
                                                                <td style="font-size: 12px;">{{auth()->user()->name}}</td>
                                                                <td style="font-size: 12px;">{{$t->keterangan}}</td>
                                                                <td style="font-size: 12px;">{{$t->nominal}}</td>
                                                                <td style="font-size: 12px;">{{$t->status}}</td>
                                                                <td><a href="{{ url('ad_cetak/'.$t->id) }}"><button class="btn btn-success m-r-10" type="button" title="">Detail</button></a></td>
                                                            </tr>

                                                            <tbody>


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
    </div>
</div>

@endsection()
