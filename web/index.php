<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Prodi</th>
    </tr>
    <?php
   
    $mahasiswa = [
        ['no' => 1, 'nama' => 'Komang Ratna Mutu Manikam', 'nim' => '2215101022', 'kelas' => 'A', 'prodi' => 'Ilmu Komputer']
        ];

    foreach ($mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td>{$mhs['no']}</td>";
        echo "<td>{$mhs['nama']}</td>";
        echo "<td>{$mhs['nim']}</td>";
        echo "<td>{$mhs['kelas']}</td>";
        echo "<td>{$mhs['prodi']}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
