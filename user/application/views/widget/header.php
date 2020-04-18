<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <link rel="icon" href="<?= base_url('assets/img/favicon.png');?>">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css');?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.css');?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css');?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css');?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    
    <style type="text/css">
    @media (min-width: 998px) {
        .mobile {
            display: none;
        }
    }

    @media (max-width: 998px) {
        .login {
            display: none;
        }
    }
    </style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?= base_url('Welcome'); ?>"> <img src="<?php echo base_url('assets/img/logo.png');?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('Welcome');?>">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('DataAlumni');?>">Alumni</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Acara
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo base_url('Loker');?>"> Lowongan Kerja</a>
                                        <a class="dropdown-item" href="<?php echo base_url('Prestasi');?>"> Prestasi Alumni</a>
                                        <a class="dropdown-item" href="<?php echo base_url('Reuni');?>">Reuni</a>
                                        <a class="dropdown-item" href="<?php echo base_url('Berita');?>">Berita</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('About');?>">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('Contact');?>">Kontak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('Profil/my_profil');?>">Profil saya</a>
                                </li>
                                <div class="mobile">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('Profil');?>">Ganti password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('Logout');?>">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="login">
                        <?php 
                        if ($this->session->userdata("status")=="login") {
                            echo "
                            <a href='".base_url('Profil')."'><span style='color:white;'><i class='fas fa-user-circle'> &nbsp</i>Hai, ".$this->session->userdata('nama_user')."!</span></a>&nbsp&nbsp <a href='".base_url('Logout')."'><button class='btn btn-warning btn-sm'><i class='fas fa-sign-out-alt'></i> Logout</button></a>";
                        }else {
                            echo "<a class='btn_1 d-none d-lg-block' href='".base_url('Login')."'>Masuk</a>";
                        }
                        ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
