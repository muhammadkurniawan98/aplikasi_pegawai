<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>NAMA</th>
        <th>NIP</th>
        <th>STATUS PENGAJUAN</th>
        <th>TANGGAL PENGAJUAN</th>
    </tr>
    </thead>
    <tbody>
    @foreach($laporan as $l)
        <tr>
            <td>{{ $l->nama }}</td>
            <td>{{ $l->nip }}</td>
            <td>{{ $l->status_verifikasi }}</td>
            <td>{{ $l->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
