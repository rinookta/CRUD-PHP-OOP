<!-- Essential javascripts for application to work-->
    <script src="<?php echo $base; ?>template/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $base; ?>template/js/popper.min.js"></script>
    <script src="<?php echo $base; ?>template/js/bootstrap.min.js"></script>
    <script src="<?php echo $base; ?>template/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo $base; ?>template/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $('.data').DataTable();
        $('.demoDate').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
          });
    </script>
     <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/sweetalert.min.js"></script>
  </body>
</html>