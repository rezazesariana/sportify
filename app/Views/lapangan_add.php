<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Lapangan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            <li class="breadcrumb-item active">Lapangan</li>
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
      <h3 class="card-title">Form Tambah Lapangan</h3>
      </div>
      <form action="/admin/lapangan/create" method="post">
        <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama Lapangan</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama Lapangan" required>
            </div>
            <div class="form-group">
              <label for="kategori_id">Kategori</label>
              <select class="form-control" name="kategori_id" id="kategori_id">
                <?php foreach ($categories as $category) : ?>
                    <option value=<?= $category['kategori_id']?>><?= $category['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Enter Lokasi" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Enter Harga" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea rows="4" class="form-control" cols="50" name="deskripsi" placeholder="Enter Deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi_pendek">Deskripsi Pendek</label>
                <textarea rows="4" class="form-control" cols="50" name="deskripsi_pendek" placeholder="Enter Deskripsi Pendek"></textarea>
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