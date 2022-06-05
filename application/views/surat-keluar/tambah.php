<section class="content-header">

	<ol class="breadcrumb">
		<li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Tambah Surat Keluar</li>
	</ol>

</section>

<div class="row" style="margin-top: 20px;">
	<div class="container">
		<?php if ($this->session->flashdata('error')) : ?>
			<div class="col-lg-10 col-md-8 col-sm-4">
				<div class="alert alert-danger" role="alert">
					<?php echo ($this->session->flashdata('error')) ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>

<!-- Main content -->
<section class="content" style="margin-top: 30px;">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Tambah Surat Keluar</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<form action="<?= site_url('suratkeluar/proses_tambah_surat') ?>" method="POST" enctype="multipart/form-data">


								<div class="form-group">
									<label for="">Kode surat:</label>
									<input type="text" name="kode_surat" class="form-control" placeholder="Kode Surat">
								</div>

								<div class="form-group">
									<label for="">No Surat:</label>
									<input type="text" name="nomor_surat" class="form-control" placeholder="No Surat">
								</div>


								<div class="form-group">
									<label for="">Perihal isi surat:</label>
									<textarea name="perihal_isi_surat" class="form-control" cols="30" rows="10" placeholder="Perihal isi surat"></textarea>
								</div>

								<div class="form-group">
									<label for="">Tujuan Surat:</label>
									<input type="text" name="tujuan_surat" class="form-control" placeholder="Tujuan Surat">
								</div>

								<div class="form-group">
									<label for="">Tanggal Pengiriman</label>
									<input type="date" name="tanggal_pengiriman" class="form-control">
								</div>


								<div class="form-group">
									<label for="">File Surat:</label>
									<input type="file" name="file_surat" class="form-control">
								</div>


								<div class="form-group">
									<label for="">Instruklsi Selanjutnya</label>
									<input type="text" name="instruksi_selanjutnya" class="form-control">
								</div>


								<div class="form-group">
									<label for="">Tanggal Penyelsaian</label>
									<input type="date" name="tanggal_penyelsaian" class="form-control">
								</div>




								<button class="btn btn-sm btn-primary" type="submit">
									Simpan
								</button>
							</form>
						</div>


					</div>
				</div>

				<!-- /.box-body -->
			</div>

</section>
