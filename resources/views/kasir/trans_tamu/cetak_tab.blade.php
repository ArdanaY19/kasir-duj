<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Nama HO</th>
                <th>ID Pembelian</th>
                <th>Jumlah</th>
                <th>Harga Produk</th>
                <th>Total</th>
                <th>Keterangan</th>
                <th>Nominal</th>
                <th>Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($transaksi as $tr)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td style="font-size: 11px;">{{ $tr->produk }}</td>
                    <td style="font-size: 11px;">{{ $tr->nama_ho }}</td>
                    <td style="font-size: 11px;">{{ $tr->id_pembelian }}</td>
                    <td style="font-size: 11px;">{{ $tr->jumlah }}</td>
                    <td style="font-size: 11px;">{{ $tr->harga }}</td>
                    <td style="font-size: 11px;">{{ $tr->total }}</td>
                    <td style="font-size: 11px;">{{ $tr->keterangan }}</td>
                    <td style="font-size: 11px;">{{ $tr->nominal }}</td>
                    <td style="font-size: 11px;">{{ $tr->pembayaran }}</td>
                    <td style="font-size: 11px;">{{ $tr->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
