<div class="main-content">
				<div class="container-fluid">
				<div class="panel panel-headline">
						<div class="panel-heading">
	<h3><i class="fa fa-book"></i> PERPUSTAKAAN </h3>
		<p class="panel-subtitle">Welcome <?=$this->session->userdata('nama_user')?></p>
						
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
							<?php if($this->session->userdata('level')=='admin'){?>
								<a href="<?=base_url('index.php/Kasir')?>" style="color: black">
								<?php }?>
									<div class="metric">
										<span class="icon"><i class="fa fa-users"></i></span>
										<p>
											<span class="number"><?= $user?></span>
											<span class="title">Petugas Jaga Perpustakaan Aktif</span>
										</p>
									</div>
								<?php if($this->session->userdata('level')=='admin'){?>
								</a>
								<?php }?>
								</div>
								<div class="col-md-3">

								<a href="<?=base_url('index.php/Kategori')?>" style="color: black">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number"><?= $kategori ?></span>
											<span class="title">Kategori Buku di Perpustakaan</span>
										</p>
									</div>

									</a>
								</div>
								<div class="col-md-3">
								<a href="<?=base_url('index.php/Buku')?>" style="color: black">
									<div class="metric">
										<span class="icon"><i class="fa fa-book"></i></span>
										<p>
											<span class="number"><?= $buku ?></span>
											<span class="title">Daftar Buku di Perpustakaan</span>
										</p>
									</div>

									</a>
									</div>
									<div class="col-md-3">
								<a href="<?=base_url('index.php/Histori')?>" style="color: black">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-cart"></i></span>
										<p>
											<span class="number"><?= $transaksi ?></span>
											<span class="title">Transaksi Peminjaman di Perpustakaan</span>
										</p>
									</div>
									</a>
								</div>
								</div>
							</div>
						</div>

					<div class="boss" style="width">
				</div>
			</div>
		</div>
	</div>	
</div>				