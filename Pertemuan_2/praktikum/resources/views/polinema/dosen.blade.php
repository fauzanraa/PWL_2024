<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="/css/styleTable.css">
</head>
<body>
    <?php 
    $no?>
    <h2 style="text-align = center">Daftar Dosen Polinema</h2>
        <?php?>
        <table class="data">
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
            @foreach ($dosenPolinema as $nama)
                <tr>
                    <td> </td>
                    <td> {{$nama}} </td>
                </tr>
            @endforeach
        </table>  
        <?php?>
</body>
</html>