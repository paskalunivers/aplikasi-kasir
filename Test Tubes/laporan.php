<?php include 'sidebar.php'; ?>
<!-- isinya -->

<?php
$i1 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(qty) as totqty FROM laporan"));
$i2 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(qty*harga_modal) as totdpt FROM laporan"));
$i3 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(subtotal-qty*harga_modal) as totdpt1 FROM laporan"));
$i4 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(subtotal) as isub FROM laporan"));
?>

<h1 class="h3 mb-2">Data Laporan</h1>
<div class="row">
    <div class="col-6 col-sm-6 col-md-3 col-lg-3 m-pr-1 m-mb-1">
        <div class="box-laporan">
            <p class="small mb-0">Terjual</p>
            <h5 class="mb-0"><?php echo ribuan($totQty); ?></h5>
        </div>
    </div>

    <div class="col-6 col-sm-6 col-md-3 col-lg-3 m-pl-1 m-mb-1">
        <div class="box-laporan">
            <p class="small mb-0">Pendapatan</p>
            <h5 class="mb-0">Rp.<?php echo ribuan($totDpt1); ?></h5>
        </div>
    </div>

    <div class="col-6 col-sm-6 col-md-3 col-lg-3 m-pr-1">
        <div class="box-laporan">
            <p class="small mb-0">Penjualan</p>
            <h5 class="mb-0">Rp.<?php echo ribuan($totDpt); ?></h5>
        </div>
    </div>

    <div class="col-6 col-sm-6 col-md-3 col-lg-3 m-pl-1">
        <div class="box-laporan">
            <p class="small mb-0">Total</p>
            <h5 class="mb-0">Rp.<?php echo ribuan($subTotal); ?></h5>
        </div>
    </div>
</div>

<hr>

<table class="table table-striped table-sm table-bordered dt-responsive nowrap" id="table" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Invoice</th>
            <th>Qty</th>
            <th>SubTotal</th>
            <th>Pembayaran</th>
            <th>Kembalian</th>
            <th>Tanggal</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data statis untuk laporan -->
        <tr>
            <td>1</td>
            <td>INV12345</td>
            <td>50</td>
            <td>Rp. 1.500.000</td>
            <td>Rp. 2.000.000</td>
            <td>Rp. 500.000</td>
            <td>2024-12-17</td>
            <td>
                <form method="post">
                    <input type="hidden" name="nona" value="INV12345">
                    <button type="submit" name="Remove" class="btn btn-danger btn-xs">
                        <i class="fas fa-trash-alt fa-xs mr-1"></i>Hapus
                    </button>
                </form>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>INV67890</td>
            <td>30</td>
            <td>Rp. 900.000</td>
            <td>Rp. 1.500.000</td>
            <td>Rp. 600.000</td>
            <td>2024-12-17</td>
            <td>
                <form method="post">
                    <input type="hidden" name="nona" value="INV67890">
                    <button type="submit" name="Remove" class="btn btn-danger btn-xs">
                        <i class="fas fa-trash-alt fa-xs mr-1"></i>Hapus
                    </button>
                </form>
            </td>
        </tr>
    </tbody>
</table>

<?php 
if(isset($_POST['Remove'])){
    // Logika untuk "hapus" hanya akan dioperasikan di sisi frontend
    $nona = $_POST['nona'];
    // Simulasi penghapusan
    echo '<script>alert("Data ' . $nona . ' telah dihapus dari laporan!");window.location="laporan.php"</script>';
}
?>

<!-- end isinya -->
<?php include 'footer.php'; ?>
