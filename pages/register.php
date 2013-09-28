<br>
<div id="isi">
<center>
<div id="judul">Daftar</div>

<form method="post" action="index.php?p=submit_register">
  <table border="0">
    <tr>
      <td>Masukkan Username </td>
      <td><input name="username" type="text"></td>
    </tr>
    <tr>
      <td>Masukkan Password </td>
      <td><input name="password" type="password"></td>
    </tr>
	<tr>
      <td>Confirm Password </td>
      <td><input name="confirm" type="confirm"></td>
    </tr>
	<tr><td>Level</td><td><select name="level">

       <option value="admin">Admin </option>
       <option value="user">User</option>

</select></td></tr>
	<tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
</div>
</div>
</body>
</html>