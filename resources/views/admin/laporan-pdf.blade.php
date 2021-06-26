<html>
<head>
    <style>
        body{

        }
    </style>
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
    @foreach($laporanUsulanKenaikanGaji as $laporan)
        <tr>
            <td>{{ $laporan->nama }}</td>
            <td>{{ $laporan->nip }}</td>
            <td>{{ $laporan->status_verifikasi }}</td>
            <td>{{ $laporan->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
