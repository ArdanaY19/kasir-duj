@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Data Tabungan Tamu</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Data Tabungan Tamu</li>
                </ol>
            </div>
        </div>

    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row size-column">
        <div style="margin-top: 10px;" class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div class="best-seller-table responsive-tbl">
                        <div class="item">


                            <table class="hover" id="example-style-4">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tamu</th>
                                        <th>Nama Staff</th>
                                        <th>Nama Center</th>
                                        <th>Produk</th>
                                        <th>Status</th>
                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <!-- loop data -->
                                <tr>@extends('frontend.layout-frontend.master')

                                    @section('content')

                                    <div class="container-fluid">
                                        <div class="page-title pt-3">
                                            <div class="row">
                                                <div style="color: #7366FF;" class="col-6">
                                                    <h3>Data Tabungan Tamu</h3>
                                                </div>
                                                <div class="col-6">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                                        <li class="breadcrumb-item">Dashboard</li>
                                                        <li class="breadcrumb-item active">Data Tabungan Tamu</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Container-fluid starts-->
                                    <div class="container-fluid">
                                        <div class="row size-column">
                                            <div style="margin-top: 10px;" class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <div class="best-seller-table responsive-tbl">
                                                            <div class="item">


                                                                <table class="hover" id="example-style-4">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Nama Tamu</th>
                                                                            <th>Nama Staff</th>
                                                                            <th>Nama Center</th>
                                                                            <th>Produk</th>
                                                                            <th>Status</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <!-- loop data -->
                                                                    <?php $no = 1; ?>
                                                                    @foreach($tabungans as $key=>$ta)
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>{{$no++}}</td>
                                                                            <td>
                                                                                <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../assets/images/avtar/7.jpg" alt="">
                                                                                    <div class="status-circle bg-primary"></div>
                                                                                    <div class="d-inline-block"><span>{{$ta->transtamu->tamu->nama}}</span>
                                                                                        <p class="font-roboto">2019</p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{$ta->transtamu->tamu->staff}}</td>
                                                                            <td>{{$ta->transtamu->tamu->center}}</td>
                                                                            <td>{{$ta->transtamu->stok->produk}}</td>
                                                                            <td>{{$ta->transtamu->status}}</td>
                                                                            <td><a href="{{ url('ho_tabungan/'.$ta->id) }}"><button class="btn btn-success m-r-10" type="button" title="">Detail</button></a></td>
                                                                        </tr>

                                                                    </tbody>
                                                                    @endforeach
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endsection()

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()
