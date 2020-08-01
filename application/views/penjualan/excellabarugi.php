<?php 

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border="1" width="100%">
<thead>
<tr>
	<th colspan="13"> Data Laba Rugi</th>
</tr>
<tr>
 <th>NO</th>
 <th>TOTAL PENJUALAN</th>
 <th>TOTAL PEMBELIAN</th>
 <th>TOTAL KAS KELUAR</th>
 </tr>
</thead>
<tbody>
<?php $i=1; foreach($excel as $excel) { 
	?>
<tr>
 <td><?php echo $i ?></td>
 <td><?php echo $excel->total ?></td>
 <td><?php echo $excel->total ?></td>
 <td><?php echo $excel->nominal; ?></td>
 </tr>
<?php $i++; } ?>
</tbody>
</table>