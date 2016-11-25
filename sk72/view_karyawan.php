<?php
include ('view_header.php');
include ('koneksi.php');
$query="select * from karyawan";
$sql=mysql_query($query);
?>
<table width="614" height="134" border="1" align="center">
  <tr>
    <td width="32" bgcolor="#999999"><div align="center"><strong>ID</strong></div></td>
    <td width="88" bgcolor="#999999"><div align="center"><strong>NAMA</strong></div></td>
    <td width="117" bgcolor="#999999"><div align="center"><strong>ALAMAT</strong></div></td>
    <td width="35" bgcolor="#999999"><div align="center"><strong>JK</strong></div></td>
    <td width="168" bgcolor="#999999"><div align="center"><strong>GOL DARAH </strong></div></td>
    <td colspan="2" bgcolor="#999999"><div align="center"><strong>AKSI</strong></div></td>
  </tr>
  <?php
  $i=0;
  
  while($row=mysql_fetch_array($sql))
  {
  if ($i%2==0){
  echo "<tr bgcolor=#FFFFF99>";
  }else{
  echo "<tr bgcolor=#58FAF4>";
  }
  ?>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['NAMA']; ?></td>
    <td><?php echo $row['ALAMAT']; ?></td>
    <td><?php echo $row['JK']; ?></td>
    <td><div align="center"><?php echo $row['GOLDARAH']; ?></div>      </td>
    <td width="68"><a href="view_edit.php?id=<?php echo $row['ID']; ?>"
	>EDIT</a></td>
    <td width="60"><a href="act_hapus.php?id=<?php echo $row['ID']; ?>"
	onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
	><span class="style1">HAPUS</span> </td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>

<?php
include ('view_footer.php');
?>
