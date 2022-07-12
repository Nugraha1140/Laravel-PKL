<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Makanan</td>
            <td>:</td>
            <td><b>{{$a}}</b></td>
        </tr>
        <tr>
        <td>Harga</td>
        <td>:</td>
        <td>
            @if($a === null)
            {{$a}}
            @elseif($a === "mie goreng")
             Rp. 5000     
            @elseif($a === "seblak" )
             Rp. 7000
            @elseif($a === "nasi padang")
             Rp. 15000
            @else
            Tidak Ada
        </td> 
        @endif
        </tr>
        <tr>
            <td>Minuman</td>
            <td>:</td>
            <td><b>{{$b}}</b></td>
        </tr>
        <tr>  
        <td>Harga</td>
        <td>:</td>
        <td>
            @if($b === null)
            {{$b}}
            @elseif($b === "kopi")
             Rp. 5000     
            @elseif($b === "jus" )
             Rp. 10000
            @elseif($b === "teh")
             Rp. 7000
            @else
            Tidak Ada
        </td> 
        @endif
        </tr>
        <tr>
            <td>Cemilan</td>
            <td>:</td>
            <td><b>{{$c}}</b></td>
        </tr>
    </table>
</body>
</html>