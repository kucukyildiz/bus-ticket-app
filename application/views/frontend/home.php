<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Log on to codeastro.com for more projects -->
		<!-- Site Title -->
		<title>BUS TICKET BOOKING</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<style type="text/css">
		.combined {
		-webkit-text-stroke: 1px black;
		color: white;
		text-shadow:
		2px  2px 0 #000,
		-1px -1px 0 #000,
		1px -1px 0 #000,
		-1px  1px 0 #000,
		1px  1px 0 #000;
		}
		.border-black{
		  color: blue;
		  /*border white with light shadow*/
		  text-shadow: 
		     2px   0  0   #000, 
		    -2px   0  0   #000, 
		     0    2px 0   #000, 
		     0   -2px 0   #000, 
		     1px  1px 0   #000, 
		    -1px -1px 0   #000, 
		     1px -1px 0   #000, 
		    -1px  1px 0   #000,
		     1px  1px 5px #000;
		}

           .logo img {
             max-height: 80px !important;
               }

select.form-control{
    color: black;
}

.main-container > section {
    height:100vh;
}


		</style>
<link rel="stylesheet" type="text/css"
		href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>

 <!--Main Wrapper Start-->
    <div class="wrapper" id="top">
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
		<!-- start banner Area -->




 <div class="main-container">
            <section id="home" class="height-100 hero-section light-text">
                <div class="section-background">
                    <div class="background-wrapper">
                        <div class="background-inner bg-12" style=" "></div>
                    </div>
                </div>
                <div class="container double-top-padding double-bottom-padding height-100">
                    <div class="row">
                        <div class="col-md-12 banner-content">
                       
                            <h1 class="large-heading"><span>Konforlu ve Güvenilir Seyahat İçin
</span> Tek Adres</h1>
                            <div class="text-block text-lead">
                                <p>Türkiye'nin dört bir yanına konforlu ve güvenilir seyahatler için buradayız. Umuttepe Turizm, size en uygun fiyatlarla otobüs biletlerini ayırtmanızı sağlar. </p>
                            </div>
                            <a class="btn btn-primary btn-accent has-icon" href="<?php echo base_url() ?>tiket"><span>Biletinizi Alın!</span><i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
            </section>
            <!-- Hero Section End -->
    
		<!-- start footer Area -->
		<?php // $this->load->view('frontend/include/base_footer'); ?>
            </div>
             <!--Main Wrapper End-->
		<!-- js -->
		<?php $this->load->view('frontend/include/base_js'); ?>


	</body>
</html>