<?php

$hasil = "";

if (isset($_POST['hitung'])) {

    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $operator = $_POST['operator'];

    if ($nilai1 == "" || $nilai2 == "") {

        $hasil = "Nilai I dan Nilai II harus diisi.";

    } else {

        switch ($operator) {

            case "+":
                $hasil = $nilai1 + $nilai2;
                break;

            case "-":
                $hasil = $nilai1 - $nilai2;
                break;

            case "*":
                $hasil = $nilai1 * $nilai2;
                break;

            case "/":
                if ($nilai2 == 0) {
                    $hasil = "Tidak dapat dibagi dengan 0.";
                } else {
                    $hasil = $nilai1 / $nilai2;
                }
                break;

            default:
                $hasil = "Operator tidak valid.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Kalkulator Sederhana</title>

    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: white;
        }

        .container {
            width: 700px;
            margin: 50px auto;
            text-align: center;
        }

        .judul {
            font-size: 40px;
            font-weight: bold;
            color: #111;
            margin-bottom: 20px;
        }

        .selamat {
            font-size: 28px;
            color: #e44b00;
            margin-bottom: 45px;
        }

        .form-kalkulator {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .kolom {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .kolom label {
            font-size: 22px;
            font-weight: bold;
            color: #990000;
            margin-bottom: 15px;
        }

        input[type="number"] {
            width: 210px;
            height: 30px;
            font-size: 18px;
            padding: 3px;
        }

        select {
            height: 38px;
            width: 50px;
            font-size: 18px;
            margin-top: 36px;
        }

        button {
            height: 38px;
            font-size: 16px;
            padding: 0 15px;
            margin-top: 36px;
            cursor: pointer;
        }

        .hasil {
            margin-top: 40px;
            font-size: 24px;
            font-weight: bold;
            color: #0000cc;
        }

        .footer {
            margin-top: 100px;
            font-size: 20px;
            color: blue;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="judul">
        KALKULATOR SEDERHANA
    </div>

    <div class="selamat">
        Selamat Mencoba
    </div>

    <form method="POST">

        <div class="form-kalkulator">

            <div class="kolom">

                <label>Nilai I</label>

                <input
                    type="number"
                    name="nilai1"
                    required
                    value="<?php echo isset($_POST['nilai1']) ? $_POST['nilai1'] : ''; ?>"
                >

            </div>

            <select name="operator">

                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>

            </select>

            <div class="kolom">

                <label>Nilai II</label>

                <input
                    type="number"
                    name="nilai2"
                    required
                    value="<?php echo isset($_POST['nilai2']) ? $_POST['nilai2'] : ''; ?>"
                >

            </div>

            <button type="submit" name="hitung">
                Submit
            </button>

        </div>

    </form>

    <?php if ($hasil !== "") { ?>

        <div class="hasil">
            Hasil = <?php echo $hasil; ?>
        </div>

    <?php } ?>

    <div class="footer">
        Created by Agus Indra
    </div>

</div>

</body>

</html>