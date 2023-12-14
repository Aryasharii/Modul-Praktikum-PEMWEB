<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['buku']) && isset($_POST['tgl_pinjam']) && isset($_COOKIE['username'])) {
        $buku = $_POST['buku'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $nama = $_COOKIE['username'];

        $data_peminjaman = file('data_peminjaman.txt', FILE_IGNORE_NEW_LINES);
        foreach ($data_peminjaman as $data) {
            $detail = explode('|', $data);
            if ($detail[1] === $buku) {
                echo "Buku sudah dipinjam sebelumnya.";
                exit();
            }
        }

        $data_peminjaman_baru = "$nama|$buku|$tgl_pinjam" . PHP_EOL;
        file_put_contents('data_peminjaman.txt', $data_peminjaman_baru, FILE_APPEND);

        echo "<h2>Informasi Peminjaman:</h2>";
        echo "Nama Peminjam: $nama <br>";
        echo "Buku yang Dipinjam: $buku <br>";
        echo "Tanggal Peminjaman: $tgl_pinjam <br>";
    } else {
        echo "Harap lengkapi semua informasi yang dibutuhkan.";
    }
}
?>
