<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian 5</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Tabel Perkalian 5</h2>
    <table>
        <tr>
            <th>Angka</th>
            <th>Hasil Perkalian</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $hasil = $i * 5;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$hasil</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html> 