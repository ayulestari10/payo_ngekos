<section id="dashboard" class="bg-light-gray">
  <?php $i=0; while($i < 6){ ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 dashboard-item">
                <a href="detail.php" class="dashboard-link">
                  <div class="dashboard-hover">
                      <div class="dashboard-hover-content">
                          <h3>DETAIL INFORMASI</h3>
                      </div>
                  </div>
                    <img src="img/kosan/kosan (3).jpg" class="img-responsive" alt="katek koneksi">
                </a>
                <div class="portfolio-caption">
                    <table class="table">
                      <tr>
                        <td>Nama Kosan</td>
                        <td>:</td>
                        <td> Melati</td>
                      </tr>
                      <tr>
                        <td>Harga Sewa</td>
                        <td>:</td>
                        <td> 6.000.000</td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td> Gang Buntu</td>
                      </tr>
                      <tr>
                        <td>Sifat Kosan</td>
                        <td>:</td>
                        <td>Cewek</td>
                      </tr>
                      <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td>9</td>
                      </tr>
                    </table>
                </div> <!-- portfolio-caption -->
                <a href="detail.php" class="btn btn-default btn-md">Detail Informasi</a>
            </div>  <!-- end col-md-4 col-sm-6 portfolio-item -->
        </div>  <!-- end row -->
    </div> <!-- end container -->
    <?php $i++; } ?>
</section>
