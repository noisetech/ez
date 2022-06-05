<section class="content-header">

	<ol class="breadcrumb">
		<li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Ubah Disposisi</li>
	</ol>

</section>

<!-- Main content -->
<section class="content" style="margin-top: 30px;">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Ubah Disposisi</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<form action="" method="POST">
								<input type="hidden" name="disposisi_id" value="<?= $disposisi['0']['disposisi_id'] ?>">

								<div class="form-group <?php echo form_error('nama_disposisi') ? 'has-error' : null ?>">
									<label for="">Nama Disposisi:</label>
									<input type="text" name="nama_disposisi" class="form-control" placeholder="Nip" value="<?= $disposisi[0]['nama_disposisi'] ?>">
									<?php echo form_error('nama_disposisi') ?>
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
