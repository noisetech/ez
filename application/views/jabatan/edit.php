<section class="content-header">



	<a href="<?= site_url('jabatan/tambah') ?>" class="btn btn-sm btn-primary">
		Tambah data
	</a>

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

								<input type="text" name="jabatan_id" value="<?= $jabatan[0]['jabatan_id'] ?>" hidden>
								<!-- <input type="text" name="jabatan_id" value="<?= $jabatan['jabatan_id'] ?>" hidden> -->

								<div class="form-group <?php echo form_error('nama_jabatan') ? 'has-error' : null ?>">
									<label for="">Nama Jabatan:</label>
									<input type="text" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan" value=" <?= $this->input->post('nama_jabatan') ?? $jabatan[0]['nama_jabatan'] ?> ">
									<?php echo form_error('nama_jabatan') ?>
								</div>
								<!-- <?php echo $jabatan[0]['disposisies'][0]['disposisi_id'] ?>
                                <?php echo $jabatan[0]['disposisies'][0]['jabatan_id'] ?> -->
								<!-- <pre>

									<?php var_dump($jabatan) ?>
								</pre> -->



								<div class="form-group <?php echo form_error('nama_jabatan') ? 'has-error' : null ?>">
									<label for="">Disposi:</label>
									<?php foreach ($disposisi as $key => $d) : ?>

										<li>
											<input type="checkbox" name="disposisi[]" value="<?= $d['disposisi_id'] ?>" <?php foreach ($jabatan[0]['disposisies'] as $key => $ds) : ?> <?php if ($d['disposisi_id'] == $ds['disposisi_id']) {
																																															echo 'checked'; ?> <?php } ?> <?php endforeach ?> <?= $d['nama_disposisi'] ?>>
											<label for=""><?= $d['nama_disposisi'] ?></label>
										</li>

									<?php endforeach; ?>
									<?php //die; 
									?>

									<?php echo form_error('nama_jabatan') ?>
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






















</section>




</section>























</section>

































</section>
