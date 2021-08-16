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
                            <th>Alamat</th>
                            <th>No. Telepon</th>

                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    @foreach($mitras as $key=>$mitra)
                    <tbody>
                        <!-- loop data -->
                        <tr>
                            <td>{{$no++}}</td>
                            <td>
                                {{$mitra->nama}}
                            </td>
                            <td>{{$mitra->alamat}}</td>
                            <td>{{$mitra->no_hp}}</td>

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
