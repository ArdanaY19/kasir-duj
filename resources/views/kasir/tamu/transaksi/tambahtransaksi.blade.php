@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Tambah Transaksi Tamu</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Tambah Transaksi Tamu</li>
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
                    {{-- baris 1 --}}
                    <div class="row mb-3">
                        <div class="col-xl-6">
                            <div class="">
                                <label class="form-label" for="exampleFormControlInput1"><strong>Nama
                                        Tamu</strong></label>
                                <input class="form-control" id="exampleFormControlInput1" type="text">
                            </div>
                        </div>
                        <div class="col-xl-6 align-self-end">
                            <div class="pull-right">
                                <button class="btn btn-primary" type="submit">Simpan Data & Cetak Struk</button>
                            </div>
                        </div>
                    </div>
                    {{-- baris 2 --}}
                    <div class="row mb-2">
                        <div class="col-xl-6">
                            <label class="form-label" for="exampleFormControlInput1"><strong>Nama Kasir:</strong>
                                indra</label>
                        </div>
                        <div class="col-xl-6">
                            <label class="pull-right form-label" for="exampleFormControlInput1"><strong>Tanggal
                                    Transaksi : </strong> 07/08/2020</label>
                        </div>
                    </div>
                    {{-- baris 3 --}}
                    <div class="row mb-4">
                        <div class="col-1 align-self-center">
                            Cari Produk
                        </div>
                        <div class="col-xl-11">
                            <div class="job-filter">
                                <div class="faq-form">
                                    <input class="form-control" type="text" placeholder="Cari Data"><i class="search-icon" data-feather="search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                            <th>Harga Grosir</th>
                                                            <th>Jumlah Harga</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- loop data -->
                                                        <tr>
                                                            <td>1</td>
                                                            <td>

                                                                John kete
                                                            </td>
                                                            <td>Jember</td>
                                                            <td>08121831893</td>
                                                            <td>12818921</td>
                                                        </tr>
                                                        <!-- loop data -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-primary p-2">
                                    <div class="pull-right pr-5">
                                        Total Harga : 10.000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
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
                        <div class="col-xl-4">
                            <div class="mb-3">
                                Pilih Pembayaran
                                <div class="col">
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline3" type="radio" name="radio3" value="option3">
                                            <label class="form-check-label mb-0" for="radioinline3">Cash</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline4" type="radio" name="radio3" value="option3">
                                            <label class="form-check-label mb-0" for="radioinline4">DP</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <label class="form-label" for="exampleFormControlInput1"><strong>Nominal Pembayaran</strong></label>
                            <input class="form-control" id="exampleFormControlInput1" type="text">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection()