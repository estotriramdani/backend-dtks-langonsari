<?php 
$title = "Tambah ART";
include_once 'template/navbar.php';
include_once 'config/koneksi.php';
?>

<style>
.showForm {
  display: none;
}
</style>

<div class="container mt-3">
 <h3 class="mb-4">Tambah ART</h3>

  <!-- Tampilkan Pesan Sukses  -->
  <?php if ($_SESSION['message'] == true){ ?>
    <div class="alert alert-success" role="alert">
      ART Baru Berhasil Ditambahkan
    </div>
  <?php } ?>
  
  <!-- Tampilkan Pesan Error  -->
  <?php if ($_SESSION['error'] == true){ ?>
    <div class="alert alert-danger" role="alert">
      NIK Sudah terdaftar
    </div>
  <?php } ?>

  <!-- Set message ke false lagi -->
  <?php $_SESSION['message'] = false; ?>
  <?php $_SESSION['error'] = false; ?>

 <form action="action/art-action.php">
  <div class="form-group row">
    <label for="idbdt" class="col-sm-3 col-form-label">ID DTKS</label>
    <div class="col-sm-9">
      <select name="idbdt" id="idbdt" class="form-control" required>
        <option value="">Cari ID DTKS atau Nama KRT</option>
        <?php  
          $data = mysqli_query($koneksi, "SELECT * FROM dtks");
          while ($d = mysqli_fetch_array($data)) {
        ?>
        <option aria-required value="<?= $d['id_dtks']; ?>"><?= $d['id_dtks']; ?> | KRT: <?= $d['nama_krt']; ?></option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-3 col-form-label">nama</label>
    <div class="col-sm-9">
      <input required type="text" class="form-control" id="nama" name="nama">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-9">
      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
        <option value="">Pilih Jenis Kelamin</option>
        <option aria-required value="1">Laki-laki</option>
        <option aria-required value="2">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="tmp_lahir" class="col-sm-3 col-form-label">tmp_lahir</label>
    <div class="col-sm-9">
      <input required type="text" class="form-control" id="tmp_lahir" name="tmp_lahir">
    </div>
  </div>

  <div class="form-group row">
    <label for="tgl_lahir" class="col-sm-3 col-form-label">tgl_lahir</label>
    <div class="col-sm-9">
      <input required type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
    </div>
  </div>

  <div class="form-group row">
    <label for="hub_krt" class="col-sm-3 col-form-label">Hubungan dengan Kepala RT</label>
    <div class="col-sm-9">
      <select name="hub_krt" id="hub_krt" class="form-control" required>
        <option value="">Pilih Jenis Kelamin</option>
        <option aria-required value="Kepala RT">Kepala RT</option>
        <option aria-required value="Istri/Suami">Istri/Suami</option>
        <option aria-required value="Anak">Anak</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="nik" class="col-sm-3 col-form-label">nik</label>
    <div class="col-sm-9">
      <input required type="text" class="form-control" id="nik" name="nik">
    </div>
  </div>

  <div class="form-group row">
    <label for="no_kk" class="col-sm-3 col-form-label">no_kk</label>
    <div class="col-sm-9">
      <input required type="text" class="form-control" id="no_kk" name="no_kk">
    </div>
  </div>

  <div class="form-group row">
    <label for="namagadis_ibukandung" class="col-sm-3 col-form-label">namagadis_ibukandung</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="namagadis_ibukandung" name="namagadis_ibukandung">
    </div>
  </div>

  <div class="form-group row">
    <label for="psnoka_bpjs" class="col-sm-3 col-form-label">psnoka_bpjs</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="psnoka_bpjs" name="psnoka_bpjs">
    </div>
  </div>

  <button type="submit" class="btn btn-info">Submit</button>

 </form>


</div>


<script type="text/javascript">
 $(document).ready(function() {
     $('#idbdt').select2();
 });
</script>

<script src="script/art.js"></script>
<?php 

include_once 'template/footer.php'
?>