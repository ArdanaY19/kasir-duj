@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Data Stok Barang</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Data Stok Barang</li>
                </ol>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">

            </div>
            <div class="col-6 align-self-end">
                <div class="pull-right">
                    <a href="{{ url('ho_stok/create') }}"><button class="btn btn-success" type="button" title="">Tambah Barang</button></a>
                </div>
            </div>
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
                        <th>Nama Produk</th>
                        <th>Harga Grosir</th>
                        <th>Harga Retail</th>
                        <th>Nama Center</th>
                        <th>Stok</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($stoks as $value=>$stok)
                <tbody>
                    <!-- loop data -->
                    <tr>
                        <td>{{$no++}}</td>
                        <td>
                            {{$stok->produk}}
                        </td>
                        <td>{{$stok->harga_grosir}}</td>
                        <td>{{$stok->harga_retail}}</td>
                        <td>{{$stok->center}}</td>
                        <td>{{$stok->stok}}</td>
                        <td><a href="{{ url('ho_stok/'.$stok->id.'/edit') }}"><button class="icon-pencil btn btn-primary" type="button" title=""></button></a></td>

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
