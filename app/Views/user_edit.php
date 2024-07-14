<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Edit User</h3>
      </div>
      <form action="" method="post">
        <div class="card-body">
          <input type="hidden" name="id" value="<?= $user['user_id'] ?>" />
            <div class="form-group">
              <label for="nama_kategori">Nama User</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama User" value="<?= $user['nama'] ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat" value="<?= $user['alamat'] ?>" required>
            </div>
            <div class="form-group">
                <label for="no_telp">Nomor Telpon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Enter Nomor Telpon" value="<?= $user['no_telp'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?= $user['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="<?= $user['password'] ?>" required>
            </div>
          </div>
          <!--/.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->