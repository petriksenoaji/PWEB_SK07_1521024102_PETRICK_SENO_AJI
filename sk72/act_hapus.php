<?php
include ('koneksi.php');
$id=$_GET['id'];
$sql="DELETE FROM karyawan WHERE id='$id'";
$hapus=mysql_query($sql);
if ($hapus)
{
?>
<script type="text/javascript">
alert('Data berhasil dihapus');
location.href="view_karyawan.php";
</script>>
<?php
}
else
{
?>
<script type="text/javascript">
alert ('Data gagal dihapus');
location.href="view_karyawan.php";
</script>
<?php
}
?>