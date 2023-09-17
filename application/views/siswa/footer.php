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
 <b>SMKN 2 CIBINONG</b> &copy; <?php echo date('Y'); ?>. <a href="#" class="navbar-link"></a>
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

  <script type="text/javascript">
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  };

  $('#pay-button').click(function (event) {
    event.preventDefault();
    $(this).attr("disabled", "disabled");

    var nama = $('#nama').val();
    var nisn = $('#nisn').val();

  $.ajax({
    type: 'POST',
    url: '<?=site_url()?>/snap/token',
    data: {
      nama: nama,
      nisn: nisn
    },
    cache: false,

    success: function(data) {
      //location = data;

      console.log('token = '+data);
      
      var resultType = document.getElementById('result-type');
      var resultData = document.getElementById('result-data');

      function changeResult(type,data){
        $("#result-type").val(type);
        $("#result-data").val(JSON.stringify(data));
        //resultType.innerHTML = type;
        //resultData.innerHTML = JSON.stringify(data);
      }

      snap.pay(data, {
        
        onSuccess: function(result){
          changeResult('success', result);
          console.log(result.status_message);
          console.log(result);
          $("#payment-form").submit();
        },
        onPending: function(result){
          changeResult('pending', result);
          console.log(result.status_message);
          $("#payment-form").submit();
        },
        onError: function(result){
          changeResult('error', result);
          console.log(result.status_message);
          $("#payment-form").submit();
        }
      });
    }
  });
});
  
  </script>
</body>
</html>
