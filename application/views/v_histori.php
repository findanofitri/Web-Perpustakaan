<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h1>Histori Peminjaman</h1>

			<a href="<?=base_url('index.php/Histori/cetak_laporan')?>" class="btn btn-success" style="float: right;">Print</a>
			<table class="table table-hover table-stripped"> 
				<thead>
					<tr>
						<td>No</td>
						<td>No Nota</td>
						<td>Nama Kasir</td>
						<td>Peminjam</td>
						<td>Tanggal Peminjaman</td>
						<td>Tanggal Pengembalian</td>
					</tr>
				</thead>		
				<tbody>
				<?php $no = 0; foreach($ts as $ts): $no++;?>
					<tr>
						<td><?=$no?></td>
						<td><?=$ts->kode_transaksi?></td>
						<td><?=$ts->nama_user?></td>
						<td><?=$ts->nama_pembeli?></td>
						<td><?=$ts->tanggal_peminjaman?></td>
						<td><?=$ts->tanggal_pengembalian?></td>
					</tr>
						<?php endforeach?>
				</tbody>	
				</table>
			</div>
		</div>
	</div>
</div>