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
        @foreach ($kuli as $univ)
            @php
                $total = 0;
            @endphp
            Nama Dosen : {{ $univ['pengajar'] }} <br>
            Mata Kuliah : {{ $univ['matkul'] }} <br>
            Daftar Mahasiswa :
            @foreach ($univ['mahasiswa'] as $maha)
                <li>{{ $maha['nama'] }} <br>
                    Nilai Skripsi : {{ $maha['nilai'] }}
                </li>
                <br>
                @php $total += $maha['nilai'] @endphp
            @endforeach
            @php $rata_rata = $total / count($univ['mahasiswa']) @endphp
            Rata Nilai Skripsi : {{ $maha['nama'] }} : {{ $rata_rata }}

            <hr>
        @endforeach
    </fieldset>
</body>

</html>
