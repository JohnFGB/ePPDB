<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

  <?php if ($this->session->flashdata('hapus')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('hapus'); ?>
    </div>
    <?php endif; ?>
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"> Data Verifikasi</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                    <br>
                    <a href="panel_admin/edit_materi" class="btn btn-primary">Edit Materi & Jadwal Ujian</a>
                    <div class="col-md-3" style="float:right;margin-right:25px;">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="icon-calendar22"></i></div>
                        <select class="form-control" name="thn" onchange="thn()">
                          <?php for ($i=date('Y'); $i >=2018 ; $i--) {?>
                            <option value="<?php echo $i; ?>" <?php if($v_thn==$i){echo "selected";} ?>>Tahun <?php echo $i; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>

        </div>
        <div class="table-responsive">
        <table class="table datatable-basic table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>No. Pendaftaran</th>
              <th>NIS</th>
              <th>NISN</th>
              <th>Nama Lengkap</th>
              <th>Jurusan</th>
              <th>Status Verifikasi</th>
              <th><center>Aksi</center></th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_siswa->result() as $baris) {?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->no_pendaftaran; ?></td>
                  <td><?php echo $baris->nis; ?></td>
                  <td><?php echo $baris->nisn; ?></td>
                  <td><?php echo $baris->nama_lengkap; ?></td>
                  <td><?php echo $baris->jurusan; ?></td>
                  <td align="center">
                    <?php if ($baris->status_verifikasi == 1) {?>
                      <label class="label label-success">Terverifikasi</label>
                    <?php }else{ ?>
                      <label class="label label-warning">Belum verifikasi</label>
                    <?php } ?>
                  </td>
                  <td >
                    <a href="panel_admin/verifikasi_cetak/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-default btn-xs mb-5"  title="Cetak Verifikasi" target="_blank"><i class="icon-printer2"></i> Print</a>
                    <br>
                    <?php if ($baris->status_verifikasi == 0) {?>
                      <a href="panel_admin/verifikasi/cek/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-success btn-xs mb-5" title="Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-checkmark4"></i> Verifikasi</a>
                    <?php }else{ ?>
                      <a href="panel_admin/verifikasi/cek/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-warning btn-xs mb-5" title="Batal Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-cross3"></i> Batal Verifikasi</a>
                    <?php } ?> <br>
                    <?php if ($baris->status_verifikasi == 0) {?>
                      <a href="panel_admin/edit/<?php echo $baris->id_siswa; ?>" class="btn btn-info btn-xs mb-5" title="Verifikasi"><i class="icon-pencil"></i> Edit</a>
                    <?php }else{ ?>
                      <a href="panel_admin/edit/<?php echo $baris->id_siswa; ?>" class="btn btn-info btn-xs mb-5" title="Batal Verifikasi"><i class="icon-pencil"></i> Edit</a>
                    <?php } ?> <br>
                    <?php if ($baris->status_verifikasi == 0) {?>
                      <a onclick="return deleteConfirm('panel_admin/delete/<?php echo $baris->id_siswa; ?>')"  class="btn btn-danger btn-xs mb-5"><i class="icon-trash"></i> Delete</a>
                    <?php }else{ ?> 
                      <a onclick="return deleteConfirm('panel_admin/delete/<?php echo $baris->id_siswa; ?>')"  class="btn btn-danger btn-xs mb-5"><i class="icon-trash"></i> Delete</a>
                    <?php } ?><br>
                    <?php if ($baris->status_verifikasi == 0) {?>
                      <a href="panel_admin/detail/<?php echo $baris->id_siswa; ?>" class="btn btn-info btn-xs mb-5" title="Verifikasi"><i class="icon-book"></i> Cek</a>
                    <?php }else{ ?>
                      <a href="panel_admin/detail/<?php echo $baris->id_siswa; ?>" class="btn btn-info btn-xs mb-5" title="Batal Verifikasi"><i class="icon-book"></i> Cek</a>
                    <?php } ?>
                  </td>
                </tr>
              <?php
              } ?>
          </tbody>
        </table>
        </div>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
<!-- <a href="panel_admin/delete/<?= $baris->id_siswa; ?>" class="btn btn-danger btn-xs"  onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a> -->

    <!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function thn()
  {
    var thn = $('[name="thn"]').val();
      window.location = "panel_admin/verifikasi/thn/"+thn;
  }

  $('[name="thn"]').select2({
      placeholder: "- Tahun -"
  });

function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}


</script>
