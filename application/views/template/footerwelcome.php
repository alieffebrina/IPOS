 <script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
  
    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */
      <?php 
      $date = date('m');

      $ve = date('m')-5; 
      $ye = date('Y');
      if ($date < 6){
        $ye = date('Y')-1;
      }
      $e = $this->db->query("select CONCAT(YEAR(tglnota),'/',MONTH(tglnota)) AS bulan, SUM(total) AS jumlah_bulanan
            FROM tb_penjualan where YEAR(tglnota) = $ye and MONTH(tglnota) = $ve
            GROUP BY MONTH(tglnota)");

      $vd = date('m')-4; 
      $yd = date('Y');
      if ($date < 6){
        $yd = date('Y')-1;
      }
      $d = $this->db->query("select CONCAT(YEAR(tglnota),'/',MONTH(tglnota)) AS bulan, SUM(total) AS jumlah_bulanan
            FROM tb_penjualan where YEAR(tglnota) = $yd and MONTH(tglnota) = $vd
            GROUP BY MONTH(tglnota)");

      $vc = date('m')-3; 
      $yc = date('Y');
      if ($date < 6){
        $yc = date('Y')-1;
      }
      $c = $this->db->query("select CONCAT(YEAR(tglnota),'/',MONTH(tglnota)) AS bulan, SUM(total) AS jumlah_bulanan
            FROM tb_penjualan where YEAR(tglnota) =  $yc and MONTH(tglnota) = $vc
            GROUP BY MONTH(tglnota)");

      $vb = date('m')-2; 
      $yb = date('Y');
      if ($date < 6){
        $yb = date('Y')-1;
      }
      $b = $this->db->query("select CONCAT(YEAR(tglnota),'/',MONTH(tglnota)) AS bulan, SUM(total) AS jumlah_bulanan
            FROM tb_penjualan where YEAR(tglnota) = $yb and MONTH(tglnota) = $vb
            GROUP BY MONTH(tglnota)");

      $va = date('m')-1; 
      $ya = date('Y');
      if ($date < 6){
        $ya = date('Y')-1;
      }
      $a = $this->db->query("select CONCAT(YEAR(tglnota),'/',MONTH(tglnota)) AS bulan, SUM(total) AS jumlah_bulanan
            FROM tb_penjualan where YEAR(tglnota) = $ya and MONTH(tglnota) = $va
            GROUP BY MONTH(tglnota)"); 

      $v = date('m'); 
      $ynow = date('Y');
      if ($date < 6){
        $ynow = date('Y')-1;
      }
      $now = $this->db->query("select CONCAT(YEAR(tglnota),'/',MONTH(tglnota)) AS bulan, SUM(total) AS jumlah_bulanan
            FROM tb_penjualan where YEAR(tglnota) = $ynow and MONTH(tglnota) = $v
            GROUP BY MONTH(tglnota)");
      ?>
    var bar_data = {
      data : [
      ['<?php echo date('F Y', strtotime(date('Y-m') . '- 5 month')); ?>', 
      <?php foreach ($e->result() as $e) { echo $e->jumlah_bulanan; } ?>], 
      ['<?php echo date('F Y', strtotime(date('Y-m') . '- 4 month')); ?>', 
      <?php foreach ($d->result() as $d) { echo $d->jumlah_bulanan; } ?>], 
      ['<?php echo date('F Y', strtotime(date('Y-m') . '- 3 month')); ?>', 
      <?php foreach ($c->result() as $c) { echo $c->jumlah_bulanan; } ?>],
      ['<?php echo date('F Y', strtotime(date('Y-m') . '- 2 month')); ?>', 
      <?php foreach ($b->result() as $b) { echo $b->jumlah_bulanan; } ?>], 
      ['<?php echo date('F Y', strtotime(date('Y-m') . '- 1 month')); ?>', 
      <?php foreach ($a->result() as $a) { echo $a->jumlah_bulanan; } ?>], 
      ['<?php echo date('F Y') ?>', 
      <?php foreach ($now->result() as $now) { echo $now->jumlah_bulanan; } ?>] ],
      color: '#3c8dbc'
    };
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    });
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */
    /*
     * END DONUT CHART
     */

  });

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>