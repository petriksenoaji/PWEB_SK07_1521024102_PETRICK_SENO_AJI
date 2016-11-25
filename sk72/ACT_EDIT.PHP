<?PHP
include('koneksi.php');
$id = $_POST['ID'];
$nama=$_POST['NAMA'];
$alamat=$_POST['ALAMAT'];
$jk=$_POST['JK'];
$goldarah=$_POST['GOLDARAH'];
$sql="update karyawan set NAMA='$nama', ALAMAT='$alamat', JK='$jk', GOLDARAH='$goldarah' where ID='$id'";
$edit=mysql_query($sql);
if($edit)
{
		
?>
<script type="text/javascript">
alert('Data berhasil diUbah');
location.href="view_karyawan.php";
</script>
<?php
} else
{
?>
<script type="text/javascript">
alert('Data gagal diUbah');
location.href="view_karyawan.php";
</script>
<?php
}
?>