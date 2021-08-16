@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3 ">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Tambah Data Ganti Produk</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Tambah Data Ganti Produk</li>
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
                            <div class="row">
                                <div class="col-xl-4">

                                    <div class="card-body">

                                        <div class="best-seller-table responsive-tbl">
                                            <div class="item">
                                                <div class="table-responsive product-list">

                                                    <table class="table table-bordernone">
                                                        <tbody>
                                                            <tr>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">Nama Tamu</label>
                                                                    <input class="form-control" id="exampleFormControlInput1" value="" type="text">
                                                                </div>
                                                            </tr>
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
                                <div class="col-xl-8">

                                    <div class="card-body">
                                        <div class="pull-right pt-4 ">
                                            <table>
                                                <tbody>
                                                    <tr>

                                                        <th style="font-size: 14px;">Tanggal Ganti produk </th>
                                                        <th style="font-size: 14px;">:</th>
                                                        <!-- loop data -->
                                                        <th style="font-size: 14px;">
                                                            <p>Senin - 21-12-2020</p>
                                                        </th>
                                                    </tr>

                                                </tbody>
                                            </table>
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
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">Nama Produk</label>
                                                                    <input class="form-control" id="exampleFormControlInput1" value="" type="text">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">harga Produk</label>
                                                                    <input class="form-control" id="exampleFormControlInput1" value="" type="text">
                                                                </div>
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
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">Nama Produk</label>
                                                                    <input class="form-control" id="exampleFormControlInput1" value="" type="text">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="exampleFormControlInput1">harga Produk</label>
                                                                    <input class="form-control" id="exampleFormControlInput1" value="" type="text">
                                                                </div>

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
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="exampleFormControlInput1">Mutasi Ke - </label>
                                                                        <input class="form-control" id="exampleFormControlInput1" value="" type="number">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        Status Verifikasi
                                                                        <div class="col">
                                                                            <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                                                                <div class="form-check form-check-inline radio radio-primary">
                                                                                    <input class="form-check-input" id="radioinline1" type="radio" name="radio1" value="option1">
                                                                                    <label class="form-check-label mb-0" for="radioinline1">Diverifikasi</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline radio radio-primary">
                                                                                    <input class="form-check-input" id="radioinline2" type="radio" name="radio1" value="option1">
                                                                                    <label class="form-check-label mb-0" for="radioinline2">Tidak Diverifikasi</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="exampleFormControlInput1">Total Tabungan</label>
                                                                        <input class="form-control" id="exampleFormControlInput1" value="" type="text">
                                                                    </div>
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

                                            <a href="#"><button class="btn btn-primary" type="button" title="">Tambah Pernyataan</button></a>
                                        </div>
                                        <div class="card-body">

                                            <a href="{{ url('/#') }}"><button class="btn btn-success" type="button" title="">Simpan Data & Cetak Struk</button></a>
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