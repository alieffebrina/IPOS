
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

<script src="<?php echo base_url() ?>assets/dist/js/jquery-1.11.2.min"></script>
<script src="<?php echo base_url() ?>assets/dist/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/dist/js/terbilang.js"></script>
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
  <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#nama_toko").change(function(){ // Ketika user mengganti atau memilih data provinsi
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("index.php/C_suplier/cek_suplier"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_suplier : $("#nama_toko").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          // $("#nama_suplier").html("aaaa");
          $("#nama_suplier").html(response.list_suplier).show();
          $("#alamat").html(response.list_alamat).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
  </script>
  <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#nama_barang").change(function(){ // Ketika user mengganti atau memilih data provinsi
    // var lastRowId = $('#tabelku tr:last').attr("id");
    // var barang = new Array();
    // var jumlah = parseInt($("#jumlahform").val());
    // for (var i = 1; i <=lastRowId ; i++) {
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("index.php/C_barang/ceksatuan"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_barang : $("#nama_barang").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#tampilharga").html(response.list_harga).show();
          $("#tampilsatuan").html(response.list_satuan).show();
          $("#namashow").html(response.list_namabarang).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    // }
    });
  });
  </script>
<script type="text/javascript">
  function startCalculate(){
    interval=setInterval("Calculate()",10);

  }

  function Calculate(){
      var a = document.getElementById('harga').value;
      var b = document.getElementById('qtt').value;
      var c = document.getElementById('diskon').value;
      var bilangan = (a*b)-c;
      var number_string = bilangan.toString(),
        sisa  = number_string.length % 3,
        rupiah  = number_string.substr(0, sisa),
        ribuan  = number_string.substr(sisa).match(/\d{3}/g);
          
      if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }

      document.getElementById('subtotal').value = formatRupiah(rupiah) ;
      document.getElementById('subtotalrupiah').value = bilangan ;


      var d = document.getElementById('diskonbawah').value;
      var e = parseInt(document.getElementById('biayalain').value);
      var f = document.getElementById('subtotalbawah').value;
      var hitungtotal = f-d+e;
      var numbertotal = hitungtotal.toString(),
        sisa  = numbertotal.length % 3,
        rupiah  = numbertotal.substr(0, sisa),
        ribuan  = numbertotal.substr(sisa).match(/\d{3}/g);
          
      if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
      document.getElementById('totalfix').innerHTML = formatRupiah(rupiah);
      var input = document.getElementById('totalfix').innerHTML.replace(/\./g, "");
      //terbilang
      document.getElementById("terbilang").innerHTML = terbilang(input);
           
  }

  function stopCalc(){
    clearInterval(interval);
  }
 // function inputTerbilang() {
 //    //membuat inputan otomatis jadi mata uang

 //    //mengambil data uang yang akan dirubah jadi terbilang
 //     var input = document.getElementById("totalfix").innerHTML.replace(/\./g, "");

 //     //menampilkan hasil dari terbilang
 //     document.getElementById("terbilang").value = terbilang(hitungtotal).replace(/  +/g, ' ');
 //  } 

  
</script>
<script>
  $(document).ready(function() {
    var id = 1; 
    var sumHsl = 0;
    $("#butsend").click(function() {
      var newid = id++; 
      var st = parseInt($("#subtotalrupiah").val());
      $("#tabelku").append('<tr valign="top" id="'+newid+'">\n\
        <td width="100px" >' + newid + '</td>\n\
        <td width="100px" class="barang'+newid+'">' + $("#namabarangshow").val() + '</td>\n\
        <td width="100px" class="qtt'+newid+'">' + $("#qtt").val() + '</td>\n\
        <td width="100px" class="satuan'+newid+'">' + $("#satuan").val() + '</td>\n\
        <td width="100px" class="harga'+newid+'">' + $("#hargashow").val() + '</td>\n\
        <td width="100px" class="diskon'+newid+'">' + $("#diskon").val() + '</td>\n\
        <td width="100px" class="subtotal'+newid+'">' + $("#subtotal").val() + '</td>\n\
        <td width="100px"><a href="javascript:void(0);" class="remCF" data-id="'+st+'" ><input type="hidden" id="suba" value="'+st+'" class="aatd'+newid+'">Hapus</a></td>\n\ </tr>');
      // var sumHsl = 0;
      // for (t=0; t<newid; t++){
        sumHsl = sumHsl+ st-1+1;
      // }
      document.getElementById('subtotalbawah').value = sumHsl;
      document.getElementById('subtotalrupiah').value = '';
      document.getElementById('nama_barang').value = '';
      document.getElementById('qtt').value = '';
      document.getElementById('diskon').value = '';
      document.getElementById('subtotal').value = '';
      document.getElementById('hargashow').value = '';
      document.getElementById('tampilsatuan').value = '';
      });
      // $("#tabelku").on('click', '.remCF', function() {
      //   // var rowid = $(this).attr('id');;
      //   // var sta = parseInt($("#subtotalrupiah").val());
      //   $(this).parent().parent().remove();
      //   var sumHasl =  document.getElementById('subtotalbawah').value;
      //   // sumHasl = sumHasl-Number(sta);
      //   // $("#suba'+i+'")
      //   document.getElementById('subtotalbawah').value = sumHasl - ;
      // });

     
      // $("#butsave").click(function() {
      //   var lastRowId = $('#table1 tr:last').attr("id"); /*finds id of the last row inside table*/
      //   var name = new Array(); 
      //   var email = new Array();
      //   for ( var i = 1; i <= lastRowId; i++) {
      //     name.push($("#"+i+" .name"+i).html()); /*pushing all the names listed in the table*/
      //     email.push($("#"+i+" .email"+i).html()); pushing all the emails listed in the table
      //   }
      //   var sendName = JSON.stringify(name); 
      //   var sendEmail = JSON.stringify(email);
      //   $.ajax({
      //     url: "save.php",
      //     type: "post",
      //     data: {name : sendName , email : sendEmail},
      //     success : function(data){
      //       alert(data); /* alerts the response from php.*/
      //     }
      //   });
      // });
      /*crating new click event for save button*/ 

      var sum = document.getElementById('subtotalbawah').value;
      sumHsl = sum;
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
<script type="text/javascript">
  $(document).ready(function() {
    $("#kredit").click(function () {
        $('#tgljatuhtempo').removeAttr('disabled');
    });
    $("#cash").click(function () {
        $('#tgljatuhtempo').attr('disabled','disabled'); 
    });
  });
</script>
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
  
<script type="text/javascript">
    
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
 
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
 
      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
 
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
  </script>
</body>
</html>