
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"> Pembayaran </h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
          </div>


        </div>
        <div class="table-responsive">
        <table class="table datatable-basic table-bordered" width="100%" id="datatables">
        <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Order ID</th>
              <th>Nama</th>
              <th>NISN</th>
              <th>Total Bayar</th>
              <th>Payment Type</th>
              <th>Bank</th>
              <th>VA Number</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($midtrans as $trans) {?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $trans->order_id; ?></td>
                  <td><?= $trans->nama_lengkap; ?></td>
                  <td><?= $trans->nisn; ?></td>
                  <td><?= $trans->gross_amount; ?></td>
                  <td><?= $trans->payment_type; ?></td>
                  <td><?= $trans->bank; ?></td>
                  <td><?= $trans->va_numbers; ?></td>
                                <?php 
              if ($trans->status_code === '200') {
                echo "<td><button class='btn btn-primary btn-sm'>Sudah Bayar</td>";
              } else {
                echo "<td><button class='btn btn-warning btn-sm'>Pending</td>";
              }
?>
                    <?php } ?>
                  </td>
                </tr>
              <?php
               ?>
          </tbody>
        </table>
        </div>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->

