<?php
function repeatText(string $text, int $num = 10): array
{
    $daftar = [];

    for ($i = 0; $i < $num; $i++) {
        $daftar[] = $text;
    }

    return $daftar;
}

$hasilLimaBelas = repeatText("I'm the best", 15);
$hasilDefault = repeatText("You're the man");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 - Parameter Default</title>
</head>
<body>
<h1>Function dengan Parameter Default</h1>
<p>Parameter <code>$num</code> memiliki nilai default 10. Nilai tersebut dipakai ketika argument kedua tidak diberikan.</p>

<h2>Dua argument: 15 kali</h2>
<ol>
<?php foreach ($hasilLimaBelas as $teks): ?>
    <li><?php echo htmlspecialchars($teks, ENT_QUOTES, "UTF-8"); ?></li>
<?php endforeach; ?>
</ol>

<h2>Satu argument: default 10 kali</h2>
<ol>
<?php foreach ($hasilDefault as $teks): ?>
    <li><?php echo htmlspecialchars($teks, ENT_QUOTES, "UTF-8"); ?></li>
<?php endforeach; ?>
</ol>
</body>
</html>
