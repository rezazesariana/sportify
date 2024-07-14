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
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
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
        <a href="<?= base_url('admin/user/add') ?>" class="btn btn-sm btn-outline-secondary">Tambah User</a>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID User</th>
              <th>Nama User</th>
              <th>Alamat</th>
              <th>No Telpon</th>
              <th>Email</th>
              <th style="width:10%">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach($users as $user): ?>
                <tr>
                  <td><?= $user['user_id'] ?></td>
                  <td><?= $user['nama'] ?></td>
                  <td><?= $user['alamat'] ?></td>
                  <td><?= $user['no_telp'] ?></td>
                  <td><?= $user['email'] ?></td>
                  <td>
                    <a href="<?= base_url('admin/user/'.$user['user_id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <a href="#" data-href="<?= base_url('admin/user/'.$user['user_id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                  </td>
                </tr>
              <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Anda yakin?</h2>
        <p>Data akan dihapus</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
  $("#delete-button").attr("href", el.dataset.href);
  $("#confirm-dialog").modal('show');
}
</script>