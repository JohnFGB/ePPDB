<?php
  $cek    = $user->row();
  $id_user = $cek->id_siswa;
  $nama    = $cek->nama_lengkap;
  $ceks = $this->session->userdata('id_siswa');
  $this->db->get_where('tbl_siswa', "id_siswa='$ceks'");
  $tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat bg-info">
        <div class="panel-heading">
          <h3 class="panel-title">
            <center>Halo <?php echo ucwords($nama); ?>, Silahkan lakukan penginputan gambar Ijazah dan juga Rekap Nilai</center>
          </h3>
        </div>
      </div>
      <div class="panel panel-flat bg-info">
      <div id="content-wrapper">

<div class="container-fluid">

    

    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('gagal')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('gagal'); ?>
    </div>
    <?php endif; ?>


    <div class="card mb-3">

        <br>
        <div class="card-body">

            <?= form_open_multipart('panel_siswa/input_data_save'); ?>
            <input type="hidden" name="id_siswa" value="<?= $cek->id_siswa?>" />
            <input type="hidden" name="no_pendaftaran" value="<?=$cek->no_pendaftaran?>" />

                <div class="form-group">
                    <label for="ijazah" style="font-size: 20px;">Ijazah</label>
                    <input class="form-control <?= form_error('ijazah') ? 'is-invalid':'' ?>"
                     type="file" name="ijazah">
                    <div class="invalid-feedback">
                        <?php echo form_error('ijazah') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="rekap_nilai" style="font-size: 20px;">Rekap Nilai</label>
                    <input class="form-control <?= form_error('rekap_nilai') ? 'is-invalid':'' ?>"
                     type="file" name="rekap_nilai">
                    <div class="invalid-feedback">
                        <?php echo form_error('rekap_nilai') ?>
                    </div>
                </div>
                <center><input class="btn btn-success" type="submit" name="btn" value="Save" /></center>
            <?= form_close(); ?>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <!-- /dashboard content -->
