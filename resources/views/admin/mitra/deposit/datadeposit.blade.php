@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Data Deposit Mitra</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Data Deposit Mitra</li>
                </ol>
            </div>
        </div>
    </div>


    <div class="col-sm-12">
        <div class="card">

            <div class="card-body table-responsive">
                <table class="display" id="advance-12">
                    <thead>
                        <tr>
                            <!-- loop data -->
                            <th>No</th>
                            <th>Nama Mitra</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama HO</th>
                            <th>Nominal Pembayaran</th>
                            <th>Total Deposit</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                     @foreach ($deposits as $value=>$depo)
                    <tbody>
                        <!-- loop data -->
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$depo->transmitra->mitra->nama}}</td>
                            <td>Senin - {{$depo->tanggal}}</td>
                            <td>{{auth()->user()->name}}</td>
                            <td>{{$depo->nominal}}</td>
                            <td>{{$depo->transmitra->total}}</td>
                            <td><a href="{{ url('ad_deposit/'.$depo->id) }}"><button class="icon-eye btn btn-success" type="button" title=""></button></a></td>

                        </tr>
                        <!-- loop data -->
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection()
