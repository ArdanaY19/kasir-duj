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
                <th>Nama Tamu</th>
                <th>Nama Staff</th>
                <th>Nama Center</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga Produk</th>
                <th>Total</th>
                <th>ID Transaksi</th>
                <th>Keterangan</th>
                <th>Nominal</th>
                <th>Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($tabungan as $tb)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td style="font-size: 11px;">{{ $tb->tamu->nama }}</td>
                    <td style="font-size: 11px;">{{ $tb->tamu->staff }}</td>
                    <td style="font-size: 11px;">{{ $tb->tamu->center }}</td>
                    <td style="font-size: 11px;">{{ $tb->stok->produk }}</td>
                    <td style="font-size: 11px;">{{ $tb->jumlah }}</td>
                    <td style="font-size: 11px;">{{ $tb->stok->harga_retail }}</td>
                    <td style="font-size: 11px;">{{ $tb->total }}</td>
                    <td style="font-size: 11px;">{{ $tb->id_transaksi }}</td>
                    <td style="font-size: 11px;">{{ $tb->keterangan }}</td>
                    <td style="font-size: 11px;">{{ $tb->nominal }}</td>
                    <td style="font-size: 11px;">{{ $tb->pembayaran }}</td>
                    <td style="font-size: 11px;">{{ $tb->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
