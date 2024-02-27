<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="/css/styleTable.css">
</head>
<body>
    <?php
    $no = 1;
    ?>
    <h2 style="text-align = center">Daftar Mahasiswa 3F</h2>
        <?php ?>
        <table class="data">
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
            @foreach ($polinema as $nama)
                <tr>
                    {{-- <td> {{$no}} </td> --}}
                    <td> {{$nama}} </td>
                </tr>
                {{$no++}}
            @endforeach
        </table>  
        <?php?>
</body>
</html>