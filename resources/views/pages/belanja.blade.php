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
        @foreach ($belanja as $beli)
            @php
                $total = 0;
            @endphp
            Nama : {{ $beli['nama'] }} <br>
            Daftar Belanjaan :
            @foreach ($beli['belanja'] as $buy)
                <li>{{ $buy['barang'] }} <br>
                    Harga : Rp. {{ $buy['harga'] }}
                </li>
                <br>
                @php $total += $buy['harga'] @endphp
            @endforeach
            Total Harga : Rp. {{ $total }} <br>
            @php
                if ($total > 500000) {
                    $cashback = (10 / 100) * $total;
                } elseif ($total > 250000) {
                    $cashback = (5 / 100) * $total;
                } else {
                    $cashback = 0;
                }
            @endphp
            Cashback : Rp. {{ $cashback }} <br>
            Total Pembayaran : Rp. {{ $total - $cashback }}


            <hr>
        @endforeach
    </fieldset>
</body>

</html>
