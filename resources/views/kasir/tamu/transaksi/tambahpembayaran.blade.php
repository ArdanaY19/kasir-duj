@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Tambah Data Pembayaran Tamu/h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Tambah Data Pembayaran Tamu</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <form class="form theme-form">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nama Mitra</label>
                                <input class="form-control" id="exampleFormControlInput1" value="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                Keterangan Pembayaran
                                <div class="col">
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline1" type="radio" name="radio1" value="option1">
                                            <label class="form-check-label mb-0" for="radioinline1">TDP</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline2" type="radio" name="radio1" value="option1">
                                            <label class="form-check-label mb-0" for="radioinline2">DRCT</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput2">Nominal Pembayaran</label>
                                <input class="form-control" id="exampleFormControlInput2" value="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput2">Status Transaksi</label>
                                <input class="form-control" id="exampleFormControlInput2" value="" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 30px;" class="row">
                        <div class="col">
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit">Simpan & Cetak Struk</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection()