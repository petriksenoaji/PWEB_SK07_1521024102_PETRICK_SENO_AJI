<?PHP
include('koneksi.php');
$nama=$_POST['NAMA'];
$alamat=$_POST['ALAMAT'];
$jk=$_POST['JK'];
$goldarah=$_POST['GOLDARAH'];
$sql="insert into karyawan Values
		('','$nama','$alamat','$jk','$goldarah')";
		$input=mysql_query($sql);
		if($input)
		{
		
?>
<script type="text/javascript">
alert('Data berhasil ditambahkan');
location.href="view_karyawan.php";
</script>
<?php
} else
{
?>
<script type="text/javascript">
alert('Data gagal ditambahkan');
location.href="view_karyawan.php";
</script>
<?php
}
?>