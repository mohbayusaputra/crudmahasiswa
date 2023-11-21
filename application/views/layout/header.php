<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BPF_Bayu_2TIA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/') ?>css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">BPF 22 TI A</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            <?= $user['nama']; ?>
                        </span>
                        <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="rounded-circle">
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <span class="d-none d-md-block ps-2">
                                <?= $user['nama']; ?>
                                <br>Web Designer
                            </span>
                            <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>"
                                style="width:100px;heigth:auto;" class="rounded-circle">

                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('profil/'); ?>">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('auth/logout'); ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <?php
            if ($user['role'] == 'Admin') { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Mahasiswa/') ?>">
                        <i class="bi bi-person"></i><span>Mahasiswa</span>
                    </a>
                </li><!-- End Mahasiswa Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Prodi/') ?>">
                        <i class="bi bi-journal-text"></i><span>Prodi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Capres/') ?>">
                        <i class="bi bi-person"></i><span>Calon Presiden</span>
                    </a>
                </li><!-- End Prodi Nav -->
            <?php } else {
                ?>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Profil/') ?>">
                        <i class="bi bi-person"></i><span>Profil</span>
                    </a>
                </li><!-- End Mahasiswa Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('auth/logout'); ?>">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Logout</span>
                    </a>
                </li><!-- End Logout Page Nav -->
            <?php } ?>

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">