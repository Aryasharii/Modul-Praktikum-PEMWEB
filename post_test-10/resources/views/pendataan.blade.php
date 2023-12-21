<!-- resources/views/pesan.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendataan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <h1>Form Pendataan Penduduk</h1>
    <form method="post" action="{{ route('submit-order') }}">
        @csrf
        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" required><br>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="province">Provinsi:</label>
        <input type="text" id="province" name="province" required><br>
        <label for="city">Kota:</label>
        <input type="text" id="city" name="city" required><br>
        <label for="number">Nomor:</label>
        <input type="number" id="number" name="number" required><br>
        <button type="submit">Submit Data</button>
    </form>
</body>
</html>