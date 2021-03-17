
<?php 
include_once 'config/koneksi.php';

  // pagination
  // konfigurasi
  $jumlahDataPerhalaman = 10;
  $result = mysqli_query($koneksi, "SELECT * FROM dtks");
  $jumlahData = mysqli_num_rows($result);
  $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
  $halamanAktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1 );
  $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

  $query = mysqli_query($koneksi, "SELECT * FROM dtks LIMIT $awalData, $jumlahDataPerhalaman"); 

?>

<?php include_once 'template/navbar.php' ?>

    <!-- Content -->
    <div class="container mt-3">
      <!-- Form Pencarian -->
      <div class="row">
        <div class="col-sm-5 pr-0">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Masukkan NIK Kepala RT atau ID DTKS"
              name="keyword"
              id="keyword"
            />
          </div>
          <small style="position: relative; top: -15px;">Tekan enter atau klik tombol cari</small>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
            <button class="btn btn-info pr-4" id="tombol-cari"><i class="bi bi-zoom-in"></i> &nbsp; Cari</button>
          </div>
        </div>
      </div>

      <!-- Tabel Hasil Pencarian -->
      <div class="hasil-pencarian table-responsive">
        <table class="table  table-striped">
          <thead>
            <tr>
              <th scope="col">ID DTKS</th>
              <th scope="col">Alamat</th>
              <th scope="col">NIK</th>
              <th scope="col">Nama KRT</th>
              <th scope="col">Program</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="12" class="text-center">Hasil pencarian akan tampil di sini</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End tabel hasil pencarian -->

      <!-- Tabel Semua DTKS -->
      <div class="semua mt-3">
        <h4 class="mb-3">Semua Data DTKS</h4>
        <!-- Navigasi -->
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID DTKS</th>
              <th scope="col">Alamat</th>
              <th scope="col">NIK</th>
              <th scope="col">Nama KRT</th>
              <th scope="col">Jumlah Kel.</th>
              <th scope="col">Jumlah ART</th>
              <th scope="col">Perubahan </th>
              <th scope="col">Program</th>
              <th scope="col">RT</th>
              <th scope="col">RW</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach( $query as $row ) : ?>
              <tr>
                <td><?= $row['id_dtks']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['nik']; ?></td>
                <td><?= $row['nama_krt']; ?></td>
                <td><?= $row['jml_kel']; ?></td>
                <td><?= $row['jml_art']; ?></td>
                <td><?= $row['perubahan']; ?></td>
                <td><?= $row['program']; ?></td>
                <td><?= $row['rt']; ?></td>
                <td><?= $row['rw']; ?></td>
                <td><?= $row['status']; ?></td>
                <td><a href="detail.php?id=<?= $row['id_dtks']; ?>">Detail</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

        <div class="row text-center mbt-3">
    <div class="col-1">
      <?php if($halamanAktif > 1): ?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">
          <i class="bi bi-arrow-left-circle paging-button"></i>
        </a>
      <?php endif; ?>
    </div>
    <div class="col-10">
    <?php for($i = 1; $i <= $jumlahHalaman; $i++): ?>
      <?php if($i == $halamanAktif): ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: #09a129; text-decoration: underline;"><?= $i; ?></a>
      <?php else: ?>
        <a href="?halaman=<?= $i; ?>" style="color: #0a2e36"><?= $i; ?></a>
      <?php endif; ?>
    <?php endfor; ?>
    </div>
    <div class="col-1">
    <?php if($halamanAktif < $jumlahHalaman): ?>
      <a href="?halaman=<?= $halamanAktif + 1 ?>">
        <i class="bi bi-arrow-right-circle paging-button"></i>
      </a>
    <?php endif; ?>
    </div>
  </div>
      </div>
      <!-- Tabel Semua DTKS -->
    </div>
    <!-- End Content -->

    <script src="script/ajax.js"></script>
<?php include_once 'template/footer.php' ?>
