<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Donasi</title>
</head>
<body>
    <h1>Laporan Donasi</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Campaign</th>
                <th>Donasi</th>
                <th>Jumlah</th>
                <th>Mata Uang</th>
                <th>Tanggal Donasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->campaign_id }}</td>
                    <td>{{ $report->donation_id }}</td>
                    <td>{{ $report->jumlah }}</td>
                    <td>{{ $report->mata_uang }}</td>
                    <td>{{ $report->tanggal_donasi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
