<?php
include ('view_header.php');
?>
<form id="form1" name="form1" method="post" action="ACT_TAMBAH.PHP">
  <table width="289" border="0" align="center">
    <tr>
      <td width="164">NAMA</td>
      <td width="6">:</td>
      <td width="97"><input name="NAMA" type="text" id="NAMA" /></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td>:</td>
      <td><textarea name="ALAMAT" id="ALAMAT"></textarea></td>
    </tr>
    <tr>
      <td>JENIS KELAMIN </td>
      <td>:</td>
      <td><p>
          <input name="JK" type="radio" value="L" />
        LAKI-LAKI 
        </p>
        <p>
          <input name="JK" type="radio" value="P" />
        PEREMPUAN </p></td>
    </tr>
    <tr>
      <td>GOL DARAH </td>
      <td>:</td>
      <td><select name="GOLDARAH" id="GOLDARAH">
        <option value="O">O</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
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