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
                <th>Nama Mitra</th>
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
            @foreach ($transaksi as $t)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td style="font-size: 11px;">{{ $t->stok->produk }}</td>
                    <td style="font-size: 11px;">{{ $t->mitra->nama }}</td>
                    <td style="font-size: 11px;">{{auth()->user()->name}}</td>
                    <td style="font-size: 11px;">{{ $t->id_pembelian }}</td>
                    <td style="font-size: 11px;">{{ $t->jumlah }}</td>
                    <td style="font-size: 11px;">{{ $t->stok->harga_grosir }}</td>
                    <td style="font-size: 11px;">{{ $t->total }}</td>
                    <td style="font-size: 11px;">{{ $t->keterangan }}</td>
                    <td style="font-size: 11px;">{{ $t->nominal }}</td>
                    <td style="font-size: 11px;">{{ $t->pembayaran }}</td>
                    <td style="font-size: 11px;">{{ $t->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
