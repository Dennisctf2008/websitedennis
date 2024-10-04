<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];

    // Simpan ke database atau proses API top-up
    // Contoh simulasi respons sukses
    echo "Top-up berhasil untuk nomor $phone dengan jumlah Rp $amount.";
}
?>