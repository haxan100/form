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
			padding: 5px;
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
				<th>Service</th>
				<th>Nomor Service</th>
				<th>Alamat</th>
				<th>No Telp / WA</th>
				<th>Email</th>
				<th>Botox </th>
				<th>Diabetes</th>
				<th>Retouch</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $datanya->name; ?></td>
				<td><?= $datanya->ServiceName; ?></td>
				<td><?= $datanya->Nomor_Service; ?></td>
				<td><?= $datanya->addres; ?></td>
				<td><?= $datanya->no_phone; ?></td>
				<td><?= $datanya->email; ?></td>
				<td><?= $datanya->client_botox; ?></td>
				<td><?= $datanya->diabetes; ?></td>
				<td><?= $datanya->retouch; ?></td>
		</tbody>
	</table>
	<table id="table">
		<thead>
			<tr>
				<th>Hepatitis</th>
				<th>Easy Bleeds</th>
				<th>Sensitif Skin</th>
				<th>Oily Skin</th>
				<th>Chemical Peels</th>
				<th>Pregnant</th>
				<th>Alhcohol</th>
				<th>Name ART </th>
				<th>Store</th>
			</tr>
		</thead>
		<tbody>
			<tr>

				<td><?= $datanya->hepatitis; ?></td>
				<td><?= $datanya->easy_bleeds; ?></td>
				<td><?= $datanya->sensitif_skin; ?></td>
				<td><?= $datanya->oily_skin; ?></td>
				<td><?= $datanya->do_chemical_peels; ?></td>
				<td><?= $datanya->pregnant; ?></td>
				<td><?= $datanya->drinking_alcohol_in_the_last_24_hours; ?></td>
				<td><?= $datanya->name_our_art; ?></td>
				<td><?= $datanya->store; ?></td>
			</tr>
		</tbody>
	</table>
</body>

</html>
