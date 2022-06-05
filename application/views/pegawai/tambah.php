<section class="content-header">

	<ol class="breadcrumb">
		<li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Tambah Pegawai</li>
	</ol>

</section>

<!-- Main content -->
<section class="content" style="margin-top: 30px;">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Tambah Pegawai</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<form action="" method="POST">

								<div class="form-group <?php echo form_error('nip') ? 'has-error' : null ?>">
									<label for="">Nip:</label>
									<input type="text" name="nip" class="form-control" placeholder="Nip" value="<?= set_value('nip') ?>">
									<?php echo form_error('nip') ?>
								</div>

								<div class="form-group <?php echo form_error('nama') ? 'has-error' : null ?>">
									<label for="">Nama:</label>
									<input type="text" name="nama" class="form-control" placeholder="Pegawai" value="<?= set_value('nama') ?>">
									<?php echo form_error('nama') ?>
								</div>

								<div class="form-group <?php echo form_error('alamat') ? 'has-error' : null ?>">
									<label for="">Alamat:</label>
									<textarea name="alamat" class="form-control" cols="30" rows="10"><?= set_value('alamat') ?></textarea>
									<?php echo form_error('alamat') ?>
								</div>

								<div class="form-group <?php echo form_error('jenis_kelamin') ? 'has-error' : null ?>">
									<label for="">Jenis Kelamin:</label>
									<select name="jenis_kelamin" class="form-control">
										<option value="">Pilih jenis kelamin</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
									<?php echo form_error('jenis_kelamin') ?>
								</div>


								<div class="form-group <?php echo form_error('tempat_lahir') ? 'has-error' : null ?>">
									<label for="">Tempat Lahir:</label>
									<textarea name="tempat_lahir" class="form-control" cols="30" rows="10"><?= set_value('tempat_lahir') ?></textarea>
									<?php echo form_error('tempat_lahir') ?>
								</div>

								<div class="form-group <?php echo form_error('tanggal_lahir') ? 'has-error' : null ?>">
									<label for="">Tanggal Lahir:</label>
									<input type="date" name="tanggal_lahir" class="form-control" value="<?= set_value('tanggal_lahir') ?>">
									<?php echo form_error('tanggal_lahir') ?>
								</div>

								<div class="form-group <?php echo form_error('nomor_kontak') ? 'has-error' : null ?>">
									<label for="">Nomor Kontak:</label>
									<input type="text" name="nomor_kontak" class="form-control" placeholder="Nomor Kontak" value="<?= set_value('nomor_kontak') ?>">
									<?php echo form_error('nomor_kontak') ?>
								</div>

								<div class="form-group">
									<label for="">Jabatan</label>
									<select name="jabatan_id" class="form-control">
										<option value="">-</option>
										<?php foreach ($jabatan as $jabatan) : ?>
											<option value="<?= $jabatan->jabatan_id ?>"><?= $jabatan->nama_jabatan ?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="form-group <?php echo form_error('user_id') ? 'has-error' : null ?>">
									<label for="">Username akun</label>
									<select name="user_id" class="form-control">
										<option value="">-</option>
										<?php foreach ($username as $username) : ?>
											<option value="<?= $username->user_id ?>"><?= $username->username ?></option>
										<?php endforeach; ?>
									</select>
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
