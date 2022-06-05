<section class="content-header">



	<!-- <div class="row">
		<div class="col-lg-3">
			<a href="<?= site_url('suratmasuk/tambah') ?>" class="btn btn-sm btn-danger" style="margin-top: 50px;">
				Cetak PDF
			</a>

			<a href="<?= site_url('suratmasuk/tambah') ?>" class="btn btn-sm btn-success" style="margin-top: 50px;">
				Cetak Excel	
			</a>
		</div>
	</div> -->

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
					<h3 class="box-title">Data Laporan Surat Keluar</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
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
								</tr>
							</thead>

							<tbody>
								<?php foreach ($surat_keluar as $key => $sk) : ?>
									<tr>
										<td>
											<?= $key + 1 ?>
										</td>
										<td><?= $sk['kode_surat'] ?></td>
										<td><?= $sk['nomor_surat'] ?></td>
										<td>
											<iframe src="<?= base_url('/uploads/' . $sk['file_surat']) ?>" width="100%" frameborder="0"></iframe>
										</td>
										<td>
											<?= $sk['tujuan_surat'] ?>
										</td>
										<td>
											<?= $sk['tanggal_pengiriman'] ?>
										</td>
										<td>
											<?= $sk['perihal_isi_surat'] ?>
										</td>
										<td>
											<?= $sk['perihal_isi_surat'] ?>
										</td>
										<td>
											<?= $sk['instruksi_selanjutnya'] ?>
										</td>

										<td>
											<?= $sk['tanggal_penyelsaian'] ?>
										</td>

									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
				</div>
				<!-- /.box-body -->
			</div>














</section>
