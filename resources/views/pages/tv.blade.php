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
            Stasiun TV
        </legend>
        @foreach ($tv as $tele)
            @foreach ($tele['stasiun'] as $stasiun)
                <li>{{ $stasiun['nama'] }} <br>
                    <table>
                        <tr>
                            <td> Acara TV</td>
                            <td>:</td>
                            <td> {{ $stasiun['acara'] }}</td>
                        </tr>
                        <tr>
                            <td>Jam Tayang</td>
                            <td>:</td>
                            <td> {{ $stasiun['jam'] }}</td>
                        </tr>
                        <tr>
                            <td> Tanggal</td>
                            <td>:</td>
                            <td> {{ $stasiun['tanggal'] }}</td>
                        </tr>


                    </table>
                </li>
                <hr>
            @endforeach
        @endforeach
    </fieldset>
</body>

</html>
