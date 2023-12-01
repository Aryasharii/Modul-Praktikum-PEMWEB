<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil IPK</title>
  </head>
  <body>
    <?php
    // fungsi untuk menghitung IPK berdasarkan nilai mata kuliah
    function hitungIPK($nilai_matkul) {
      if ($nilai_matkul >= 80) {
        return 4.0;
      } elseif ($nilai_matkul >= 75 && $nilai_matkul < 80) {
        return 3.7;
      } elseif ($nilai_matkul >= 70 && $nilai_matkul < 75) {
        return 3.3;
      } elseif ($nilai_matkul >= 65 && $nilai_matkul < 70) {
        return 3.0;
      } elseif ($nilai_matkul >= 60 && $nilai_matkul < 65) {
        return 2.7;
      } elseif ($nilai_matkul >= 55 && $nilai_matkul < 60) {
        return 2.3;
      } elseif ($nilai_matkul >= 45 && $nilai_matkul < 55) {
        return 2.0;
      } elseif ($nilai_matkul >= 35 && $nilai_matkul < 45) {
        return 1.0;
      } else {
        return 0.0;
      }
    }

    $total_nilai = 0;
    $jumlah_matkul = count($_POST);

    //perulangan untuk itung total nilai
    foreach ($_POST as $key => $value) {
      if (strpos($key, 'nilai_matkul') === 0) {
        $total_nilai += hitungIPK($value);
      }
    }


    //trus IPK tiap matkul dirata-ratain 
    $ipk = ($jumlah_matkul > 0) ? $total_nilai / $jumlah_matkul : 0.0;

    $status_kelulusan = ($ipk >= 2.0) ? "Lulus" : "Tidak Lulus";
    ?>

    <h2>Hasil Perhitungan IPK</h2>
    <p>IPK: <?php echo number_format($ipk, 2); ?></p>
    <p>Status Kelulusan: <?php echo $status_kelulusan; ?></p>
    <a href="index.html">Kembali</a>
  </body>
</html>
