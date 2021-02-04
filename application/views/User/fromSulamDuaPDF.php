<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title_pdf; ?></title>
	<style>
		#table {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 640px;
			margin-top: 19;
		}

		#table td,
		#table th {
			border: 1px solid #ddd;
			padding: 10px;
		}

		#table tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#table tr:hover {
			background-color: #ddd;
		}

		#table th {
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>

<body>
	<div style="text-align:center">
		<h3> <?= $title_pdf; ?></h3>
	</div>
	<table id="table">
		<thead>
			<tr>
				<th>Nama Custumer</th>
				<th>Nomor Service</th>
				<th>No Telp / WA</th>
				<th>Alergi Lem</th>
				<th>Pengobatan Teroid</th>
				<th>Operasi Lastik </th>
				<th>Kemoterapi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $datanya->name; ?></td>
				<td><?= $datanya->Nomor_Service; ?></td>
				<td><?= $datanya->no_phone; ?></td>
				<td><?= $datanya->alergi_lem; ?></td>
				<td><?= $datanya->pengobatan_teriod; ?></td>
				<td><?= $datanya->ops_lastik; ?></td>
				<td><?= $datanya->kemoterapi; ?></td>
		</tbody>
	</table>
	<table id="table">
		<thead>
			<tr>
				<th>Memakai Softlens</th>
				<th>Kulit Berminyak </th>
				<th>Name ART</th>
				<th>Oily Skin</th>
				<th>Store</th>
			</tr>
		</thead>
		<tbody>
			<tr>

				<td><?= $datanya->pakai_softlens; ?></td>
				<td><?= $datanya->kulit_berminyak; ?></td>
				<td><?= $datanya->nama_art; ?></td>
				<td><?= $datanya->kulit_berminyak; ?></td>
				<td><?= $datanya->nama_store; ?></td>
			</tr>
		</tbody>
	</table>
</body>

</html>
