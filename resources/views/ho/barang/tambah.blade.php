@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Tambah Data Barang</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Tambah Data Barang</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <form class="form theme-form" method="POST" action="{{url('ho_stok')}}" >
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nama Produk</label>
                                <input class="form-control" name="produk" id="exampleFormControlInput1" value="" type="text">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nama Center</label>
                                <input class="form-control" name="center" id="exampleFormControlInput1" value="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput2">Harga Grosir</label>
                                <input class="form-control" name="harga_grosir" id="exampleFormControlInput2" value="" type="text">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput2">Harga Retail</label>
                                <input class="form-control" name="harga_retail" id="exampleFormControlInput2" value="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Jumlah Stok</label>
                                <input class="form-control" name="stok" id="exampleFormControlInput1" value="" type="text">
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 30px;" class="row">
                        <div class="col">
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit">Simpan Data</button>
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
