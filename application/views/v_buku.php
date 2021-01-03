<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h1>Daftar Buku Tersedia</h1>

			<?php if($this->session->flashdata('pesan')): ?>

		<div class="alert alert-warning"><?= $this->session->flashdata('pesan') ?></div>

			<?php endif?>
		<!-- level user admin -->
		<?php if($this->session->userdata('level')=="admin"){?>
		<a href="#tambah" class="btn btn-primary" data-toggle="modal" style="float: right;"><i class="fa fa-plus"></i> <span> Tambah </span></a>
		<?php } ?>
			<table class="table table-hover table-stripped"> 
				<thead>
					<tr>
						<td>No</td>
						<td>ID Buku</td>
						<td>Judul Buku</td>
						<td>Tahun</td>
						<td>Kategori</td>
						<td>Harga</td>
						<td>Gambar</td>
						<td>Penerbit</td>
						<td>Penulis</td>
						<td>Stok</td>
						<td></td><td></td>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0; foreach($buku as $bk): $no++;?>
					
					<tr>

			<td><?=$no?></td><td><?=$bk->kode_buku?></td><td><?=$bk->judul_buku?></td><td><?=$bk->tahun?></td><td><?=$bk->nama_kategori?></td><td><?=$bk->harga?></td><td><img src="<?=base_url('assets/gambar/'.$bk->cover)?>" style="width:40px;"></td><td><?=$bk->penerbit?></td><td><?=$bk->penulis?></td><td><?=$bk->stok?></td>

			<td><?php if($this->session->userdata('level')=="admin"){?> <a href="#ubah" data-toggle="modal" onclick="edit(<?=$bk->kode_buku?>)"  class="btn btn-success">Edit</a><?php }else{ 		echo "anda kasir"; }?></td>

			<td><?php if($this->session->userdata('level')=="admin"){?><a href="<?=base_url('index.php/Buku/hapus/'.$bk->kode_buku)?>" onclick="return confirm('apakah anda yakin untuk menghapus')" class="btn btn-danger">Hapus</a><?php }else{ echo "anda kasir"; }?></td>
		</tr>
						<?php endforeach?>
				</tbody>	
			</table>

<div class="modal fade" id="tambah" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Tambah Buku</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('index.php/Buku/tambah')?>" method="post" enctype="multipart/form-data">
						<tr>
							<td>Judul Buku</td>
							<td><input type="text" name="judul_buku" class="form-control"></td>
						</tr>

						<tr>
							<td>Tahun</td>
							<td><input type="number" name="tahun" class="form-control"></td>
						</tr>

						<tr>
							<td>Harga</td>
							<td><input type="text" name="harga" class="form-control"></td>
						</tr>


						<tr>
							<td>Penerbit</td>
							<td><input type="text" name="penerbit" class="form-control"></td>
						</tr>

						<tr>
							<td>Penulis</td>
							<td><input type="text" name="penulis" class="form-control"></td>
						</tr>

						<tr>
							<td>Stok</td>
							<td><input type="number" name="stok" class="form-control"></td>
						</tr>

						<tr>
							<td>Kategori Buku</td>
							<td>
								<select name="kategori" class="form-control">
									<?php foreach ($kategori as $kt): ?>
										<option value="<?= $kt->kode_kategori?>" ><?= $kt->nama_kategori?></option>
									<?php endforeach?>	
								</select>
							</td>
						</tr>

						<tr>
							<td>Gambar</td>
							<td><input type="file" name="cover"></td>
						</tr>

					<center><input type="submit" name="tambah" value="tambah" class="btn btn-success" style="margin-top: 30px;"></center>
				</form>
			</div>	
		</div>
	</div>
</div>


<div class="modal fade" id="ubah" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="row">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title">Edit Buku</h4>
				</div>
			</div>	
			<div class="modal-body">
				<form action="<?=base_url('index.php/Buku/update')?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="kode_buku" required id="kode_buku" style="margin-left: 20px;">
						<tr>
							<td>Judul Buku</td>
							<td><input type="text" name="judul_buku"  required  id="judul_buku" class="form-control"></td>
						</tr>
						<tr>
							<td>Tahun</td>
							<td><input type="number" name="tahun" required  id="tahun" class="form-control"></td>
						</tr>
						<tr>
							
						<tr>
							<td>Harga</td>
							<td><input type="text" name="harga" required  id="harga" class="form-control"></td>
						</tr>
						
						<tr>
							<td>Penerbit</td>
							<td><input type="text" name="penerbit" required   id="penerbit" class="form-control"></td>
						</tr>
						<tr>
							<td>Penulis</td>
							<td><input type="text" name="penulis" required  id="penulis" class="form-control"></td>
						</tr>
						<tr>
							<td>Stok</td>
							<td><input type="number" name="stok" required  id="stok" class="form-control"></td>
						</tr>
						<td>Kategori</td>
							<td>
								<select name="kategori" required id="kategori"  class="form-control">
									<?php foreach ($kategori as $kt): ?>
										<option value="<?= $kt->kode_kategori?>" ><?= $kt->nama_kategori?></option>
									<?php endforeach?>	
								</select>
							</td>
						</tr>

						<tr>
							<td>Gambar</td>
							<td><input type="file" name="cover"   id="cover"></td>
						</tr>
					<center><input type="submit" value="Edit" name="update" required  class="btn btn-primary" style="margin-top: 30px;"></center>
				</form>
			</div>	
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>

<script >
	function edit(kode_buku){
		$.ajax({
			type:"post",
			url:"<?=base_url()?>index.php/Buku/tampil_ubah_buku/"+kode_buku,
			dataType:"json",
			success:function(data){
				$("#kode_buku").val(data.kode_buku);
				$("#judul_buku").val(data.judul_buku);
				$("#tahun").val(data.tahun);
				$("#kategori").val(data.kode_kategori);
				$("#harga").val(data.harga);
				$("#penerbit").val(data.penerbit);
				$("#penulis").val(data.penulis);
				$("#stok").val(data.stok);
				$("#stok").val(data.stok);	
			}
		});
	}
</script>