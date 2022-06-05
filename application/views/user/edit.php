<section class="content-header">

	<ol class="breadcrumb">
		<li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Data User</li>
	</ol>

</section>

<!-- Main content -->
<section class="content" style="margin-top: 30px;">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Edit User</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<form action="" method="POST">


								<input type="hidden" name="user_id" value="<?= $user->user_id ?>">

								<div class="form-group <?php echo form_error('username') ? 'has-error' : null ?>">
									<label for="">Username</label>
									<input type="text" name="username" class="form-control" placeholder="Username" value="<?= $this->input->post('username') ??  $user->username  ?>">
									<?php echo form_error('username') ?>
								</div>

								<div class="form-group  <?php echo form_error('password') ? 'has-error' : null ?>">
									<label for="">Password</label> <small>(Biarkan kosong jika tidak diganti)</small>
									<input type="password" name="password" class="form-control" placeholder="Password" value="<?= $this->input->post('password') ?>">
									<?php echo form_error('password') ?>
								</div>

								<div class="form-group <?php echo form_error('passconf') ? 'has-error' : null ?>">
									<label for="">Password Confirmation</label>
									<input type="password" name="passconf" class="form-control" placeholder="Password Confirmation" value="<?= $this->input->post('passconf') ?>">
									<?php echo form_error('passconf') ?>
								</div>


								<div class="form-group <?php echo form_error('name') ? 'has-error' : null ?>">
									<label for="">Name</label>
									<input type="text" name="name" class="form-control" placeholder="Name" value="<?= $this->input->post('name') ?? $user->name ?>">
									<?php echo form_error('name') ?>
								</div>



								<div class="form-group <?php echo form_error('level') ? 'has-error' : null ?>">
									<label for="">Level</label>
									<select name="level" class="form-control"><s></s>
										<?php $level = $this->input->post('level') ? $this->input->post('level') : $user->level ?>
										<option value="1">Admin</option>
										<option value="2" <?= $level == 2 ? 'selected' : null ?>>User</option>
									</select>
									<?php echo form_error('level') ?>
								</div>

								<div class="form-group">
									<label for="">Approve</label>
									<select name="approve" class="form-control">
										<option value="<?= $user->approve ?>">
											<?php

											if ($user->approve == 0) {
												echo 'tidak di izinkan login';
											} else {
												echo 'di izinkan login';
											}

											?>
										</option>
										<option value="1">Izin login</option>
										<option value="0">Jangan Izinkan</option>
									</select>
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
