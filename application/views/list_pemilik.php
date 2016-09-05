<?php require_once('template/header.php'); ?>
<div class="container">
  <h1>DAFTAR PRMILIK KOSAN</h1>
  <div class="">
    <a href="list_booking.php" class="btn btn-warning btn-sm">List Booking</a>
    <a href="list_pembeli.php" class="btn btn-info btn-sm">List Pembeli</a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Kosan</th>
        <th>Alamat</th>
        <th>CP</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <?php $a=1; while ($a <= 10){ ?>
      <tbody>
        <tr>
          <td><?= $a ?></td>
          <td>Moh. Ali</td>
          <td>Melati</td>
          <td>Gg. Buntu</td>
          <td>085763182045</td>
          <td>
            <a href="hapus.php?nim=<?php ?>" class="btn btn-danger btn-sm">Hapus List</a>
          </td>
        </tr>
      </tbody>
    <?php $a++; } ?>

  </table>
</div>
<?php require_once('template/footer.php'); ?>
