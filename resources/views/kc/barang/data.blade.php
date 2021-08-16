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
                            <th>Harga Retail</th>
                            <th>Stok</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    @foreach ($stoks as $value => $s)
                    <tbody>
                        <!-- loop data -->
                        <tr>
                            <td>{{$no++}}</td>
                            <td>
                                {{$s->produk}}
                            </td>
                            <td>{{$s->harga_retail}}</td>
                            <td>{{$s->stok}}</td>
                            <td><a href="{{ url('kc_stok/'.$s->id) }}"><button class="btn btn-success" type="button" title="">Detail</button></a></td>

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
