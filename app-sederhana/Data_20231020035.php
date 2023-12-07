<?php
function data_kota(){
    $kota = [
        [
            'kode' => 'K001',
            'nama' => 'Banten',
            'harga' => '35000',
        ],
        [
            'kode' => 'K002',
            'nama' => 'Jakarta',
            'harga' => '23000',
        ],
        [
            'kode' => 'K003',
            'nama' => 'Tanggerang',
            'harga' => '25000',
        ],
        [
            'kode' => 'K004',
            'nama' => 'Bogor',
            'harga' => '18000',
        ],
        [
            'kode' => 'K005',
            'nama' => 'Bandung',
            'harga' => '11000',
        ],
        [
            'kode' => 'K006',
            'nama' => 'Yogyakarta',
            'harga' => '20000',
        ],
        [
            'kode' => 'K007',
            'nama' => 'Purwokerto',
            'harga' => '21000',
        ],
        [
            'kode' => 'K008',
            'nama' => 'Surabaya',
            'harga' => '37000',
        ],
        [
            'kode' => 'K009',
            'nama' => 'Banyuwangi',
            'harga' => '42000',
        ]
    ];

    foreach($kota as $val) {
        echo"
            <tr>
                <td>$val[kode]</td>
                <td>$val[nama]</td>
                <td>Rp.".number_format($val['harga'],0,",",",")."</td>
            </tr>";
    }
}

function data_paket(){
    $paket = [
        [
            'kode' => 'P000',
            'nama' => 'Tidak Ada Paket',
            'diskon' => 0,
            'berat' => 0
        ],
        [
            'kode' => 'P01Z',
            'nama' => 'Paket Ceria',
            'diskon' => 10,
            'berat' => 5
        ],
        [
            'kode' => 'P02X',
            'nama' => 'Paket Murah Meriah',
            'diskon' => 15,
            'berat' => 7
        ],
        [
            'kode' => 'P03Y',
            'nama' => 'Paket War Biazah',
            'diskon' => 5,
            'berat' => 3
        ],
        [
            'kode' => 'P04V',
            'nama' => 'Paket Asik Asik',
            'diskon' => 30,
            'berat' => 10
        ],
    ];

    foreach($paket as $val) {
        echo"
            <tr>
                <td>$val[kode]</td>
                <td>$val[nama]</td>
                <td>$val[diskon]%</td>
                <td>$val[berat] Kg</td>
            </tr>";
    }
}
?>
