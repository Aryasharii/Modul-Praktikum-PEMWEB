<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <script>
    const params = new URLSearchParams(window.location.search);
    const error = params.get('error');
    if (error === '1') {
      alert('Login gagal. Silakan coba lagi.');
    }
  </script>
</head>
<body>
  <nav>
    <h1>Website Penjualan Ikan</h1>
  </nav>
  <form action="{{ route('login.submit') }}" method="post">
    @csrf
    <label for="username">Email (email):</label>
    <input type="text" name="username" id="username" required />
    <label for="password">Password (min. 8 karakter):</label>
    <input type="password" name="password" id="password" required />
    <input type="submit" value="Login" />
    <small>Belum registrasi? <a href="/register">Registrasi disini</a></small>
  </form>
</body>
</html>
