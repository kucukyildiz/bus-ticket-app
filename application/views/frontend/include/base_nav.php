

 <!--Header Start -->
        <header class="main-header menu-absolute transparent dark-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 logo">
                        <a href="<?php echo base_url() ?>" title="Kocaeli Turism">
                            <img src="<?php echo base_url() ?>assets/frontend/img/logo2.png" alt="bus" class="regular-logo">
                            <img src="images/bus-dark-logo.png" alt="bus" class="sticky-logo">
                        </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                        <div class="menu-icon">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                    </div>
                    <div class="col-sm-9 menu-conainer">

                    <nav class="site-navigation">
                            <ul class="main-menu">
<li class="menu"><a href="<?php echo base_url() ?>">Ana Sayfa</a></li>
			          <li><a href="<?php echo base_url() ?>tiket">Bilet Al</a></li>
			          <li class="menu"><a href="<?php echo base_url() ?>tiket/cektiket">Seyahat Sorgula</a></li>
			          <?php if ($this->session->userdata('username')) { ?>
				      	<li class="menu-has-children"><a href="#">Merhaba, <?php echo $this->session->userdata('nama_lengkap'); ?></a>
						<ul>
							<li><a href="<?php echo base_url() ?>profile/profilesaya/<?php echo $this->session->userdata('kd_pelanggan') ?>"><i class="fas fa-id-card"></i> Profilim</a></li>
							<li><a href="<?php echo base_url() ?>profile/tiketsaya/<?php echo $this->session->userdata('kd_pelanggan') ?>"><i class="fas fa-ticket-alt"></i> Biletlerim</a></li>
							<li><a href="<?php echo base_url() ?>login/logout"><i class="fas fa-sign-out-alt"></i> Üye Çıkışı</a></li>
						</ul>
						</li>
				      <?php }else{ ?>  
				  	  <li class="menu "><a href="<?php echo base_url() ?>login/Daftar">Üye Ol</a></li>
 					  <li><a href="<?php echo base_url() ?>login">Üye Girişi</a></li>
				  	  <?php } ?>
                               
                            </ul>
                          
                        </nav>

     
                       
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->