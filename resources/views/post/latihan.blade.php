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
        <legend>Data</legend>
        <br>
        <center>
            <h3>Data Barang</h3>
            <table border="1">
                <tr style="background-color: aqua">
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Nama Supplier</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($barang as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data['id'] }}</td>
                        <td>{{ $data['nama_barang'] }}</td>
                        <td>{{ $data['harga'] }}</a></td>
                        <td>{{ $data['stok'] }}</td>
                        <td>{{ $data['nama_supplier'] }}</td>
                    </tr>
                @endforeach
            </table>
            <h3>Data Supplier</h3>
            <table border="1">
                <tr style="background-color: aqua">
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Supplier</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($supplier as $supp)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $supp['id'] }}</td>
                        <td>{{ $supp['nama_supplier'] }}</td>
                        <td>{{ $supp['no_telpon'] }}</a></td>
                        <td>{{ $supp['alamat'] }}</td>
                    </tr>
                @endforeach
            </table>
            <h3>Data Pembeli</h3>
            <table border="1">
                <tr style="background-color: aqua">
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Pembeli</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($pembeli as $beli)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $beli['id'] }}</td>
                        <td>{{ $beli['nama_pembeli'] }}</td>
                        <td>{{ $beli['jk'] }}</td>
                        <td>{{ $beli['no_telpon'] }}</a></td>
                        <td>{{ $beli['alamat'] }}</td>
                    </tr>
                @endforeach
            </table>
            <h3>Data Pembayaran</h3>
            <table border="1">
                <tr style="background-color: aqua">
                    <th>No</th>
                    <th>ID</th>
                    <th>Tanggal Bayar</th>
                    <th>Total Bayar</th>
                    <th>Kode Transaksi</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($pembayaran as $bayar)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $bayar['id'] }}</td>
                        <td>{{ $bayar['tgl_bayar'] }}</td>
                        <td>{{ $bayar['total_bayar'] }}</td>
                        <td>{{ $bayar['kode_transaksi'] }}</a></td>
                    </tr>
                @endforeach
            </table>
            <h3>Data Transaksi</h3>
            <table border="1">
                <tr style="background-color: aqua">
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Nama Pembeli</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($transaksi as $trans)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $trans['id'] }}</td>
                        <td>{{ $trans['nama_barang'] }}</td>
                        <td>{{ $trans['nama_pembeli'] }}</td>
                        <td>{{ $trans['tgl_bayar'] }}</a></td>
                        <td>{{ $trans['keterangan'] }}</a></td>
                    </tr>
                @endforeach
            </table>
        </center>
    </fieldset>
</body>

</html>
