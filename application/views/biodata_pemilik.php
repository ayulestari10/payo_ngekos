<?php require_once('template/header.php'); ?>

<div class="container">
  <h1>Biodata Pemilik Kosan</h1>
    <div class="biodata_pemilik">
      <form>
        <div class="form-group">
          <label for="nama">Nama :</label>
          <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat :</label>
          <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="" required>
        </div>
        <div class="form-group">
          <label for="cp">CP/No.HP :</label>
          <input type="text" class="form-control" id="cp" placeholder="Masukkan CP/No.HP">
        </div>
      </form>
    </div>
    <h3>INPUT DATA KOSAN</h3>
    <div class="biodata_pemilik">
      <form class="" action="#" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="upload">Upload Foto</label>
      		<input type="file" class="form-control" id="upload" name="" required>
        </div>
        <div class="form-group">
          <label for="harga">Harga Sewa/ Tahun :</label>
          <input type="text" class="form-control" id="harga" placeholder="Harga Sewa/ Tahun" name="" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat Kosan :</label>
          <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="" required>
        </div>
        <div class="form-group">
          <label for="alamat">Sifat Kosan :</label>
          <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="" required>
        </div>
        <div class="form-group">
          <label for="cp">CP/No.HP :</label>
          <input type="text" class="form-control" id="cp" placeholder="Masukkan CP/No.HP">
        </div>
        <div class="form-group">
          <label for="stok">Stok Kosan :</label>
          <input type="text" class="form-control" id="stok" placeholder="Jumlah Stok">
        </div>
        <div class="form-group">
          <label for="fasilitas">Fasilitas :</label>
          <textarea class="form-control" rows="5" id="fasilitas" placeholder="Masukkan Fasilitas" name="" required></textarea>
        </div>
        <button type="submit" class="btn btn-info" name="">Simpan</button>
      </form>
    </div>
</div>

<?php require_once('template/footer.php'); ?>
