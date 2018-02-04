  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017 <a href="https://alldie.co.id">Team Project</a>.</strong> By Unknown All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
  
  $("#propinsi").change(function(){ // Ketika user mengganti atau memilih data provinsi
    $("#kota").hide(); // Sembunyikan dulu combobox kota 
  
    $.ajax({
      type: "POST", // Method pengiriman data bisa dengan GET atau POST
      url: "<?php echo base_url("index.php/pelangganc/listKota"); ?>", // Isi dengan url/path file php yang dituju
      data: {propinsiid : $("#propinsi").val()}, // data yang akan dikirim ke file yang dituju
      dataType: "json",
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType("application/json;charset=UTF-8");
        }
      },
      success: function(response){ 
        $("#kota").html(response.list_kota).show();
      },
      error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
      }
    });
  });
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".btnPrint").printPage();
    })
</script>


</body>
</html>