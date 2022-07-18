<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Data Post</legend>
        <br>
        <marquee behavior="" direction="80">

            <table border="1">
                <tr style="background-color: aqua">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Sekolah</th>
                    <th>Umur</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($siswa as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['alamat'] }}</a></td>
                        <td>{{ $data['agama'] }}</td>
                        <td>{{ $data['sekolah'] }}</td>
                        <td>{{ $data['umur'] }}</td>
                    </tr>
                @endforeach
            </table>
        </marquee>
    </fieldset>
</body>

</html>
