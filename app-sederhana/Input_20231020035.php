<form method="POST">
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-5">FORM PENGIRIMAN BARANG</h1>
</div>

<div class="form-group">
    <label>Nama Pengirim</label>
    <input type="text" name="nama" class="form-control">
</div>

<div class="form-group">
    <label>Kota Tujuan</label>
    <select name="kota" class="form-control">
        <?php
            $kota = ['Banten','Jakarta','Tanggerang','Bogor','Bandung','Yogyakarta','Purwokerto','Surabaya','Banyuwangi'];
            for($i=0; $i < count($kota); $i++){
                echo "<option value='".$kota[$i]."'>".$kota[$i]."</option>";
            }
        ?>
    </select>
</div>

<div class="form-group">
    <label>Pilih Paket</label>
    <select name="paket" class="form-control">
        <?php
            $paket = ['Tidak Ada Paket','Paket Ceria','Paket Murah Meriah','Paket War Biazah','Paket Asik Asik'];
            for($i=0; $i < count($paket); $i++){
                echo "<option value='".$paket[$i]."'>".$paket[$i]."</option>";
            }
        ?>
    </select>
</div>

<div class="form-group">
    <label>Nama Barang</label>
    <input type="text" name="barang" class="form-control">
</div>


<div class="form-group">
    <label>Berat Barang</label>
    <input type="text" name="berat" class="form-control">
</div>

<div class="form-group">
    <input type="submit" name="process" class="btn btn-primary btn-block" value="Proses Pengiriman">
</div>

</form>