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
                     type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= $siswa->nama_lengkap?>"/>
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lengkap') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nis">Nis</label>
                    <input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
                     type="text" name="nis" min="0" placeholder="NIS" value="<?= $siswa->nis?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('nis') ?>
                    </div>
                </div>


                <div class="form-group">
                    <label for="nisn">Nisn</label>
                    <input class="form-control <?= form_error('nisn') ? 'is-invalid':'' ?>"
                     type="text" name="nisn" placeholder="NISN" value="<?= $siswa->nisn?>"/>
                    <div class="invalid-feedback">
                        <?= form_error('nisn') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="no_hp_siswa">Nomor Hp</label>
                    <input class="form-control <?= form_error('no_hp_siswa') ? 'is-invalid':'' ?>"
                     type="text" name="no_hp_siswa" placeholder="Nomor HP" value="<?= $siswa->no_hp_siswa?>"/>
                    <div class="invalid-feedback">
                        <?= form_error('no_hp_siswa') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input class="form-control <?= form_error('jurusan') ? 'is-invalid':'' ?>"
                     type="text" name="jurusan" placeholder="Jurusan" value="<?= $siswa->jurusan?>"/>
                    <div class="invalid-feedback">
                        <?= form_error('jurusan') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input class="form-control <?= form_error('nik') ? 'is-invalid':'' ?>"
                     type="text" name="nik" placeholder="nik..." value="<?= $siswa->nik?>"/>
                    <div class="invalid-feedback">
                        <?= form_error('nik') ?>
                    </div>
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

        </div>



    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->