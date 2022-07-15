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
        @foreach ($rapot as $hasil)
            @php
                $total = 0;
            @endphp
            Nama Siswa : {{ $hasil['nama'] }} <br>
            Jurusan : {{ $hasil['jurusan'] }} <br>
            @foreach ($hasil['mapel'] as $map)
                <li>{{ $map['pelajaran'] }} <br>
                    Nilai: {{ $map['nilai'] }}
                </li>
                <br>
                @php $total += $map['nilai'] @endphp
            @endforeach
            Total Nilai : {{ $total }} <br>
            @php $rata_rata = $total / count($hasil['mapel']) @endphp
            Rata Nilai: {{ $rata_rata }} <br>
            @php
                $Grade;
                if ($rata_rata >= 85) {
                    $Grade = 'A';
                } elseif ($rata_rata >= 75) {
                    $Grade = 'B';
                } elseif ($rata_rata >= 60) {
                    $Grade = 'C';
                } elseif ($rata_rata >= 50) {
                    $Grade = 'D';
                } elseif ($rata_rata >= 49) {
                    $Grade = 'E';
                } else {
                    $Grade = 0;
                }
            @endphp
            Grade : {{ $Grade }} <br>

            <hr>
        @endforeach
    </fieldset>
</body>

</html>
