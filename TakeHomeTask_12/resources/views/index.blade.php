<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arya (THT12) | Data Covid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Negara</th>
                    <th scope="col">Update Terakhir</th>
                    <th scope="col">Terkonfirmasi</th>
                    <th scope="col">Meninggal</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Active</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 0;
                @endphp
                @foreach ($data as $datacorona)
                @php
                    $no++;
                @endphp
                <tr>
                    <th scope="row">{{$no}}</th>
                    <td>{{$datacorona['attributes']['Country_Region']}}</td>
                    <td>{{$datacorona['attributes']['Last_Update']}}</td>
                    <td>{{$datacorona['attributes']['Confirmed']}}</td>
                    <td>{{$datacorona['attributes']['Deaths']}}</td>
                    <td>{{$datacorona['attributes']['Recovered']}}</td>
                    <td>{{$datacorona['attributes']['Active']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>