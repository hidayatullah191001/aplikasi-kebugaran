<html> 
<body>
	<h2 style=""><strong>Hasil Tes Fisik Mahasiswa</strong></h2>
	<br>
	<p>
		Nama : <?=$mahasiswa['nama'] ?><br>
		Jurusan : <?=$mahasiswa['jurusan'] ?><br>
		NIM : <?=$mahasiswa['nim'] ?>
	</p>

	<?php if ($dayatahancount < 1 ): ?>

		<?php else :  ?>
			<div>
				<br><br>
				<h4>Jenis Tes : Tes Daya Tahan</h4>
				<br>
				<table>
					<thead>
						<tr>
							<th>Tes Multi Tahap</th>
							<th>Lari 16 KM</th>
							<th>Lari 300 M</th>
							<th>Lari 12 Menit</th>
							<th>Naik Turun Bangku</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($dayatahan as $dt) : ?>
							<tr>
								<td><?=$dt['multitahap']?></td>
								<td><?=$dt['lari16km']?></td>
								<td><?=$dt['lari300m']?></td>
								<td><?=$dt['lari12menit']?></td>
								<td><?=$dt['naikturunbangku']?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		<?php endif ?>
	</body>
	</html>