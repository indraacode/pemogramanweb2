<?php
$var = [1, 2, 3, 4, 5, 6, 7];
$merupakanArray = is_array($var);
$status = $merupakanArray ? "merupakan array" : "bukan merupakan array";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4 - Is Array</title>
</head>
<body>
<h1>Penggunaan is_array()</h1>
<p>Fungsi <code>is_array()</code> memeriksa apakah nilai dalam sebuah variabel bertipe array.</p>
<pre>$var = array(<?php echo implode(", ", $var); ?>);</pre>
<p>Variabel <code>$var</code> <strong><?php echo $status; ?></strong>.</p>
</body>
</html>
