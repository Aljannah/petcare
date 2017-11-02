<html>
<table class="table table-striped table-bordered table-hover" id="dataTables-example" width=100% cellpadding=0 cellspacing=0 border=0 valign=top>

</form>
<?php

     
        $que = mysqli_query($conn, "SELECT * FROM customer WHERE username='".$_SESSION['username']."'");
        while($row=mysqli_fetch_array($que)){
            $username=$row['username'];
            $name=$row['name'];
            $password=$row['password'];
            $location=$row['location'];
            $email=$row['email'];
            $hp=$row['hp'];
        }
?>
<form name='form' method='POST' action='updateindatauser.php '>
        <input type='hidden' name='username' value="<?php echo $username; ?>">  
<tr>   
    <td>Nama Lengkap</td>
    <td><input type='text' name='nama' value="<?php echo $name; ?>"></td>
</tr>
<tr>   
    <td>Password</td>
    <td><input type='text' name='password' value="<?php echo $password; ?>"></td>
</tr>
<tr>   
    <td>Alamat lengkap</td>
    <td><input type='text' name='alamat' value="<?php echo $location; ?>"></td>
</tr>
<tr>
    <td>Email</td>
    <td><input type='text' name='email' value="<?php echo $email; ?>" ></td>
</tr>
<tr>
    <td>Nomor Telepon</td>
    <td><input type='text' name='hp' value="<?php echo $hp; ?>" ></td>
</tr>
<tr><td><input type='submit' name='tekan' value='Simpan'/></td>
</tr>

</form>
</table>   
    
    
</html>