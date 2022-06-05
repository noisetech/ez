<section class="content-header">



    <a href="<?= site_url('pegawai/tambah') ?>" class="btn btn-sm btn-primary">
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
                    <h3 class="box-title">List Pegawai</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table text-center table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pegawai->result() as $key => $data) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->nama_jabatan ?></td>
                                <td>
            
                                    <a href="<?= site_url('/pegawai/edit/' . $data->id) ?>"
                                        class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    <a href="<?= site_url('pegawai/delete/' . $data->id) ?>"
                                        class="btn btn-sm btn-danger">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>



















</section>
