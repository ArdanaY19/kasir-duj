@extends('frontend.layout-frontend.master')

@section('content')

<div class="container-fluid">
    <div class="page-title pt-3">
        <div class="row">
            <div style="color: #7366FF;" class="col-6">
                <h3>Data Mitra</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Data Mitra</li>
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
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>nomor Telepon</th>
                            <th>Center</th>
                            <th>Kehadiran</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- loop data -->
                        <tr>
                            <td>1</td>
                            <td>
                                John kete
                            </td>
                            <td>363183719384</td>
                            <td>08121831893</td>
                            <td>Jember</td>
                            <td>4</td>
                            <td><a href="{{ url('/detaildatatamukasir') }}"><button class="btn btn-success m-r-10" type="button" title="">Detail</button></a></td>

                        </tr>
                        <!-- loop data -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection()