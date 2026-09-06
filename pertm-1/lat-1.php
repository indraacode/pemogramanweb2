<?php
$A = 123; // variable global
function Test() {
    $A = "Test"; // variable lokal
    echo "Nilai A dalam fungsi = $A <br>";
}
Test();
echo "Nilai A luar fungsi = $A <br>";
?>