<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>main</title>
    <!-- menghubungkan ke css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav>
      <h1>Website Penjualan Ikan</h1>
      <ul>
        <li>
          <a href="index">Beranda</a>
        </li>
        <li>
          <a href="kategori">Kategori</a>
        </li>
        <li>
          <a href="">Keranjang</a>
        </li>
        <li>
          <a href="">Pesanan</a>
        </li>
        <li>
          <a href="">Akun</a>
        </li>
      </ul>
      <form action="#">
        <input type="text" name="cari" id="cari" placeholder="Cari...." />
        <input type="submit" value="Cari" />
      </form>
    </nav>

    <div class="content-grid">
      <div class="image-container">
        <img src="image/ikan1.jpg" alt="ikan 1" width="100px" />
      </div>
      <div class="text-container">
        <h2>Ikan Segar</h2>
        <p>
          Dikirim langsung dari nelayan lokal ke depan pintu Anda dalam kondisi
          segar dan berkualitas tinggi
        </p>
      </div>
    </div>

    <div class="content-grid">
      <div class="image-container">
        <img src="image/ikan2.jpg" alt="ikan 2" width="100px" />
      </div>
      <div class="text-container">
        <h2>Keamanan</h2>
        <p>
          Keamanan pembayaran dan keamanan data Anda adalah prioritas utama kami
        </p>
      </div>
    </div>

    <div class="content-grid">
      <div class="image-container">
        <img src="image/ikan3.jpg" alt="ikan 3" width="100px" />
      </div>
      <div class="text-container">
        <h3>Gratis Ongkir</h3>
        <p>
          Gratis ongkir untuk pembelian diatas Rp. 100.000 khusus daerah Jakarta
        </p>
      </div>
    </div>

    <hr />
    <div class="content-grid">
      <div class="rating-container">
        <h2>Rating pelayanan</h2>
        <label for="">Rating</label>
        <input type="radio" name="rating" value="1" />1
        <input type="radio" name="rating" value="2" />2
        <input type="radio" name="rating" value="3" />3
        <input type="radio" name="rating" value="4" />4
        <input type="radio" name="rating" value="5" />5
        <br />
        <label for="">Komentar</label>
        <textarea name="komentar" id="komentar" cols="30" rows="10"></textarea>
        <br />
        <input type="submit" value="kirim" />
      </div>
      <div class="kontak-container">
        <h2>Kontak Kami</h2>
        <table>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td>Penjualan Ikan</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>Jl. Madrasah Dalam no. 30, Jakarta Barat</td>
          </tr>
          <tr>
            <td>Telepon</td>
            <td>:</td>
            <td>021-12345678</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>Penjualan1kan@email.com</td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
