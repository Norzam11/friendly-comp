<?php  
include 'header.php';
?>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="nav-menu">
                  <ul class="nav navbar-nav menu-top">
                    <li><a href="index.php" class="page-scroll">Beranda <span class="sr-only">(current)</span></a></li>
                    <li><a href="#about" class="page-scroll">Tentang Kami</a></li>
                    <li><a href="laptop.php">Laptop</a></li>
                    <li><a href="aksesoris.php">Aksesoris Komputer</a></li>
                    <li><a href="servis.php">Layanan Perbaikan</a></li>
                    <li><a href="tips.php">Tips & Trick</a></li>
                    <li><a href="#kontak" class="page-scroll">Kontak Kami</a></li>
                  </ul>
                  <form method="get" role="search" target="_blank" action="https://google.com/search" class="navbar-form navbar-right">
                    <div class="form-group">
                      <input type="text" class="form-control form-top" placeholder="Masukkan kata yang ingin dicari......" autofocus>
                    </div>
                    <button type="submit" class="btn btn-default btn-link btn-search-top"><span class="glyphicon glyphicon-search"></span></button>
                    <input name='domains' type='hidden' value='https://kliknklik.com/'/>
                    <input name='sitesearch' type='hidden' value='https://kliknklik.com/'/>
                    <input name='ie' type='hidden' value='UTF-8'/>
                    <input name='hl' type='hidden' value='id'/>
                  </form> 
              </div><!-- /.navbar-collapse -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

    <div class="row slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/slider/slider1.png" alt="Slide1">
          </div>
          <div class="item">
            <img src="img/slider/slider2.png" alt="Slider2">
          </div>
          <div class="item">
            <img src="img/slider/slider3.png" alt="Slider3">
          </div>
          <div class="item">
            <img src="img/slider/slider4.png" alt="Slider3">
          </div>
          <div class="item">
            <img src="img/slider/slider5.png" alt="Slider3">
          </div>
        </div>
      <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>   

      
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="welcome text-center">
            <h1>Selamat Datang di Friendly Computer</h1>
          </div>
        </div>
      </div>
    </div>

      <div class="container">
        <div class="well well-small">
          <div class="row">
            <div class="col-sm-10">
              <h3> HOT PROMO </h3>
            </div>
            <div class="col-sm-2 text-right">
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true" style="font-size:30px; color:#4B0082"></span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true" style="font-size:30px; color:#4B0082"></span>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="well">
              <div id="myCarousel" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row">
                      <?php $brg=mysql_query("SELECT * FROM produk WHERE keterangan='Promo' AND active='1'"); ?>
                      <?php while($b=mysql_fetch_array($brg)){ ?>
                      <div class="col-sm-3">
                        <div class="produk"><img src="foto/<?php echo $b['foto']; ?>" alt="" class="img-responsive">
                          <div class="caption text-center"><h5><strong><?php echo $b['nama']; ?></strong></h5><hr>
                            <h5><strong>Rp.<?php echo number_format($b['harga']) ?>,-</strong></h5>
                              <p><a href="index.php" class="btn btn-danger" role="button">BELI SEKARANG</a></p>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                        <!--/row-->
                  </div>
                  <!--/item-->
                  <div class="item">
                    <div class="row">
                      <?php $brg=mysql_query("SELECT * FROM produk WHERE keterangan='Promo' AND active='0'"); ?>
                      <?php while($b=mysql_fetch_array($brg)){ ?>
                      <div class="col-sm-3">
                        <div class="produk"><img src="foto/<?php echo $b['foto']; ?>" alt="" class="img-responsive">
                          <div class="caption text-center"><h5><strong><?php echo $b['nama']; ?></strong></h5><hr>
                            <h5><strong>Rp.<?php echo number_format($b['harga']) ?>,-</strong></h5>
                            <p><a href="index.php" class="btn btn-danger" role="button">BELI SEKARANG</a></p> 
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                    <!--/row-->
                  </div>
                  <!--/item-->
                </div>
              </div>
              <!--/myCarousel-->
            </div>
            <!--/well-->
          </div>
        </div>
      </div>

      <div class="container">
        <div class="well well-small">
          <div class="row">
            <div class="col-sm-10">
              <h3> HOT TRENDING </h3>
            </div>
            <div class="col-sm-2 text-right">
              <a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true" style="font-size:30px; color:#4B0082"></span>
              </a>
              <a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true" style="font-size:30px; color:#4B0082"></span>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="well">
              <div id="Carousel" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row">
                      <?php $brg=mysql_query("SELECT * FROM produk WHERE keterangan='Trending' AND active='1'"); ?>
                      <?php while($b=mysql_fetch_array($brg)){ ?>
                      <div class="col-sm-3">
                        <div class="produk"><img src="foto/<?php echo $b['foto']; ?>" alt="" class="img-responsive">
                          <div class="caption text-center"><h5><strong><?php echo $b['nama']; ?></strong></h5><hr>
                            <h5><strong>Rp.<?php echo number_format($b['harga']) ?>,-</strong></h5>
                              <p><a href="index.php" class="btn btn-danger" role="button">BELI SEKARANG</a></p>
                          </div>
                        </div>
                      </div>
                      <?php } ?>  
                    </div>
                        <!--/row-->
                  </div>            
                  <!--/item-->
                  <div class="item">
                    <div class="row">
                      <?php $brg=mysql_query("SELECT * FROM produk WHERE keterangan='Trending' AND active='0'"); ?>
                      <?php while($b=mysql_fetch_array($brg)){ ?>
                      <div class="col-sm-3">
                        <div class="produk"><img src="foto/<?php echo $b['foto']; ?>" alt="" class="img-responsive">
                          <div class="caption text-center"><h5><strong><?php echo $b['nama']; ?></strong></h5><hr>
                            <h5><strong>Rp.<?php echo number_format($b['harga']) ?>,-</strong></h5>
                              <p><a href="index.php" class="btn btn-danger" role="button">BELI SEKARANG</a></p>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                    <!--/row-->
                  </div>
                  <!--/item-->
                </div>
              </div>
              <!--/myCarousel-->
            </div>
            <!--/well-->
          </div>
        </div>
      </div>     

    

    <section id="about">
        <div class="container">
            <div class="row mb">
                <div class="alert alert-success text-center" role="alert"><h2>Tentang Kami</h2></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="img/about.jpg" class="img-responsive">
                </div>
                <div class="col-sm-8 text-justify">
                    <h3>Tentang Friendly Computer</h3>
                    <p>
                        Menjawab kebutuhan dunia teknologi informasi sekarang ini, Friendly Computer hadir untuk memberikan permintaan akan kualitas, ketahanan, kecepatan dan kenyamanan di bidang teknologi informasi sekarang ini. <br>

                        Kinerja yang baik telah kami lakukan sejak tahun 1995 menjadikan kami dipercaya oleh puluhan produsen peralatan teknologi informasi sebagai partner dalam pemasarannya. Kepercayaan mereka telah mendorong kami untuk melayani lebih baik. Dari tahun ke tahun berbagai pengalaman dan prestasi telah kami raih, sehingga kami selalu berupaya untuk memberikan yang terbaik.<br>

                        Kini, saatnya Anda mempercayai kami sebagai partner yang tepat dalam memenuhi kebutuhan pelanggan dalam dunia teknologi informasi. 
                    </p>
                </div>
            </div> 
            <hr>
            <div class="row">
                <div class="col-sm-8 text-justify">
                    <h3>Visi dan Misi</h3>
                    <p>
                        Perkembangan teknologi yang semakin cepat berkembang secara tidak langsung akan berbanding lurus dengan meningkatnya kebutuhan masyarakat Indonesia akan perangkat pendukung untuk beraktivitas dengan teknologi di era yang serba digital ini. Membantu untuk memberikan solusi terbaik bagi kebutuhan pelanggan merupakan prioritas dan visi utama dari mengapa didirikannya Friendly Computer, juga untuk ikut serta berpartisipasi dalam mendukung kemajuan teknologi di Indonesia. <br>

                        Misi kami adalah Menyediakan berbagai produk teknologi informasi yang bermutu dan memberikan layanan purna jual serta service agar sesuai dengan kebutuhan Pelanggan dan dapat memuaskan Pelanggan
                    </p> 
                </div>
                <div class="col-sm-4">
                    <img src="img/logo.png" class="img-responsive">
                </div>
            </div>
          </div>
    </section><br><br>

<?php  
include 'footer.php';
?>