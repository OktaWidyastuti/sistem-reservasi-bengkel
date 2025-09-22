<!DOCTYPE html>
<html>
<head>
    <title>Export Pembelian</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 4px; }
    </style>
</head>
<body>
    <h2>Data Pembelian</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Supplier</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Tanggal Pembelian</th>
                <th>Alamat</th>
                <th>Item Terpilih</th>
                <th>Subtotl</th>
                <th>Diskon</th>
                <th>Total</th>
                <th>Metode Pembayaran</th>
                
            </tr>
        </thead>
        <tbody>
                @foreach($pembelian as $h)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $h->nama_supplier }}</td>
                    <td>{{ $h->no_telepon }}</td>
                    <td>{{ $h->email }}</td>
                    <td>{{ $h->tanggal_pembelian}}</td>
                    <td>{{ $h->alamat }}</td>
                    <td>{{ $h->item_terpilih}}</td>
                    <td>{{ $h->subtotal}}</td>
                    <td>{{ $h->diskon }}</td>
                    <td>{{ $h->total }}</td>
                    <td>{{ $h->metode_pembayaran }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>