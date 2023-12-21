<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dasboard-Admin</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <h1>Data Sudah Tercatat!</h1>
    <p>NIK: {{ $data['nik'] }}</p>
    <p>Nama: {{ $data['name'] }}</p>
    <p>Provinsi: {{ $data['province'] }}</p>
    <p>Kota: {{ $data['city'] }}</p>
    <p>Nomor Telepon: {{ $data['number'] }}</p>
</body>
</html>
