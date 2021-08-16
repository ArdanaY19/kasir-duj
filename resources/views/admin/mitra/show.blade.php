@extends('admin.layouts.app')

@section('content')
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                placeholder="Search Cuba .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span
                                    class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                            src="../assets/images/logo/logo.png" alt=""></a></div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                        data-feather="align-center"></i></div>
            </div>
            <div class="left-header col horizontal-wrapper ps-0">
                <ul class="horizontal-menu">


                </ul>
            </div>
            <div class="nav-right col-8 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li class="onhover-dropdown">
                        <div class="notification-box"><i data-feather="bell"> </i></div>
                        <ul class="notification-dropdown onhover-show-div">
                            <li><i data-feather="bell"></i>
                                <h6 class="f-18 mb-0">Notitications</h6>
                            </li>
                            <li>
                                <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span
                                        class="pull-right">10 min.</span></p>
                            </li>
                            <li>
                                <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                        class="pull-right">1 hr</span></p>
                            </li>
                            <li>
                                <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                        class="pull-right">3 hr</span></p>
                            </li>
                            <li>
                                <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                        class="pull-right">6 hr</span></p>
                            </li>
                            <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown"><i data-feather="message-square"></i>
                        <ul class="chat-dropdown onhover-show-div">
                            <li><i data-feather="message-square"></i>
                                <h6 class="f-18 mb-0">Message Box </h6>
                            </li>
                            <li>
                                <div class="media"><img class="img-fluid rounded-circle me-3"
                                        src="../assets/images/user/1.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="media-body"><span>Erica Hughes</span>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                    </div>
                                    <p class="f-12 font-success">58 mins ago</p>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img class="img-fluid rounded-circle me-3"
                                        src="../assets/images/user/2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="media-body"><span>Kori Thomas</span>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                    </div>
                                    <p class="f-12 font-success">1 hr ago</p>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img class="img-fluid rounded-circle me-3"
                                        src="../assets/images/user/4.jpg" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="media-body"><span>Ain Chavez</span>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                    </div>
                                    <p class="f-12 font-danger">32 mins ago</p>
                                </div>
                            </li>
                            <li class="text-center"> <a class="btn btn-primary" href="#">View All </a></li>
                        </ul>
                    </li>
                    <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                data-feather="maximize"></i></a></li>
                    <li class="profile-nav onhover-dropdown p-0 me-0">
                        <div class="media profile-media"><img class="b-r-10"
                                src="../assets/images/dashboard/profile.jpg" alt="">
                            <div class="media-body"><span>DUJ User</span>
                                <p class="mb-0 font-roboto">Head Office <i class="middle fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                            <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                            <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                            <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                            <li><a href="#"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <!-- <div class="ProfileCard-realName">disini isinya nama</div> -->
            </div>
            </div>
          </script>
            <script class="empty-template" type="text/x-handlebars-template">
                <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
            </script>
        </div>
    </div>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper"><a href="index.html">DUJ Dashboard</a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                    </div>
                </div>
                <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                            src="../assets/images/logo/logo-icon.png" alt=""></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <div>
                                    <h6>DUJ Dashboard</h6>
                                </div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>DUJ Dashboard</h6>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title"
                                    href="#"><i data-feather="home"></i><span>Dashboard</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a class="lan-4" href="index.html">Default</a></li>
                                    <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="layout"></i><span>Tamu</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="box-layout.html">Boxed</a></li>
                                    <li><a href="layout-rtl.html">RTL</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="layout"></i><span>Mitra</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="box-layout.html">Boxed</a></li>
                                    <li><a href="layout-rtl.html">RTL</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="layout"></i><span>Transaksi</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="box-layout.html">Boxed</a></li>
                                    <li><a href="layout-rtl.html">RTL</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="layout"></i><span>Tabungan Tamu</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="box-layout.html">Boxed</a></li>
                                    <li><a href="layout-rtl.html">RTL</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div style="background-color: white;" class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div style="color: #7366FF;" class="col-6">
                            <h3>Detail Data Mitra</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item active">Detail Data Mitra</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="email-wrap bookmark-wrap">
                    <div class="row">
                        <div class="col-xl-9 col-md-12 box-col-12">
                            <div class="email-right-aside bookmark-tabcontent contacts-tabs">
                                <div class="ps-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="pills-personal" role="tabpanel"
                                            aria-labelledby="pills-personal-tab">

                                            <div class="media"><img
                                                    class="img-100 img-fluid m-r-20 rounded-circle update_img_0"
                                                    src="../assets/images/user/2.png" alt="">
                                                <div style="margin-top: 25px;" class="media-body">
                                                    <h6> <span class="first_name_0">{{ $mitra->nama }} </span></h6>
                                                    <p class="email_add_0">Nama HO</p>
                                                </div>
                                            </div>

                                            <div style="margin-top: 60px;" class="col-xl-6">
                                                <div class="best-seller-table responsive-tbl">
                                                    <div class="item">
                                                        <div class="table-responsive product-list">

                                                            <table class="table table-bordernone">
                                                                <tbody>
                                                                    <tr>
                                                                        <th style="font-size: 12px;">Nomor Telepon</th>
                                                                        <th style="font-size: 12px;"> :</th>
                                                                        <th style="font-size: 12px;">
                                                                            <p>{{ $mitra->no_hp }}</p>
                                                                        </th>

                                                                    </tr>
                                                                    <tr>
                                                                        <th style="font-size: 12px;">Alamat</th>
                                                                        <th style="font-size: 12px;"> :</th>
                                                                        <th style="font-size: 12px;">
                                                                            <p>{{ $mitra->alamat }}</p>
                                                                        </th>

                                                                    </tr>
                                                                    <tr>
                                                                        <th> <a href="{{ url('admin/create') }}"><button
                                                                                    class="btn btn-primary">Ubah
                                                                                    Data</button></a>
                                                                        </th>

                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Container-fluid Ends-->
        </div>
        @endsection

        @section('footer')
        @include('admin.layouts.footer')
        @endsection
