<?php
error_reporting(0);

$resi = $_POST['pesan'];
$nama = $_POST['nama'];
$berat = $_POST['berat'];
$nama_brg = $_POST['barang'];
$kode_kota = $_POST['kota'];
$kode_paket = $_POST['paket'];

$harga_kirim = array(
    'Banten' => 35000,
    'Jakarta' => 23000,
    'Tangerang' => 25000,
    'Bogor' => 18000,
    'Bandung' => 11000,
    'Yogyakarta' => 20000,
    'Purwokerto' => 21000,
    'Surabaya' => 37000,
    'Banyuwangi' => 42000,
);

$nama_kota = array(
    'Banten' => 'Banten',
    'Jakarta' => 'Jakarta',
    'Tangerang' => 'Tangerang',
    'Bogor' => 'Bogor',
    'Bandung' => 'Bandung',
    'Yogyakarta' => 'Yogyakarta',
    'Purwokerto' => 'Purwokerto',
    'Surabaya' => 'Surabaya',
    'Banyuwangi' => 'Banyuwangi',
);

$diskon_kirim = array(
    'Tidak Ada Paket' => array('diskon' => 0, 'berat' => 0),
    'Paket Ceria' => array('diskon' => 10, 'berat' => 5),
    'Paket Murah Meriah' => array('diskon' => 15, 'berat' => 7),
    'Paket War Biazah' => array('diskon' => 5, 'berat' => 3),
    'Paket Asik Asik' => array('diskon' => 30, 'berat' => 10),
);

$total = $harga_kirim[$kode_kota] * $berat;
$diskon = $diskon_kirim[$kode_paket]['diskon'];
$ketentuan_berat = $diskon_kirim[$kode_paket]['berat'];

if ($berat >= $ketentuan_berat) {
    $potongan = ($diskon * $total) / 100;
} else {
    $potongan = 0;
}

$total_bayar = $total - $potongan;

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

$pesan = generateRandomString();
?>

<hr>
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">LAPORAN PENGIRIMAN BARANG</h1>
</div>
<hr>
<label>Tanggal Transaksi : <?php echo date('l, d m y') ?></label><br>
<label for="">Nomor Pengiriman : <?php if (isset($_POST['nama'])) {
        echo "$pesan";
    } ?></label> <br>
<label for="">Nama Pengirim: <?php echo "$nama" ?> </label> <br>

<div class="table-responsive">
    <table class="table table-stripped table-bordered">
        <thead>
            <tr align="center">
                <th>Nama Barang</th>
                <th>Berat Barang</th>
                <th>Kota Tujuan</th>
                <th>Paket</th>
                <th>Diskon</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nama_brg; ?></td>
                <td><?php echo "$berat"; ?> Kg</td>
                <td><?php echo $nama_kota[$kode_kota]; ?></td>
                <td><?php echo "$kode_paket"; ?></td>
                <td><?php echo $diskon_kirim[$kode_paket]['diskon'] . "%"; ?></td>
                <td><?php echo "RP." . number_format($total, 0, ",", ",") . ""; ?></td>
            </tr>
            <tr>
                <td colspan="5" align="center">Total Diskon</td>
                <td><?php echo "RP." . number_format($potongan, 0, ",", ",") . ""; ?></td>
            </tr>
            <tr>
                <td colspan="5" align="center">Total Pembayaran</td>
                <td><?php echo "RP." . number_format($total_bayar, 0, ",", ",") . ""; ?></td>
            </tr>
        </tbody>
    </table>
</div>
