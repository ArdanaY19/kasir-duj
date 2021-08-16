@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Tambah Data Mitra</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Tambah Data Mitra</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <form class="form theme-form" action="{{ url('ho_mitra') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nama Mitra</label>
                                <input class="form-control" name="nama" id="exampleFormControlInput1" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput2">No. Telepon</label>
                                <input class="form-control" name="no_hp" id="exampleFormControlInput2" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div>
                                <label class="form-label" for="exampleFormControlTextarea4">Alamat</label>
                                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea4" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 30px;" class="row">
                        <div class="col">
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Simpan Data</button>
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
