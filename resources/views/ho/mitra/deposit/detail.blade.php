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
        <div class="row mb-3">
            <div class="col-6">

            </div>
            <div class="col-6 align-self-end">
                <div class="pull-right">
                    <a href="{{ url('/#') }}"><button class="btn btn-primary" type="button" title="">Cetak Struk</button></a>
                    <a href="{{ url('ho_deposit_c') }}"><button class="btn btn-success" type="button" title="">Tambah Deposit</button></a>
                </div>
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
                                        <h5> <span class="first_name_0">{{$depo->transmitra->mitra->nama}}</span><span class="last_name_0"></span></h5>
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
                                                            <th style="font-size: 14px;">Nama HO</th>
                                                            <th style="font-size: 14px;"> :</th>
                                                            <!-- loop data -->
                                                            <th style="font-size: 14px;">
                                                                <p>{{auth()->user()->name}}</p>
                                                            </th>
                                                            <!-- loop data end -->
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                            <div class="row">
                                <div class="col-xl-12">
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
                                                                                    <th>Tanggal Deposit</th>
                                                                                    <th>Nominal Pembayaran</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <?php $no = 1; ?>
                                                                            <tbody>
                                                                                <!-- loop data -->
                                                                                <tr>
                                                                                    <td>{{$no++}}</td>
                                                                                    <td>{{$depo->tanggal}}</td>
                                                                                    <td>{{$depo->nominal}}</td>
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
                                                                <a>Total Deposit:</a>
                                                                <a style="font-weight: bold;">{{$depo->transmitra->total}}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

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
