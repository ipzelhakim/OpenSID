<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Laporan Peserta Program <?= $peserta[0]["nama"];?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="<?= base_url()?>assets/css/report.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			.textx
			{
				mso-number-format:"\@";
			}
		</style>
	</head>
	<body>
		<div id="body">
			<table>
				<tbody>
					<tr>
						<td align="center">
							<?php if ($aksi != 'unduh'): ?>
								<img src="<?= LogoDesa($config['logo']);?>" alt="" style="width:100px; height:auto">
							<?php endif; ?>
							<h1>PEMERINTAH <?= strtoupper($this->setting->sebutan_kabupaten)?> <?= strtoupper($config['nama_kabupaten'])?> </h1>
							<h1 style="text-transform: uppercase;"></h1>
							<h1><?= strtoupper($this->setting->sebutan_kecamatan)?> <?= strtoupper($config['nama_kecamatan'])?> </h1>
							<h1><?= strtoupper($this->setting->sebutan_desa)." ".strtoupper($config['nama_desa'])?></h1>
						</td>
					</tr>
					<tr>
						<td style="padding: 5px 20px;">
							<hr style="border-bottom: 2px solid #000000; height:0px;">
						</td>
					</tr>
					<tr>
						<td align="center" >
							<h4><u>Daftar Peserta Program <?= $peserta[0]["nama"];?></u></h4>
						</td>
					</tr>
					<tr>
						<td style="padding: 5px 20px;">
							<strong>Sasaran Peserta : </strong><?= $sasaran[$peserta[0]["sasaran"]];?><br>
							<strong>Masa Berlaku : </strong><?= fTampilTgl($peserta[0]["sdate"],$peserta[0]["edate"]);?><br>
							<strong>Keterangan : </strong><?= $peserta[0]["ndesc"];?>
						</td>
					</tr>
					<tr>
						<td style="padding: 5px 20px;">
							<table class="border thick">
								<thead>
									<tr class="border thick">
										<th rowspan="2">No</th>
										<th rowspan="2"><?= $peserta[0]["judul_peserta"]?></th>
										<th rowspan="2">No. Kartu Peserta</th>
										<th rowspan="2"><?= $peserta[0]["judul_peserta_info"]?></th>
										<th rowspan="2">Alamat</th>
										<th colspan="5" style="text-align: center;">Identitas di Kartu Peserta</th>
									</tr>
									<tr class="border thick">
										<th>NIK</th>
										<th>Nama</th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
									</tr>
								</thead>
								<tbody>
									<?php	$i=1; foreach ($peserta[1] as $key=>$item): ?>
									<tr>
										<td><?=$i?></td>
										<td class='textx'><?=$item["nik"]?></td>
										<td class='textx'><?=$item["no_id_kartu"]?></td>
										<td><?=$item["nama"]?></td>
										<td><?=$item["info"]?></td>
										<td class='textx'><?=$item["kartu_nik"]?></td>
										<td><?=$item["kartu_nama"]?></td>
										<td><?=$item["kartu_tempat_lahir"]?></td>
										<td class='textx'><?= tgl_indo_out($item["kartu_tanggal_lahir"])?></td>
										<td><?=$item["kartu_alamat"]?></td>
									</tr>
									<?php $i++; endforeach;?>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>
