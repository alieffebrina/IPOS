<?php 

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table border="1" width="100%">
<thead>
<tr>
	<th colspan="13"> Data Kas Keluar</th>
</tr>
<tr>
 <th>NO</th>
 <th>TANGGAL</th>
 <th>KETERANGAN</th>
 <th>NOMINAL</th>
 </tr>
</thead>
<tbody>
<?php $i=1; foreach($excel as $excel) { 
	?>
<tr>
 <td><?php echo $i ?></td>
 <td><?php echo $excel->tglkas ?></td>
 <td><?php echo $excel->ket ?></td>
 <td><?php echo $excel->nominal; ?></td>
 </tr>
<?php $i++; } ?>
</tbody>
</table>