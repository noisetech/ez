<section class="content-header">


	<?php if ($this->session->userdata('level') == '1') : ?>
		
	<?php else : ?>
		<a href="<?= site_url('suratmasuk/tambah') ?>" class="btn btn-sm btn-primary">
			Tambah data
		</a>
	<?php endif; ?>




	<ol class="breadcrumb">
		<li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Data Surat</li>
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
					<h3 class="box-title">List Surat Masuk</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table id="example2" class="table text-center table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Surat</th>
									<th>Nomor Surat</th>
									<th>File Surat</th>
									<th>Tujuan Surat</th>
									<th>Tanggal Pengiriman</th>
									<th>Ditujukan Kepada</th>
									<th>Perihal Surat</th>
									<th>Instruksi Selanjutnya</th>
									<th>Tanggal Penyelsian</th>
									<th>Jabatan</th>
									<th>Aksi</th>
								</tr>
							</thead>

							<tbody>
								<?php foreach ($surat_masuk as $key => $sm) : ?>
									<tr>
										<td>
											<?= $key + 1 ?>
										</td>
										<td><?= $sm['kode_surat'] ?></td>
										<td><?= $sm['nomor_surat'] ?></td>
										<td>
											<iframe src="<?= base_url('/uploads/' . $sm['file_surat']) ?>" width="100%" frameborder="0"></iframe>
										</td>
										<td>
											<?= $sm['tujuan_surat'] ?>
										</td>
										<td>
											<?= $sm['tanggal_pengiriman'] ?>
										</td>
										<td>
											<?= $sm['perihal_isi_surat'] ?>
										</td>
										<td>
											<?= $sm['perihal_isi_surat'] ?>
										</td>
										<td>
											<?= $sm['instruksi_selanjutnya'] ?>
										</td>

										<td>
											<?= $sm['tanggal_penyelsaian'] ?>
										</td>

										<td>
											<?= $sm['nama_jabatan'] ?>
										</td>

										<?php if ($this->session->userdata('level') == '1') : ?>

										<?php else : ?>
											<td>
												<a href="<?= base_url('suratmasuk/edit/' . $sm['surat_masuk_id']) ?>" class="btn btn-sm btn-warning">
													Edit
												</a>

												<a href="<?= base_url('suratmasuk/hapus/' . $sm['surat_masuk_id']) ?>" class="btn btn-sm btn-danger">
													Hapus
												</a>
											</td>
										<?php endif; ?>



									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			</div>














</section>
