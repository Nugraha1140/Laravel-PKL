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
        <legend>
            Data Siswa
        </legend>
        @foreach ($siswa as $murid)
            Nama : {{ $murid['name'] }} <br>
            Umur : {{ $murid['age'] }} <br>

            Status :
            @if ($murid['age'] > 17)
                Anda Berhak Mendapat KTP
            @else
                Anda Belum Berhak Mendapatkan KTP
            @endif
            <br>
            Hobi :
            @foreach ($murid['hobi'] as $hobi)
                <li>{{ $hobi }}</li>
            @endforeach
            <hr>
        @endforeach
    </fieldset>
</body>

</html>
