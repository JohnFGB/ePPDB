<?php $ceks = $this->session->userdata('no_pendaftaran'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB Online | SMK</title>
		<base href="<?php echo base_url();?>"/>

		<link rel="icon" href="<?= base_url('img/smkn2.png'); ?>" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/faa.css'); ?>" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="<?= base_url('assets/css/freelancer.css'); ?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?= base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        
    <![endif]-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad" style="background-color: #2a95ff;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="<?= base_url(); ?>img/smkn2.png" alt="Logo" width="50" style="position:absolute;margin-top:-10px;"> <span style="margin-left:60px;">SMKN 2 Cibinong</span> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio"><img src="<?= base_url(); ?>img/smkn2.png" alt="Logo" width="15"> Tentang Sekolah</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-info-circle"></i> Informasi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#jurusan"><i class="fa fa-phone-square"></i> Jurusan Kami</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><i class="fa fa-phone-square"></i> Kontak Kami</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
      <?php
      if ($this->uri->segment(1) == 'logcs') {
        $this->load->view('web/login');
      } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <img class="img-responsive" src="<?= base_url(); ?>img/smkn2.png" style="margin-top:-15%;margin-bottom:-10px;" width="100">
                    <div class="intro-text"><br>
                        <span class="name shad" style="font-size:35px">PPDB ONLINE</span>

                        <br>
                      <?php if ($web_ppdb->status_ppdb == 'buka') {?>
                        <span class="skills">
                        	<a href="PETUNJUK_TEKNIS_PPDB_2023.pdf" class="btn btn-danger btn-lg"><i class="fa fa-file-pdf-o faa-pulse animated"></i> &nbsp;Download Panduan PPDB Online</a>
                        </span>
                        <br> <br>
                        <hr class="star-light">
												<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online SMKN 2 Cibinong</h3> -->
                        <span>
                         <a href="pendaftaran" class="btn btn-primary btn-lg" style="width:300px;margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online</a>
												 <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-users faa-pulse animated"></i> &nbsp;<?php if($ceks==''){echo "Login";}else{echo "Panel";} ?> Calon Siswa</a>
												 <br>
											  </span>
                      <?php }else{ ?>
                        <span class="skills">
                        </span>
                        <br> <br>
                        <hr class="star-light">
												<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online SMK</h3> -->
                        <span>
                         <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online ditutup</a>
												 <br>
											  </span>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang sekolah</h2>
                    <hr class="star-primary">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 portfolio-item">
                    <a href="https://smkn2cibinong.sch.id/" target="_blank" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url(); ?>img/smkn2.png" class="img-thumbnail" alt=""><br><br>
                        <span class="btn btn-success btn-block">smk2cibinong.sch.id</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Informasi PPDB Online</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" style="text-align:justify">
                    <p>SMKN 2 Cibinong menyediakan PPDB secara <i>online</i> diharapkan proses PPDB dapat berjalan cepat
                    dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses pendaftaran calon siswa baru tidak menggunakan formulir konvensional hanya dengan mengakses website PPDB Online SMKN 2 Cibinong. </p>
                </div>
                <div class="col-lg-4" style="text-align:justify">
                    <p>Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon siswa akan mendapat bukti daftar dengan nomor pendaftaran dan harus disimpan yang akan digunakan untuk proses selanjutnya.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                    <a href="#page-top" class="btn btn-md btn-outline">
                        <i class="fa fa-pencil-square-o "></i> PPDB Online
                    </a> &nbsp;&nbsp;
                    <a href="#prosedur" class="btn btn-md btn-outline">
                        <i class="fa fa-tasks"></i> Prosedur PPDB Online
                    </a>&nbsp;&nbsp;
                    <a href="logcs" class="btn btn-md btn-outline">
                        <i class="fa fa-sign-in"></i> <?php if($ceks==''){echo "Login";}else{echo "Panel";} ?> Calon Siswa
                    </a>&nbsp;&nbsp;

                </div>
            </div>
        </div>
    </section>

     <section id="jurusan">
     <div class="container">
     <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Jurusan SMKN 2 CIBINONG</h2>
                    <hr class="star-primary">
                </div>
            </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="https://th.bing.com/th/id/OIP.PBJNmaS-xbs0nt0zaWH7swHaEm?pid=ImgDet&rs=1" alt="Animasi" style="width:100%;">
          <!-- bagian caption -->
           <div class="carousel-caption">
           	 <h3>Animasi</h3>
     	     <p>Salah satu jurusan baru yang sangat diminati, didukung oleh tenaga pengajar professional dari industri!</p>
      	   </div>
          <!--akhir caption -->
        </div>

        <div class="item">
          <img src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/1766b1b3-9d12-4e85-a9f5-d75ef38bbf42" alt="Musik" style="width:100%;">
          <!-- bagian caption -->
           <div class="carousel-caption">
           	 <h3>Musik Klasik</h3>
     	     <p>Salah satu jurusan yang unik dan sudah banyak berpengalaman dalam pentas seni musik klasik, didukung juga oleh seorang komposer yaitu Addie MS!</p>
      	   </div>
          <!--akhir caption -->
        </div>

        <div class="item">
         <img src="https://th.bing.com/th/id/OIP.qsyNMupoiwlwy86M1ZBdygHaE8?pid=ImgDet&rs=1" alt="Broadcasting" style="width:100%;">
          <!-- bagian caption -->
           <div class="carousel-caption">
           	 <h3>Broadcasting</h3>
     	     <p>Salah satu jurusan unggulan dalam SMKN 2 CIBINONG dan didukung juga oleh alat alat yang memadai!</p>
      	   </div>
          <!--akhir caption -->       
        </div>
      </div>

      <!-- Kontrol untukk pindah kanan dan kiri -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Sebelumnya</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Selanjutnya</span>
      </a>
    </div>
  </div>
  <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                       <!-- <img class="img-responsive" src="img/alur_ppdb_online_new.jpg" alt=""> -->
                    </div>
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12 text-center">
                            <ol style="font-size:18px;text-align:justify">
                                    <li><b>Animasi</b></li>
                                    <li><b>Musik Klasik</b></li>
                                    <li><b>Broadcasting</b></li>
								</ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Contact Section -->
		<section class="success" id="contact">
        <!-- <div class="container"> -->
            <div class="row" style="margin-top:-100px;margin-bottom:-105px;">
                <div class="col-lg-4 text-center">
                  <br><br>
                    <h2>Kontak Kami</h2>
                    <hr class="star-light">
                    <h4>
                    Jl. Raya Skb No. 1 Karadenan, Kec. Cibinong, Kab Bogor <br><br>
                    </h4>
                    <span style="color:#222;"><b><i class="fa fa-phone-square"></i> 0251 8582276</b> </span>
										&nbsp;
                    <span class="eml" style="color:#222;"><i class="fa fa-envelope"></i> smkn2cibinong@gmail.com</span>
                    <br>
                </div>
                <div class="col-lg-8 text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.0007329109276!2d106.81376111477067!3d-6.521588095282741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3df144ce269%3A0x3f67d625792e61a!2sSMKN%202%20Cibinong!5e0!3m2!1sen!2sid!4v1685808119297!5m2!1sen!2sid" width="100%" height="465" style="border:0;" allowfullscreen frameborder="0"></iframe>
              	</div>
            </div>
        <!-- </div> -->
    </section>



    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <a href="http://www.sma.sch.id" target="_blank">SMK</a> <?php echo date('Y'); ?> | IT Development
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="<?= base_url(''); ?>/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(''); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url(''); ?>/assets/js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url(''); ?>/assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?= base_url(''); ?>/assets/js/freelancer.min.js"></script>

</body>
</html>
