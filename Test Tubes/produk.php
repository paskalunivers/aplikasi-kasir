<?php include 'sidebar.php'; ?>
<!-- isinya -->
<h1 class="h3 mb-0">
    Data Produk
    <button class="btn btn-primary btn-sm border-0 float-right" type="button" data-toggle="modal" data-target="#TambahProduk">Tambah Produk</button>
</h1>
<hr>
<table class="table table-striped table-sm table-bordered dt-responsive nowrap" id="table" width="100%">
<thead>
  <tr>
    <th>No</th>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Harga Modal</th>
    <th>Harga Jual</th>
    <th>Tgl Input</th>
    <th>Opsi</th>
  </tr>
</thead>
<tbody>
  <!-- Contoh data statis, bisa diubah sesuai kebutuhan -->
  <tr>
    <td>1</td>
    <td>P001</td>
    <td>Produk 1</td>
    <td>Rp. 10.000</td>
    <td>Rp. 15.000</td>
    <td>2024-12-17</td>
    <td>
        <button type="button" class="btn btn-primary btn-xs mr-1" data-toggle="modal" data-target="#EditProduk1">
        <i class="fas fa-pencil-alt fa-xs mr-1"></i>Edit
        </button>
        <button class="btn btn-danger btn-xs">
        <i class="fas fa-trash-alt fa-xs mr-1"></i>Hapus</button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>P002</td>
    <td>Produk 2</td>
    <td>Rp. 20.000</td>
    <td>Rp. 30.000</td>
    <td>2024-12-17</td>
    <td>
        <button type="button" class="btn btn-primary btn-xs mr-1" data-toggle="modal" data-target="#EditProduk2">
        <i class="fas fa-pencil-alt fa-xs mr-1"></i>Edit
        </button>
        <button class="btn btn-danger btn-xs">
        <i class="fas fa-trash-alt fa-xs mr-1"></i>Hapus</button>
    </td>
  </tr>
</tbody>
</table>

<!-- Modal Edit Produk -->
<div class="modal fade" id="EditProduk1" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-0">
        <form method="post">
      <div class="modal-header bg-purple">
        <h5 class="modal-title text-white">Edit Produk</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label class="samll">Kode Produk :</label>
            <input type="hidden" name="idproduk" value="1">
            <input type="text" name="Edit_Kode_Produk" value="P001" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="samll">Nama Produk :</label>
            <input type="text" name="Edit_Nama_Produk" value="Produk 1" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="samll">Harga Modal :</label>
            <input type="number" placeholder="0" name="Edit_Harga_Modal" value="10000" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="samll">Harga Jual :</label>
            <input type="number" placeholder="0" name="Edit_Harga_Jual" value="15000" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="SimpanEdit">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Tambah Produk -->
<div class="modal fade" id="TambahProduk" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-0">
        <form method="post">
      <div class="modal-header bg-purple">
        <h5 class="modal-title text-white">Tambah Produk</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label class="samll">Kode Produk :</label>
            <input type="text" name="Tambah_Kode_Produk" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="samll">Nama Produk :</label>
            <input type="text" name="Tambah_Nama_Produk" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="samll">Harga Modal :</label>
            <input type="number" placeholder="0" name="Tambah_Harga_Modal" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="samll">Harga Jual :</label>
            <input type="number" placeholder="0" name="Tambah_Harga_Jual" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" name="TambahProduk" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- end isinya -->
<?php include 'footer.php'; ?>
