<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
</head>
<body>

<h2 align="center">Tabel Perkalian</h2>

<table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
        <th>×</th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";

        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>