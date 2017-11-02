<?php
if(empty($_SESSION))
{
	session_start();
}
    include_once "config.php";
	$query = "SELECT * FROM customer WHERE username='".$_SESSION['username']."'";
    $row = mysqli_fetch_array(mysqli_query($conn,$query));
    
?>
<form action = "?action=editbiodata&id=<?php echo $row['username'];?>" method="post">
	<input type = "hidden" name="action" value="biodata">
	<table class="table table-striped table-bordered table-hover" id="dataTables-example" width=100% cellpadding=0 cellspacing=0 border=0 valign=top>
		<thead>
			<tr>
				<th colspan=3></th>
			</tr>
		</thead>
		<tbody>
			<tr> 
                
				<td style="width:80px;padding-top:0.5px;padding-bottom:0.5px;" rowspan=5><img src=
				<?php 
				if($row['foto']=="")
				{
					echo "assets/img/find_user.png";
				}
				else
				{	echo "images/".$row['foto']; }?>></td>
				
                <td style="width=150px;padding-top=2px;padding-bottom=2px;"><label>Username</label></td>
				<td style="padding-top=2px;padding-bottom=2px;"><?php echo $row['username'];?></td>
			</tr>
                <td style="width=150px;padding-top=2px;padding-bottom=2px;"><label>Nama Lengkap</label></td>
				<td style="padding-top=2px;padding-bottom=2px;"><?php echo $row['name'];?></td>
			</tr>
            <tr>
				<td style="width=150px;padding-top=2px;padding-bottom=2px;"><label>Password</label></td>
				<td style="padding-top=2px;padding-bottom=2px;"><?php echo $row['password'];?></td>
			</tr>
            <tr>
				<td style="width=150px;padding-top=2px;padding-bottom=2px;"><label>Email</label></td>
				<td style="padding-top=2px;padding-bottom=2px;"><?php echo $row['email'];?></td>
			</tr>
            
			<tr>
				<td style="width=150px;padding-top=2px;padding-bottom=2px;"><label>Nomor Telepon</label></td>
				<td><?php echo $row['hp'];?></td>
			</tr>
            <tr>
				<td style="width=150px;padding-top=2px;padding-bottom=2px;"><label>Alamat</label></td>
				<td><?php echo $row['location'];?></td>
			</tr>
            <tr>
				<td style="width=150px;padding-top=2px;padding-bottom=2px;" colspan=2>
					<a id="editbiodata" href="index.php?menu=editbiodata&id=pegawai" type="submit" class="btn btn-primary btn-lg" style="display:inline-block">Ubah Biodata</a>
				</td>
			</tr>

