<section class="content-header">


	<ol class="breadcrumb">
		<li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Ubah Surat</li>
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


<section class="content" style="margin-top: 30px;">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Edit Surat</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<form action="" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="surat_masuk_id" value="<?= $surat_masuk['0']['surat_masuk_id'] ?>">


								
								<div class="form-group">
									<label for="">Kode surat:</label>
									<input type="text" name="kode_surat" class="form-control" placeholder="Kode Surat" value="<?php echo  $surat_masuk['0']['kode_surat'] ?>">
								</div>

								<div class="form-group">
									<label for="">No Surat:</label>
									<input type="text" name="nomor_surat" class="form-control" placeholder="No Surat" value="<?php echo  $surat_masuk['0']['nomor_surat'] ?>">
								</div>

								<div class="form-group">
									<label for="">Perihal isi surat:</label>
									<textarea name="perihal_isi_surat" class="form-control" cols="30" rows="10" placeholder="Perihal isi surat"><?php echo $surat_masuk['0']['perihal_isi_surat'] ?></textarea>
								</div>

								<div class="form-group">
									<label for="">Tujuan Surat:</label>
									<input type="text" name="tujuan_surat" class="form-control" placeholder="Tujuan Surat" value="<?php echo  $surat_masuk['0']['tujuan_surat'] ?>">
								</div>

								<div class="form-group">
									<label for="">Tanggal Pengiriman</label>
									<input type="date" name="tanggal_pengiriman" class="form-control" value="<?= $surat_masuk['0']['tanggal_pengiriman'] ?>">
								</div>


								<div class="form-group">
									<label for="">File Surat:</label>
									<input type="file" name="file_surat" class="form-control">
								</div>

								<div class="form-group">
									<label for="">Jabatan</label>
									<select name="jabatan_id" class="form-control">
										<option value="<?= $surat_masuk['0']['jabatan_id'] ?>">Data sebelumnya("<?= $surat_masuk['0']['nama_jabatan'] ?>)</option>
										<?php foreach ($jabatan as $jabatan) : ?>
											<option value="<?= $jabatan['jabatan_id']  ?>"><?= $jabatan['nama_jabatan'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="form-group">
									<label for="">Instruklsi Selanjutnya</label>
									<input type="text" name="instruksi_selanjutnya" class="form-control" value="<?= $surat_masuk['0']['instruksi_selanjutnya'] ?>">
								</div>


								<div class="form-group">
									<label for="">Tanggal Penyelsaian</label>
									<input type="date" name="tanggal_penyelsaian" class="form-control" value="<?= $surat_masuk['0']['tanggal_penyelsaian'] ?>">
								</div>




								<button class="btn btn-sm btn-warning" type="submit">
									Ubah
								</button>
							</form>
						</div>




					</div>
				</div>

				<!-- /.box-body -->
			</div>

























































</section>
