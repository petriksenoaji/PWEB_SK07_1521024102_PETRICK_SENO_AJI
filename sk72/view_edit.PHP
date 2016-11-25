<?php
include ('view_header.php');
include('koneksi.php');
$id=$_GET['id'];

$sql=mysql_query("select * from karyawan where id='$id'");
$row=mysql_fetch_array($sql);
?>
<form id="form1" name="form1" method="post" action="act_edit.PHP">

  <table width="289" border="0" align="center">
  <input name="ID" type="hidden" value="<?php echo $row['ID']; ?>"/>
    <tr>
      <td width="164">NAMA</td>
      <td width="6">:</td>
      <td width="97"><input name="NAMA" type="text" id="NAMA" value="<?php echo $row['NAMA']; ?>"/></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td>:</td>
      <td><textarea name="ALAMAT" id="ALAMAT"><?php echo $row	['ALAMAT']; ?> </textarea></td>
    </tr>
    <tr>
      <td>JENIS KELAMIN </td>
      <td>:</td>
      <td><p>
          <input name="JK" type="radio" value="L" 
		  <?php if ($row['JK']== 'L' ){echo "checked=checked"; }?> />
        LAKI-LAKI 
        </p>
        <p>
          <input name="JK" type="radio" value="P" 
		  <?php if ($row['JK']== 'P') {echo "checked=checked"; }?> />
        PEREMPUAN </p></td>
    </tr>
    <tr>
      <td>GOL DARAH </td>
      <td>:</td>
      <td><select name="GOLDARAH" id="GOLDARAH">
        <option value="O" <?php if($row['GOLDARAH']=='O') {echo "selected=selected"; } ?> >O</option>
        <option value="A" <?php if($row['GOLDARAH']=='A') {echo "selected=selected"; } ?> >A</option>
        <option value="B" <?php if($row['GOLDARAH']=='B') {echo "selected=selected"; } ?> >B</option>
        <option value="AB" <?php if($row['GOLDARAH']=='AB') {echo "selected=selected"; } ?> >AB</option>
      </select>
      </td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="submit" name="Submit" value="KIRIM" />
      </div></td>
      <td>&nbsp;</td>
      <td><div align="center">
        <input type="reset" name="Submit2" value="Reset" />
      </div></td>
    </tr>
  </table>
</form>
<?php
include ('view_footer.php');
?>