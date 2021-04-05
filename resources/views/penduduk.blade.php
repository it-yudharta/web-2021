<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penduduk</title>
</head>
<body>
    <table>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Alamat</th>
        </tr>
        @foreach ($penduduk as $p)
        <tr>
            <td>{{ $p->nip }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->ttl }}</td>
            <td>{{ $p->alamat }}</td>
        </tr>
        @endforeach
    </table>

    {{ $penduduk->links() }}
</body>
</html>