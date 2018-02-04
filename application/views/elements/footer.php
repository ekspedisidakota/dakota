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

<script type="text/javascript">
    $(document).ready(function(){
        $(".btnPrint").printPage();
    })
</script>


</body>
</html>