<?php
function basic(string $argument): string
{
    return $argument;
}

$pesan = basic("hello world!");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1 - Function Sederhana</title>
</head>
<body>
<h1>Function Sederhana</h1>
<p>Function <code>basic()</code> menerima sebuah argument dan mengembalikan nilainya untuk ditampilkan.</p>
<p><strong><?php echo htmlspecialchars($pesan, ENT_QUOTES, "UTF-8"); ?></strong></p>
</body>
</html>
