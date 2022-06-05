<section class="content-header">
	<ol class="breadcrumb">
		<li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Data User</li>
	</ol>



	<div class="row" style="margin-top: 20px;">
		<div class="container">
			<?php if ($this->session->flashdata('success')) : ?>
				<div class="col-lg-10 col-md-8 col-sm-4">
					<div class="alert alert-success" role="alert">
						<?php echo ($this->session->flashdata('success')) ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>

</section>


<!-- Main content -->
<section class="content" style="margin-top: 30px;">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Opsi Surat Masuk</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form action="<?=base_url('suratkeluar/data_laporan_surat_keluar')?>" method="POST">

						<div class="form-group">
							<label for="">Tanggal Awal</label>
							<input type="date" name="tanggal_awal" class="form-control">
						</div>

						<div class="form-group">
							<label for="">Tanggal Akhir</label>
							<input type="date" name="tanggal_akhir" class="form-control">
						</div>

						<button class="btn btn-sm btn-primary" type="submit">
						Proses
						</button>
					</form>
				</div>
				<!-- /.box-body -->
			</div>














</section>
