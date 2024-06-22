<?php $this->load->helper('url'); ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Bengkel Las Cibubur Kranggan : Jasa Pasang Kanopi, Pagar, Teralis Jendela, Raling Tangga">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>Bengkel Las Tunas Jaya Mulia | Jasa Pasang Kanopi, Pagar, Teralis, Raling Tangga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/header.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/slick.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/slick-theme.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400&display=swap" rel="stylesheet">
   
    <script src="<?php echo base_url('assets/jquery/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/header.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/font-awesome.js') ?>"></script>
</head>
<body>    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F6F7F2;">
        <a class="navbar-brand" href="<?php echo site_url('/home') ?>">
            <img src="<?php echo base_url('assets/img/logo.png') ?>" /> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('/home') ?>">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/home#about') ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/home#service') ?>">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/home#gallery') ?>">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/home#contact-us') ?>">Kontak</a>
                </li>

            </ul>
        </div>
    </nav>