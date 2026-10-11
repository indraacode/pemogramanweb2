<?php
function jumlah(float $a, float $b): float
{
    return $a + $b;
}

function kurang(float $a, float $b): float
{
    return $a - $b;
}

function kali(float $a, float $b): float
{
    return $a * $b;
}

function bagi(float $a, float $b): ?float
{
    return $b == 0 ? null : $a / $b;
}

function formatAngka(float $nilai): string
{
    return rtrim(rtrim(number_format($nilai, 10, ".", ""), "0"), ".");
}

$inputA = $_POST["A"] ?? "";
$inputB = $_POST["B"] ?? "";
$hasil = null;
$pesanError = "";

if (($_SERVER["REQUEST_METHOD"] ?? "GET") === "POST") {
    $a = filter_var($inputA, FILTER_VALIDATE_FLOAT);
    $b = filter_var($inputB, FILTER_VALIDATE_FLOAT);

    if ($inputA === "" || $inputB === "" || $a === false || $b === false) {
        $pesanError = "Masukkan kedua bilangan dalam format angka yang valid.";
    } else {
        $a = (float) $a;
        $b = (float) $b;
        $hasil = [
            "Penjumlahan" => ["operator" => "+", "nilai" => jumlah($a, $b)],
            "Pengurangan" => ["operator" => "-", "nilai" => kurang($a, $b)],
            "Perkalian" => ["operator" => "×", "nilai" => kali($a, $b)],
            "Pembagian" => ["operator" => "÷", "nilai" => bagi($a, $b)],
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - User Defined Function</title>
</head>
<body>
<h1>Operasi dengan Function</h1>
<p>Setiap operasi aritmetika dikerjakan oleh user-defined function yang berbeda.</p>

<form method="post" action="">
    <p>
        <label for="A">Bilangan pertama:</label>
        <input id="A" name="A" type="number" step="any" value="<?php echo htmlspecialchars((string) $inputA, ENT_QUOTES, "UTF-8"); ?>" required>
    </p>
    <p>
        <label for="B">Bilangan kedua:</label>
        <input id="B" name="B" type="number" step="any" value="<?php echo htmlspecialchars((string) $inputB, ENT_QUOTES, "UTF-8"); ?>" required>
    </p>
    <button type="submit">Hitung</button>
</form>

<?php if ($pesanError !== ""): ?>
    <p><?php echo $pesanError; ?></p>
<?php elseif ($hasil !== null): ?>
    <h2>Hasil</h2>
    <ul>
    <?php foreach ($hasil as $nama => $operasi): ?>
        <li>
            <?php echo $nama; ?> :
            <?php echo formatAngka($a); ?> <?php echo $operasi["operator"]; ?> <?php echo formatAngka($b); ?> =
            <?php echo $operasi["nilai"] === null ? "Tidak terdefinisi" : formatAngka($operasi["nilai"]); ?>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>
