<?php include 'sidebar.php'; ?>

<!-- isinya -->
<form method="post">
<div class="row">

  <div class="col-sm-4 col-md-4 col-lg-3 mb-3">
    <label class="small text-muted mb-1">Kode Produk</label>
    <div class="position-relative">
    <input type="text" name="Ckdproduk" class="form-control form-control-sm" list="datalist1" required autofocus>
    <datalist id="datalist1">
        <!-- Daftar produk dari database di sini, jika perlu -->
        <option value="P001">P001</option>
        <option value="P002">P002</option>
    </datalist>
    </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-3 mb-3">
    <label class="small text-muted mb-1">Nama Produk</label>
    <input type="text" name="Cnproduk" id="nama_produk" class="form-control form-control-sm bg-light" readonly>
  </div>
  <div class="col-8 col-sm-4 col-md-4 col-lg-2 mb-3">
    <label class="small text-muted mb-1">Harga</label>
    <input type="number" name="Charga" placeholder="0" id="harga_jual" class="form-control form-control-sm bg-light" readonly>
  </div>
  <div class="col-4 col-sm-4 col-md-4 col-lg-1 mb-3">
    <label class="small text-muted mb-1">Qty</label>
    <input type="number" name="Cqty" id="Iqty" placeholder="0" class="form-control form-control-sm" required>
  </div>
  <div class="col-sm-8 col-md-8 col-lg-3 mb-3">
    <label class="small text-muted mb-1">Subtotal</label>
    <div class="input-group">
      <input type="number" name="Csubs" placeholder="0" id="Isubtotal" class="form-control form-control-sm bg-light mr-2" readonly>
    <div class="input-group-append">
      <button type="reset" class="btn btn-danger btn-sm mr-2">Reset</button>
      <button type="submit" name="InputCart" class="btn btn-primary btn-sm">Simpan</button>
    </div>
  </div>
  </div>

</div><!-- end row -->
</form>

<div class="bg-purple p-2 text-white" style="border-radius:0.25rem;">
  <h5 class="mb-0">No. Invoice : <?php echo "INV12345"; // Placeholder untuk nomor invoice ?></h5>
</div>

<table class="table table-striped table-sm table-bordered dt-responsive nowrap print-none" id="cart" width="100%">
<thead>
  <tr>
    <th>#</th>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Qty</th>
    <th>Subtotal</th>
    <th>Opsi</th>
  </tr>
</thead>
<tbody>
  <!-- Data cart yang sudah ditambahkan akan tampil di sini -->
  <tr>
    <td>1</td>
    <td>P001</td>
    <td>Produk A</td>
    <td>Rp. 10,000</td>
    <td>2</td>
    <td>Rp. 20,000</td>
    <td><a class="btn btn-danger btn-xs" href="#"><i class="fas fa-trash-alt fa-xs mr-1"></i>Hapus</a></td>
  </tr>
  <!-- Tambahkan lebih banyak data sesuai kebutuhan -->
</tbody>
</table>

<div class="bg-light p-3" style="border-radius:0.25rem;">
  <div class="row gy-3 align-items-center row-home">

    <div class="col-md-8 col-lg-6 mb-2">
    <form method="post">
      <div class="row">
        <label for="pembayaran" class="col-4 col-sm-4 col-md-4 col-lg-3 col-form-label col-form-label-sm mb-2">Pembayaran</label>
        <div class="col-8 col-sm-8 col-md-8 col-lg-9 mb-2">
          <input type="text" name="pembayaran" class="form-control form-control-sm" id="pembayaran" placeholder="0" required>
        </div>
        <label for="kembalian" class="col-4 col-sm-4 col-md-4 col-lg-3 col-form-label col-form-label-sm mb-2">Kembalian</label>
        <div class="col-8 col-sm-8 col-md-8 col-lg-9 mb-2">
          <input type="text" class="form-control form-control-sm bg-light" id="kembalian" placeholder="0" readonly>
        </div>
        <div class="col-sm-12 text-right">
          <button class="btn btn-danger btn-sm px-3 mr-2" disabled>
            <i class="fa fa-trash-alt mr-1"></i>Hapus Semua
          </button>
          <button class="btn btn-primary btn-sm px-3" disabled>
            <i class="fa fa-check mr-1"></i>Simpan
          </button>
        </div>
      </div>
      </form>
    </div>

    <div class="col-md-4 col-lg-6 mb-2 text-primary text-right">
      <p class="small text-muted mb-0">Total Item</p>
      <h3 class="mb-0" style="font-weight:600;">Rp. 20,000</h3>
    </div>
    
  </div>
</div>
<!-- end isinya -->

</div><!-- end container-fluid -->
