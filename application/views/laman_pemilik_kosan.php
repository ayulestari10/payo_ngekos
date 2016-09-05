<?php require_once('template/header.php'); ?>

<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">Payo Nge'kost</div>
            <div class="intro-lead-in">"daftarkan kosan kamu disini"</div>
            <a href="" class="page-scroll btn btn-xl" data-toggle="modal" data-target="#login">Login</a>
            <a href="" class="page-scroll btn btn-xl" data-toggle="modal" data-target="#daftar">Daftar</a>
        </div>
    </div>
</header>

<!-- ======================================================== -->
<!-- daftar -->
<div class="modal fade" id="daftar" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">DAFTAR</h4>
      </div>
      <div class="modal-body">
        <form class="" action="#" method="post">
          <div class="form-group">
            <label for="nama">Nama :</label>
        		<input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="pass">Password :</label>
        		<input type="password" class="form-control" id="pass" name="password" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info" name="">Daftar</button>
      </div>
    </div>

  </div>
</div>
<!-- ======================================================== -->
<!-- login -->
<div class="modal fade" id="login" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body">
        <form class="" action="#" method="post">
          <div class="form-group">
            <label for="nama">Nama :</label>
        		<input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="pass">Password :</label>
        		<input type="password" class="form-control" id="pass" name="password" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="">Login</button>
      </div>
    </div>

  </div>
</div>
<?php require_once('template/footer.php'); ?>
