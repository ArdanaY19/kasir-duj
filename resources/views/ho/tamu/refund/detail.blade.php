@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3 ">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Detail Data Refund Tamu</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Detail Data Refund Tamu</li>
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
                                        <h5> <span class="first_name_0">{{$r->tamu->nama}}</span><span class="last_name_0"></span></h5>
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
                                                                <p>{{$r->tamu->staff}}</p>
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
                                                                                    <th>Produk</th>
                                                                                    <th>Harga Produk</th>
                                                                                    <th>Keterangan</th>


                                                                                </tr>
                                                                            </thead>
                                                                            <?php $no = 1; ?>
                                                <tbody>
                                                                                <!-- loop data -->
                                                                                <tr>
                                                                                    <td>{{$no++}}</td>
                                                                                    <td>
                                                                                        {{$r->stok->produk}}
                                                                                    </td>
                                                                                    <td>{{$r->stok->harga_retail}}</td>
                                                                                    <td>{{$r->keterangan}}</td>

                                                                                    </td>
                                                                                </tr>
                                                                                <!-- loop data -->
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
                                                                            <th style="font-size: 14px;">Tanggal Refund</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>{{$r->tanggal}}</p>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Total Tabungan</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>{{$r->total}}</p>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="font-size: 14px;">Status Verifikasi</th>
                                                                            <th style="font-size: 14px;"> :</th>
                                                                            <!-- loop data -->
                                                                            <th style="font-size: 14px;">
                                                                                <p>{{$r->status_verif}}</p>
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

                                            <a href="#"><button class="icon-file btn btn-primary" type="button" title=""></button></a>
                                        </div>
                                        <div class="card-body">

                                            <a href="{{ url('ho_refund/'.$r->id.'/edit') }}"><button class="btn btn-success" type="button" title="">Ubah Data</button></a>
                                            <a href="#"><button class="btn btn-primary" type="button" title="">Cetak Struk</button></a>
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
