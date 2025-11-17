<?php
// --------------------------------------------------
// 1) Menampilkan bilangan genap dari 1 sampai 10
// --------------------------------------------------
echo "<h3>Bilangan Genap dari 1 sampai 10:</h3>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "<br><br>";

// --------------------------------------------------
// 2) Tabel Perkalian 1 - 10
// --------------------------------------------------
echo "<h3>Tabel Perkalian 1 - 10:</h3>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Header kolom
echo "<tr><th>bilangan</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Isi tabel
for ($x = 1; $x <= 10; $x++) {
    echo "<tr>";
    echo "<th>$x</th>";  // header baris

    for ($y = 1; $y <= 10; $y++) {
        echo "<td>" . ($x * $y) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
