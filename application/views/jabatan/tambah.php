<section class="content-header">

	<ol class="breadcrumb">
		<li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Tambah jabatan</li>
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
					<h3 class="box-title">Tambah Jabatan</h3>
				</div>
				<!-- /.box-header -->

				<div class="box-body">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<form action="" method="POST">

								<div class="form-group <?php echo form_error('nama_jabatan') ? 'has-error' : null ?>">
									<label for="">Nama Jabatan:</label>
									<input type="text" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan" value="<?= set_value('nama_jabatan') ?>">
									<?php echo form_error('nama_jabatan') ?>
								</div>


								<div class="form-group <?php echo form_error('user_id') ? 'has-error' : null ?>">
									<label for="">Disposisi:</label>
									<br>
									<div class="row">
										<div class="col-lg-6">
											<?php foreach ($disposisi as $disposisi) : ?>
												<li>
													<input type="checkbox" name="disposisi[]" value="<?= $disposisi['disposisi_id'] ?>">
													<label for=""><?= $disposisi['nama_disposisi'] ?></label>
												</li>
											<?php endforeach; ?>
										</div>
									</div>

									<?php echo form_error('user_id') ?>
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
