Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

<div>&nbsp;</div>
<div>&nbsp;</div>

<h2>Biodata </h2>

<table width="100%" cellpadding="7">
	<tr>
		<td width="15%">Nama</td>
		<td width="2%">:</td>
		<td><?= $model->nama; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?= $model->alamat; ?></td>
	</tr>	
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?= $model->jenisKelamin->nama; ?></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?= $model->tanggal_lahir; ?></td>
	</tr>
	<tr>
		<td>Kampus</td>
		<td>:</td>
		<td><?= $model->kampus->nama; ?></td>
	</tr>
	<tr>
		<td>Kontak</td>
		<td>:</td>
		<td><?= $model->no_kontak; ?></td>
	</tr>	
</table>