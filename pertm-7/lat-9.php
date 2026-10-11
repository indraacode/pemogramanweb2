<?php
$program = ["HTML", "PHP", "CSS", "JavaScript"];
$cari = trim($_GET["cari"] ?? "HTML");
$ditemukan = in_array($cari, $program);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 9 - In Array</title>
</head>
<body>
<h1>Penggunaan in_array()</h1>
<p>Pencarian bersifat case-sensitive. Contohnya, <code>PHP</code> ditemukan sedangkan <code>php</code> tidak.</p>
<pre><?php echo htmlspecialchars(print_r($program, true), ENT_QUOTES, "UTF-8"); ?></pre>

<form method="get" action="">
    <label for="cari">Program basis web yang dicari:</label>
    <input id="cari" name="cari" value="<?php echo htmlspecialchars($cari, ENT_QUOTES, "UTF-8"); ?>" required>
    <button type="submit">Cari dalam Array</button>
</form>

<p>Program Basis Web <strong><?php echo htmlspecialchars($cari, ENT_QUOTES, "UTF-8"); ?></strong>
<?php echo $ditemukan ? "ada" : "tidak ada"; ?> di dalam array.</p>
</body>
</html>
