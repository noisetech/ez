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
                    <h3 class="box-title">List User</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form action="" method="POST">


                                <div class="form-group <?php echo form_error('username') ? 'has-error' : null ?>">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username"
                                        value="<?= set_value('username') ?>">
                                    <?php echo form_error('username') ?>
                                </div>

                                <div class="form-group  <?php echo form_error('password') ? 'has-error' : null ?>">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        value="<?= set_value('password') ?>">
                                    <?php echo form_error('password') ?>
                                </div>

                                <div class="form-group <?php echo form_error('passconf') ? 'has-error' : null ?>">
                                    <label for="">Password Confirmation</label>
                                    <input type="password" name="passconf" class="form-control"
                                        placeholder="Password Confirmation" value="<?= set_value('passconf') ?>">
                                    <?php echo form_error('passconf') ?>
                                </div>


                                <div class="form-group <?php echo form_error('name') ? 'has-error' : null ?>">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        value="<?= set_value('name') ?>">
                                    <?php echo form_error('name') ?>
                                </div>

                                <div class="form-group <?php echo form_error('address') ? 'has-error' : null ?>">
                                    <label for="">Address</label>
                                    <textarea name="address" class="form-control" cols="30" rows="10"
                                        placeholder="Type Your Adddress"><?= set_value('address') ?></textarea>
                                    <?php echo form_error('address') ?>
                                </div>

                                <div class="form-group <?php echo form_error('level') ? 'has-error' : null ?>">
                                    <label for="">Level</label>
                                    <select name="level" class="form-control">
                                        <option value="">Pilih Level</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                    <?php echo form_error('level') ?>
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