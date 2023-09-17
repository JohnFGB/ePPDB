      </div>

    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->

</div>
<!-- /page container -->


<!-- Footer -->
<div class="navbar navbar-default navbar-fixed-bottom footer">
<ul class="nav navbar-nav visible-xs-block">
<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
</ul>

<div class="navbar-collapse collapse" id="footer">
<div class="navbar-text">
  <b>SMKN 2 CIBINONG</b> &copy; 2023. <a href="#" class="navbar-link"></a>
</div>

<!-- <div class="navbar-right">
  <ul class="nav navbar-nav">
    <li><a href="#">About</a></li>
    <li><a href="#">Terms</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</div> -->
</div>
</div>
<!-- /footer -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <script type="text/javascript">
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  };

  $(document).ready( function () {
    $('#datatables').DataTable();
} );
  </script>
</body>
</html>
