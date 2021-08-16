@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3 ">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Ubah Data Refund</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Ubah Data Refund</li>
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
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Nama Mitra</label>
                                            <input class="form-control" id="exampleFormControlInput1" value="Suyatmo" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Nama HO</label>
                                            <input class="form-control" id="exampleFormControlInput1" value="otomatis" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Tanggal Refund</label>
                                            <input class="form-control" id="exampleFormControlInput1" value="" type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <!-- UPDATE UI-->
                                    <div class="row mb-3">
                                        <div class="col-6">

                                        </div>
                                        <div class="col-6 align-self-end">
                                            <div class="pull-right">
                                                <a href="{{ url('/#') }}"><button class="btn btn-success" type="button" title="">Tambah Produk</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card">
                                                    <div class="card-body ">
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="exampleFormControlInput1"><strong>Produk 1</strong></label>
                                                                <input class="form-control" id="exampleFormControlInput1" value="kulkas" type="text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="exampleFormControlTextarea1"><strong>Keterangan Refund Produk 2</strong></label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="lorem" type="text"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <h6>Pernyataan Refund Produk 1</h6>
                                                                <a href="#"><button class="btn btn-primary" type="button" title="">Tambah</button></a>
                                                            </div>
                                                            <div class="mb-3">
                                                                <h6>Foto Refund Produk 1</h6>
                                                                <a href="#"><button class="btn btn-primary" type="button" title="">Tambah</button></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="exampleFormControlInput1"><strong>Produk 2</strong></label>
                                                                <input class="form-control" id="exampleFormControlInput1" value="laptop" type="text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="exampleFormControlTextarea2"><strong>Keterangan Refund Produk 2</strong></label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" value="lorem" type="text">lorem</textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <h6>Pernyataan Refund Produk 2</h6>
                                                                <a href="#"><button class="btn btn-primary" type="button" title="">Tambah</button></a>
                                                            </div>
                                                            <div class="mb-3">
                                                                <h6>Foto Refund Produk 2</h6>
                                                                <a href="#"><button class="btn btn-primary" type="button" title="">Tambah</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-xl-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="email-left-aside">

                                                <div class="card-body">

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
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                    <div class="email-left-aside">

                                        <div class="card-body">

                                            <a href="#"><button class="btn btn-primary" type="button" title="">Simpan & Cetak Struk</button></a>
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