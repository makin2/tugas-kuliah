<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">DATA KOTA PENGIRIMAN</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr align="center">
                <th>Kode Kota</th>
                <th>Nama Kota</th>
                <th>Harga Pengiriman /kg</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "Data_20231020035.php";
                data_kota();
            ?>
        </tbody>
    </table>

    <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">DATA PAKET PENGIRIMAN</h1>
</div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr align="center">
                <th>Kode Paket</th>
                <th>Nama Paket</th>
                <th>Diskon</th>
                <th>Ketentuan Diskon</th>
            </tr>
        </thead>
        <tbody>
            <?php
                data_paket();
            ?>
        </tbody>
    </table>
</div>
