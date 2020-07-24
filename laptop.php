<?php  
include 'header.php';
?>

            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav-menu">
                  <ul class="nav navbar-nav menu-top">
                    <li><a href="index.php">Beranda</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laptop <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#acer" class="page-scroll">Acer</a></li>
                        <li><a href="#asus" class="page-scroll">Asus</a></li>
                        <li><a href="#hp" class="page-scroll">HP</a></li>
                        <li><a href="#lenovo" class="page-scroll">Lenovo</a></li>
                        <li><a href="#review" class="page-scroll">Review Produk</a></li>
                      </ul>
                    </li>
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
      </div><!-- /.container-fluid -->
    </nav>

  <div class="container">
    <section id="acer">
      <div class="row mb item">
          <div class="alert alert-success text-center" role="alert"><h2>LAPTOP ACER</h2></div>
      </div>

      <div class="row" style="background-color: #E0FFFF;">
        <?php $brg=mysql_query("SELECT * FROM produk WHERE merk='Acer'"); ?>
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
      
    <section id="asus">
      <div class="row mb item">
          <div class="alert alert-success text-center" role="alert"><h2>LAPTOP ASUS</h2></div>
      </div>

      <div class="row" style="background-color: #FAFAD2;">
        <?php $brg=mysql_query("SELECT * FROM produk WHERE merk='Asus'"); ?>
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

    <section id="hp">
      <div class="row mb item">
          <div class="alert alert-success text-center" role="alert"><h2>LAPTOP HAWLETT PACKARD (HP)</h2></div>
      </div>

      <div class="row" style="background-color: #E0FFFF;">
        <?php $brg=mysql_query("SELECT * FROM produk WHERE merk='HP'"); ?>
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

    <section id="lenovo">
      <div class="row mb item">
          <div class="alert alert-success text-center" role="alert"><h2>LAPTOP LENOVO</h2></div>
      </div>

      <div class="row" style="background-color: #FAFAD2;">
        <?php $brg=mysql_query("SELECT * FROM produk WHERE merk='Lenovo'"); ?>
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
  </div>

    <br>
    <section id="review">
      <div class="row">
          <div class="alert alert-success text-center" role="alert"><h2>REVIEW PRODUK</h2></div>
      </div>

      <div class="row review">
        <div class="col-sm-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jVpOw79J5eE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/OhWqZPWjZ0I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div> 
        </div>
        <div class="col-sm-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Eqfaz-oyW3g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div> 
        </div>
      </div>
    </section>    
  </div>
</section>

<br><br>
<?php  
include 'footer.php';
?>