<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="bd-greetings">
                    <h2>Selamat Datang di Bengkel Las Tunas Jaya Mulia...</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="img-container" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h2>Apa itu</h2>
                    <h4>Tunas Jaya Mulia ?</h4>
                </div>
                <div class="col-sm-7">
                     <p>Tunas Jaya Mulia adalah badan usaha yang bergerak dibidang jasa pengrajin besi dan bengkel las.
                        Kami melayani jasa pembuatan dan pemasangan Kanopi, Pagar Besi, Pintu Dorong,
                        Teralis Jendela, Railing Tangga, Balkon, Stainlis, Tangga Putar, dll.
                     </p>
                </div>
                    <!-- </div> -->
            </div>
            <div class="row" style="float:right;">
                <div class="whatsapp">
                    <a href="https://wa.me/6281218351200?text=Hi+!+Saya+ingin+bertanya+tentang+jasa+yang+ditawarkan+di+Website">
                        <img src="<?php echo base_url('assets/img/Asset 26.png') ?>" class="img-responsive" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Layanan Kami -->
    <div class="service-top-block" id="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Layanan Kami</h2>
                    <hr />
                </div>
            </div>
            <div class="service-short-desc">
                <div class="row align-items-center">
                    <?php foreach($service as $row):?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?= base_url().'upload/service/'.$row->image?>" class="img-responsive" />
                            <div class="caption">
                                <h4><?php echo $row->title; ?></h4>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <!-- End of service Collection -->

    <!-- Portofolio -->
    <div class="portofolio" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Portofolio Kami</h2>
                    <hr />
                </div>
            </div>
            <div class="portofolio-short-desc">
                <div class="row">
                <?php foreach($gallery as $row):?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="<?= base_url().'upload/gallery/'.$row->image?>" target="_blank">
                                <img src="<?= base_url().'upload/gallery/'.$row->image?>" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p><?php echo $row->description; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact Us -->
    <div class="contact-us" id="contact-us"> 
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="phone-number">
                        <h2>Kontak Kami</h2>
                        <hr />
                        <ul>
                            <li><img src="<?php echo base_url('assets/img/phone-call.png') ?>" /> 0812-1835-1200</li>
                            <br>
                            <li><img src="<?php echo base_url('assets/img/Asset 26.png') ?>" /> 0812-1835-1200</li>
                        </ul>
                        <p>Jl. Raya Kranggan, RT.2/RW.009, Kelurahan Pondok Gede, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126904.24399504831!2d106.80230875318789!3d-6.295549633866675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993cb18793261%3A0xeceff5ae2bac46d!2sTuKang%20Las%20KANOPI%20Cibubur%20dan%20TERALIS.%20Tlp%2FWA%20081218351200!5e0!3m2!1sid!2sid!4v1631195707630!5m2!1sid!2sid" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>