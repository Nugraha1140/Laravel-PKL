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
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Konten</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($post as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->id }}</td>
                        <td> <a href="{{ url('post/' . $data->id) }} "> {{ $data['title'] }}</a></td>
                        <td>{{ $data->content }}</td>
                    </tr>
                @endforeach
            </table>
        </marquee>
    </fieldset>
</body>

</html>
