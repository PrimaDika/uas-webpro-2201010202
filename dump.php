<?php include "proces/dbcon.php";
$sql = "SELECT * FROM `peminjaman` WHERE kd_peminjaman = '" . $_GET['kd_peminjaman'] . "'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
?>
 
    <div class="modal fade" id="formModal1" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel">Update Data Peminjaman</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formPeminjamanUpdate" method="post" action="proces/proces-update.php" >
        <div class="modal-body">
          <div class="form-group row">
            <label for="firstName" class="col-sm-6 col-form-label">
              Kode Peminjaman
            </label>
            <div class="col-sm-6">
              <input type="text" value="<?php echo $data['kd_peminjaman'] ?>" name="kd_peminjaman" class="form-control" id="firstName" placeholder="PJ-00" readonly required>
            </div>
          </div>
          <div class="form-group row">
            <label for="lastName" class="col-sm-6 col-form-label">
              Tanggal Mulai
            </label>
            <div class="col-sm-6">
              <input type="date" value="<?php echo $data['starting_date'] ?>" name="tanggal_mulai" class="form-control" id="lastName" placeholder="Doe" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="lastName" class="col-sm-6 col-form-label">
              Tanggal Akhir
            </label>
            <div class="col-sm-6">
              <input type="date" value="<?php echo $data['end_date'] ?>" name="tanggal_akhir" class="form-control" id="lastName" placeholder="Doe" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-6 col-form-label">
              Pilih Nama Mahasiswa</label>
            <div class="col-sm-6">
              <select class="form-control" id="awesomeness" name="mahasiswa"  required>
                <option selected disabled value="">Pilih Mahasiswa</option>
                <?php
                    $sql = "SELECT * FROM mahasiswa";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?php echo $row['nim'] ?>"><?php echo $row['nama'] ?></option>
                <?php
                    }
                ?>

                 <?php
                    }
                ?>
              </select>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-6 col-form-label">
              Pilih Nama Buku</label>
            <div class="col-sm-6">
              <select class="form-control" id="awesomeness" name="buku"  required>
                <option selected disabled value="">Pilih Buku</option>
                <?php
                    $sql = "SELECT * FROM buku";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?php echo $row['id_buku'] ?>"><?php echo $row['nama_buku'] ?></option>
                <?php
                    }
                ?>

                 <?php
                    }
                ?>
              </select>
            </div>
          </div>
          <div class="form-check">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" onclick="AlertUpdate()" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>