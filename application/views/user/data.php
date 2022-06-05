<section class="content-header mb-3
">

	<a href="<?= site_url('user/tambah') ?>" class="btn btn-sm btn-primary">
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


<!-- Main content -->
<section class="content" style="margin-top: 30px;">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">List User</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table text-center table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Username</th>
								<th>Name</th>
								<th>Aprrove</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($user->result() as $key => $data) : ?>
								<tr>
									<td><?= $key + 1 ?></td>
									<td><?= $data->username ?></td>
									<td><?= $data->name  ?></td>
									<td><?php
											if ($data->approve  == null) {
										
											}else{
												echo $data->approve;
											}
										?></td>
									<td>
										<a href="<?= site_url('user/edit/' . $data->user_id) ?>" class="btn btn-sm btn-warning">
											Edit
										</a>

										<a href="<?= site_url('user/delete/' . $data->user_id) ?>" class="btn btn-sm btn-danger">
											Hapus
										</a>
									</td>



								</tr>
							<?php endforeach; ?>
						</tbody>

					</table>
				</div>
				<!-- /.box-body -->
			</div>




















</section>
