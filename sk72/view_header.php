<?php
session_start();
if(!empty ($_SESSION['login']))
{

}else
{
?>
<script type="text/javascript">
alert('anda harus login dulu');
location.href="view_login.php";
</script>
<?php
}
?>
<style type="text/css">
body {
/*background-color: #FFFF00;*/
background-image:URL('506.JPG');
background-repeat:no-repeat;
background-attachment:fixed;
background-position:center;
z-index:-999;
min-height:100%;
min-width:1024px;
width: 100%;
height:auto;
position:fixed;
top:0;
left:0;

}
table{
background-color: #FFFFFF;
}
</style>
<body>
<table width="800" border="1" align="center">
  <tr>
    <td colspan="4"><div align="center"><strong>DATA KARYAWAN </strong></div></td>
  </tr>
  <tr>
    <td colspan="4" align="center">
	<a href="view_karyawan.PHP">HOME | </a>
	<a href="TAMBAH.PHP">TAMBAH KARYAWAN | </a>
	<a href="logout.PHP">LOGOUT | </a>
	</td>

  </tr>
  <tr>
    <td>
	