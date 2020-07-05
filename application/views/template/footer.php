
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Development By &copy; 2020 <a href="https://hosterweb.co.id">HOSTERWEB INDONESIA</a>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- page script -->
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
    // Kita sembunyikan dulu untuk loadingnya
    $("#prov").change(function(){ // Ketika user mengganti atau memilih data provinsi
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("index.php/C_Setting/get_kota"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_provinsi : $("#prov").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
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
  function Angkasaja(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
    return true;
  }
</script>
<script type='text/javascript'>
    var error = 1; // nilai default untuk error 1
 
    function cek_username(){
        $("#pesan").hide();
 
        var username = $("#username").val();
 
        if(username != ""){
            $.ajax({
                url: "<?php echo site_url() . '/C_User/cek_user'; ?>", //arahkan pada proses_tambah di controller member
                data: 'user='+username,
                type: "POST",
                success: function(msg){
                    if(msg==1){
                        $("#pesan").css("color","#fc5d32");
                        $("#username").css("border-color","#fc5d32");
                        $("#pesan").html("Username sudah digunakan !");
 
                        error = 1;
                    }else{
                        $("#pesan").css("color","#59c113");
                        $("#username").css("border-color","#59c113");
                        $("#pesan").html("");
                        error = 0;
                    }
 
                    $("#pesan").fadeIn(1000);
                }
            });
        }       
         
    }
     
</script>

<script type='text/javascript'>
    var error = 1; // nilai default untuk error 1
 
    function cek_gudang(){
        $("#pesan").hide();
 
        var gudang = $("#gudang").val();
 
        if(gudang != ""){
            $.ajax({
                url: "<?php echo site_url() . '/C_Gudang/cek_gudang'; ?>", //arahkan pada proses_tambah di controller member
                data: 'gudang='+gudang,
                type: "POST",
                success: function(msg){
                    if(msg==1){
                        $("#pesan").css("color","#fc5d32");
                        $("#gudang").css("border-color","#fc5d32");
                        $("#pesan").html("Gudang sudah digunakan !");
 
                        error = 1;
                    }else{
                        $("#pesan").css("color","#59c113");
                        $("#gudang").css("border-color","#59c113");
                        $("#pesan").html("");
                        error = 0;
                    }
 
                    $("#pesan").fadeIn(1000);
                }
            });
        }       
         
    }
     
</script>

<script type="text/javascript">
function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>
<!-- 
<script>
 $(document).ready(function() {
    // Kondisi saat Form di-load
    if ($("#format1").val() == "huruf") {
        $('#texthuruf').removeAttr('disabled');
    } else {
        $('#texthuruf').attr('disabled','disabled'); 
    }

    // Kondisi saat ComboBox (Select Option) dipilih nilainya
    $("#format1").change(function() {
        if (this.value != "huruf") {
            $('#texthuruf').attr('disabled','disabled'); 
            $('#texthuruf').val('');
        } else {
            $('#texthuruf').removeAttr('disabled');
            $('#texthuruf').focus();
        } 
    });
});
  </script> -->

<script>
 $(document).ready(function() {
    // Kondisi saat Form di-load
      
      document.getElementById('texthuruf1').style.visibility='hidden';
      document.getElementById('texthuruf2').style.visibility='hidden';
      document.getElementById('texthuruf3').style.visibility='hidden';
    // Kondisi saat ComboBox (Select Option) dipilih nilainya
    $("#format1").change(function() {
        if (this.value != "huruf") {
            document.getElementById('texthuruf1').style.visibility='hidden';
            $('#texthuruf1').val('');
        } else {
            document.getElementById('texthuruf1').style.visibility='visible';
            $('#texthuruf1').focus();
        } 
    });
    $("#format2").change(function() {
        if (this.value != "huruf") {
            document.getElementById('texthuruf2').style.visibility='hidden';
            $('#texthuruf2').val('');
        } else {
            document.getElementById('texthuruf2').style.visibility='visible';
            $('#texthuruf2').focus();
        } 
    });
    $("#format3").change(function() {
        if (this.value != "huruf") {
            document.getElementById('texthuruf3').style.visibility='hidden';
            $('#texthuruf3').val('');
        } else {
            document.getElementById('texthuruf3').style.visibility='visible';
            $('#texthuruf2').focus();
        } 
    });

    $("#penghubung").change(function() {
       // var format1 = $("#format1").value();
       // document.getElementById('final').value = format1;
      var a = document.getElementById('format1').value;
      var b = document.getElementById('format2').value;
      var c = document.getElementById('format3').value;
      var d = document.getElementById('penghubung').value;
      var e = document.getElementById('texthuruf1').value;
      var f = document.getElementById('texthuruf2').value;
      var g = document.getElementById('texthuruf2').value;
      // document.getElementById('kodefinal').innerHTML = a;
      if (a == "huruf"){
        var a = e;
      } 
      if (b == "huruf"){
        var b = f;
      } 
      if(c == "huruf"){
        var c = g;
      }
      document.getElementById('final').value = a+d+b+d+c;
    });
});
  </script>
</body>
</html>