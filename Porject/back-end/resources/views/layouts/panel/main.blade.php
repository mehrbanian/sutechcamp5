<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>@yield('page-title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon-we.png">
    <link href="/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="/css/panel-styles.css" id="app-style" rel="stylesheet" type="text/css">
</head>
<body data-layout="horizontal" data-topbar="dark">
<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/images/logo-we.png" alt="" height="20">
                                </span>
                            <span class="logo-lg">
                                    <img src="/images/logo-we.png" alt="" height="35">
                                </span>
                        </a>
                    </div>

                    <button type="button"
                            class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                            data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="topnav">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard"
                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            پیشخوان
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components"
                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            مدیریت کاربران
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                            <a href="#" class="dropdown-item">همه کاربران</a>
                                            <a href="#" class="dropdown-item">افزودن کاربر</a>
                                            <a href="#" class="dropdown-item">آمار سایت</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps"
                                           role="button" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            تنظیمات
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="/images/avatar-we.jpg"
                                 alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1">سلام امید!</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i>
                                پروفایل</a>
                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge badge-success float-right">11</span><i
                                    class="bx bx-wrench font-size-16 align-middle mr-1"></i> تنظیمات</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i
                                    class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> خروج</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">@yield('panel-title')</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#">پیشخوان</a></li>
                                    <li class="breadcrumb-item active">@yield('panel-title')</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                @yield('content-right')
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                @yield('content-left')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- End Page-content -->
@include('layouts.panel.footer')
