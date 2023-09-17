<div id="content-wrapper">

<div class="container-fluid">

    

    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>

    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('panel_admin/verifikasi') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
        <br>
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data" >

            <input type="hidden" name="id_siswa" value="<?= $siswa->id_siswa?>" />
            <input type="hidden" name="no_pendaftaran" value="<?= $siswa->no_pendaftaran?>" />

                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input class="form-control <?= form_error('nama_lengkap') ? 'is-invalid':'' ?>"
                     type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= $siswa->nama_lengkap?>"disabled/>
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lengkap') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nis">Nis</label>
                    <input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
                     type="text" name="nis" min="0" placeholder="nis" value="<?= $siswa->nis?>" disabled/>
                    <div class="invalid-feedback">
                        <?php echo form_error('nis') ?>
                    </div>
                </div>


                <div class="form-group">
                    <label for="nisn">Nisn</label>
                    <input class="form-control <?= form_error('nisn') ? 'is-invalid':'' ?>"
                     type="text" name="nisn" placeholder="nisn..." value="<?= $siswa->nisn?>" disabled/>
                    <div class="invalid-feedback">
                        <?= form_error('nisn') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="no_hp_siswa">Nomor Hp</label>
                    <input class="form-control <?= form_error('no_hp_siswa') ? 'is-invalid':'' ?>"
                     type="text" name="no_hp_siswa" placeholder="no_hp_siswa..." value="<?= $siswa->no_hp_siswa?>" disabled/>
                    <div class="invalid-feedback">
                        <?= form_error('no_hp_siswa') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="jurusan">Nisn</label>
                    <input class="form-control <?= form_error('jurusan') ? 'is-invalid':'' ?>"
                     type="text" name="jurusan" placeholder="jurusan..." value="<?= $siswa->jurusan?>" disabled/>
                    <div class="invalid-feedback">
                        <?= form_error('jurusan') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input class="form-control <?= form_error('nik') ? 'is-invalid':'' ?>"
                     type="text" name="nik" placeholder="nik..." value="<?= $siswa->nik?>" disabled/>
                    <div class="invalid-feedback">
                        <?= form_error('nik') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Ijazah">Ijazah</label>
                     <img src="<?= base_url('assets/foto/') . $siswa->ijazah; ?>" alt="" width="100px">
                </div>

                <div class="form-group">
                    <label for="Rekap Nilai">Rekap Nilai</label>
                     <img src="<?= base_url('assets/foto/') . $siswa->rekap_nilai; ?>" alt="" width="100px">
                </div>


            </form>

        </div>



    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->