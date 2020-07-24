<?php  
include 'header.php';
?>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="nav-menu">
                  <ul class="nav navbar-nav menu-top">
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="laptop.php">Laptop</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aksesoris Komputer <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#keyboard" class="page-scroll">Keyboard</a></li>
                        <li><a href="#mouse" class="page-scroll">Mouse</a></li>
                        <li><a href="#flashdisk" class="page-scroll">Flashdisk</a></li>
                        <li><a href="#review" class="page-scroll">Review Produk</a></li>
                      </ul>
                    </li>
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

    <div class="container">
      <section id="keyboard">
        <div class="row mb item">
            <div class="alert alert-success text-center" role="alert"><h2>KEYBOARD</h2></div>
        </div>

        <div class="row" style="background-color: #FAFAD2;">
          <?php $brg=mysql_query("SELECT * FROM produk WHERE jenis='Keyboard'"); ?>
          <?php while($b=mysql_fetch_array($brg)){ ?>
          <div class="col-sm-3">
            <div class="produk">
              <img src="foto/<?php echo $b['foto']; ?>" alt="" class="img-responsive">
                <div class="caption text-center">
                  <h5><strong><?php echo $b['nama']; ?></strong></h5><hr>
                  <h5><strong>Rp.<?php echo number_format($b['harga']) ?>,-</strong></h5>
                <p><a href="" class="btn btn-danger" role="button">BELI SEKARANG</a></p>
              </div>
            </div>
          </div> 
          <?php } ?>
        </div>
      </section>
        
      <section id="mouse">
        <div class="row mb item">
            <div class="alert alert-success text-center" role="alert"><h2>MOUSE</h2></div>
        </div>

        <div class="row" style="background-color: #E0FFFF;">
          <?php $brg=mysql_query("SELECT * FROM produk WHERE jenis='Mouse'"); ?>
          <?php while($b=mysql_fetch_array($brg)){ ?>
          <div class="col-sm-3">
            <div class="produk">
              <img src="foto/<?php echo $b['foto']; ?>" alt="" class="img-responsive">
                <div class="caption text-center">
                  <h5><strong><?php echo $b['nama']; ?></strong></h5><hr>
                  <h5><strong>Rp.<?php echo number_format($b['harga']) ?>,-</strong></h5>
                <p><a href="" class="btn btn-danger" role="button">BELI SEKARANG</a></p> 
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </section>
        
      <section id="flashdisk">
        <div class="row mb item">
            <div class="alert alert-success text-center" role="alert"><h2>FLASHDISK</h2></div>
        </div>

        <div class="row" style="background-color: #FAFAD2;">
          <?php $brg=mysql_query("SELECT * FROM produk WHERE jenis='Flashdisk'"); ?>
          <?php while($b=mysql_fetch_array($brg)){ ?>
          <div class="col-sm-3">
            <div class="produk">
              <img src="foto/<?php echo $b['foto']; ?>" alt="" class="img-responsive">
                <div class="caption text-center">
                  <h5><strong><?php echo $b['nama']; ?></strong></h5><hr>
                  <h5><strong>Rp.<?php echo number_format($b['harga']) ?>,-</strong></h5>
                <p><a href="" class="btn btn-danger" role="button">BELI SEKARANG</a></p> 
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </section>
      <br>
      <section id="review">
        <div class="row">
            <div class="alert alert-success text-center" role="alert"><h2>REVIEW PRODUK</h2></div>
        </div>

        <div class="row review">
          <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/SvcFLivKeZw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/IRoDdjh5Q4w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div> 
          </div>
          <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/Fl2QcdXf5i4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div> 
          </div>
        </div>
      </section>    
    </div>>

    <br><br>
<?php  
include 'footer.php';
?>
