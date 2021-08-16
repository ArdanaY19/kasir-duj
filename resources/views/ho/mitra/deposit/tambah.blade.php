@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Tambah Deposit</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Tambah Deposit</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <form class="form theme-form" method="POST" action="{{url('ho_deposit')}}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nama Mitra</label>
                                <select name="nama" id="nama" class="form-control">
                                    <option value="">Select Mitra</option>
                                    @foreach ($depo as $value => $d)
                                        <option value="{{ $d->transmitra->mitra->id }}">{{ $d->transmitra->mitra->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput2">Tanggal Deposit</label>
                                <input class="form-control" name="tanggal" id="exampleFormControlInput2" value="" type="date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput2">Nominal Pembayaran</label>
                                <input class="form-control" name="nominal" id="exampleFormControlInput2" value="" type="number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput2">Keterangan Pembayaran</label>
                                <input class="form-control" name="keterangan" id="exampleFormControlInput2" value="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Tambah Data & Cetak Struk</button>
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
