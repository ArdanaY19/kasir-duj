@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Data Ganti Produk Tamu</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Data Ganti Produk Tamu</li>
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
                            <th>Nama Tamu</th>
                            <th>Tanggal Ganti Produk</th>
                            <th>Nama Staff</th>
                            <th>Nama produk awal</th>
                            <th>Nama produk akhir</th>
                            <th>Total Tabungan</th>
                            <th>Mutasi ke -</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    @foreach($produks as $p)
                    <tbody>
                        <!-- loop data -->
                        <tr>
                            <td>{{$no++}}</td>
                            <td>John ketea</td>
                            <td>Senin - 04/02/2021</td>
                            <td> Guya</td>
                            <td>laptop</td>
                            <td>HP</td>

                            <td>10.000</td>
                            <td>2</td>
                            <td>Diverifikasi</td>
                            <td><a href="#"><button class="icon-file btn btn-primary" type="button" title=""></button></a><a href="{{ url('ho_produk/'.$p->id) }}"><button class="icon-eye btn btn-success" type="button" title=""></button></a></td>

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
