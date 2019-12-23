<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Dinas Tenaga Kerja dan Transmigrasi Maluku Tengah
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="<?php echo base_url() ?>/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="<?php echo base_url() ?>/assets/demo/demo.css" rel="stylesheet" />
        <!--   Core JS Files   -->
        <script src="<?php echo base_url() ?>/assets/js/core/jquery.min.js"></script>
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>
        <div class="wrapper ">
            <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php echo base_url() ?>/assets/img/sidebar-2.jpg">
                <!--
                  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
          
                  Tip 2: you can also add an image using data-image tag
                -->
                <div class="logo"><a href="<?php echo base_url() ?> " class="simple-text logo-normal">
                    <!-- <img src="<?php echo base_url('assets/img/logo-dinas-ketenagakerjaan-maluku-tengah.png') ?>" alt="" class="img-fluid w-100"> -->
                        Disnakertrans<br>Maluku Tengah
                    </a></div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo site_url('lowongan-kerja') ?>">
                                <i class="material-icons">person</i>
                                <p>Lowongan Kerja</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo site_url('berita') ?>">
                                <i class="material-icons">content_paste</i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo site_url('pengumuman') ?>">
                                <i class="material-icons">library_books</i>
                                <p>Pengumuman</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo site_url('papan-informasi') ?>">
                                <i class="material-icons">bubble_chart</i>
                                <p>Papan Informasi</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link"href="<?php echo site_url('halaman-statis') ?>">
                                <i class="material-icons">list</i>
                                <p>Halaman Statis</p>
                            </a>
                        </li>
<!--                        <li class="nav-item ">
                            <a class="nav-link" href="./notifications.html">
                                <i class="material-icons">notifications</i>
                                <p>Notifications</p>
                            </a>
                        </li>-->
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="lead" href="javascript:void(0)"><?php echo $title ?></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)" id="profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person</i>
                                        <span><?php echo $this->session->userdata('name') ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profile">
                                        <a class="dropdown-item" href="<?php echo site_url('logout') ?>">
                                            <i class="material-icons">highlight_off</i>&nbsp;<span>Logout</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
