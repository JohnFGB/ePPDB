<?php
  $cek    = $user->row();
  $id_user = $cek->id_siswa;
  $nama    = $cek->nama_lengkap;

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
            <center>Halo <?php echo ucwords($nama); ?>, Silahkan lakukan pembayaran untuk melanjutkan proses Penerimaan Siswa Baru SMKN 2 CIBINONG</center>
          </h3>
        </div>
      </div>
      <div class="panel panel-flat bg-info">
        <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
        <input type="hidden" name="result_type" id="result-type" value=""></div>
        <input type="hidden" name="result_data" id="result-data" value=""></div>
        <center>
          <button id="pay-button" class="btn btn-primary btn-block">Bayar!</button>
        </center>
      <!-- </form>
      <table class="table table-bordered table-striped" style="margin-top: 60px;">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Nama Lengkap</th>
            <th>NISN</th>
            <th>Gross Amount</th>
            <th>Payment Type</th>
            <th>Bank</th>
            <th>Virtual Account Number</th>
            <th>Transaction Time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          
          foreach ($midtrans as $trans) { ?>
            <tr>
              <td><?= $trans->order_id; ?></td>
              <td><?= $trans->nama_lengkap; ?></td>
              <td><?= $trans->nisn; ?></td>
              <td><?= $trans->gross_amount; ?></td>
              <td><?= $trans->payment_type; ?></td>
              <td><?= $trans->bank; ?></td>
              <td><?= $trans->va_numbers; ?></td>
              <td><?= $trans->transaction_time; ?></td>
              <?php 
              if ($trans->status_code === '200') {
                echo "<td><button class='btn btn-primary'>Sudah Bayar</td>";
              } else {
                echo "<td><button class='btn btn-warning'>Pending</td>";
              }
?>
            </tr>
          <?php } 
          
          
          ?> -->


        </tbody>
      </table>
      </div>
      </div>
    </div>
    <!-- /dashboard content -->
