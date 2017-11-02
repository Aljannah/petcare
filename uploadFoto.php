<form action = "upload.php" method="post" enctype="multipart/form-data">
	<table width=50% cellpadding=4 cellspacing=1 border=0 valign=top>
		<tr><td><br></td></tr>
		<tr>
			<td style="width:20px;"></td>
			<td><label>Pilih Foto</label></td>
			<td style="width:50px;"></td>
			<td><input type="file" name="pilihFoto" id="exampleInputFile" required="required"/><p class="help-block">Ukuran Maksimal foto harus 1 MB</p></td>
		</tr>
		<tr>
			<td style="width:20px;"></td>
			<td colspan=2></td>
			<td><button type="submit" name="savefoto" class="btn blue">Upload</button></td>
		</tr>
	</table>
</form>