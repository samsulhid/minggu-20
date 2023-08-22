<?php
for ($angka = 1; $angka <= 50; $angka++) {
    if ($angka % 2 == 0) {
        $keterangan = "genap";
    } else {
        $keterangan = "ganjil";
    }
    echo "Angka $angka adalah bilangan $keterangan<br>";
}
?>
