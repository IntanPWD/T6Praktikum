<?php
echo "<br><br>Tabel Perkalian:<br>";
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";

// Baris Untuk Judul Kolom
echo "<tr>";
echo "<td style='background-color:lime; font-weight:bold;'>bilangan</td>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td style='background-color:lime; font-weight:bold;'>$i</td>";
}
echo "</tr>";

// Mengisi Tabel
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td style='background-color:lime; font-weight:bold;'>$i</td>"; // Kolom bilangan samping
    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;
        if ($hasil % 3 == 0) {
            $warna = "background-color:yellow;";
        } else {
            $warna = "background-color:cyan;";
        }
        
        echo "<td style='$warna'>$hasil</td>";
    }
    echo "</tr>";
}
