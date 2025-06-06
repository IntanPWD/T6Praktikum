<?php
echo "<br><br>";

// Tabel Perkalian Matriks
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";

// Baris Judul Kolom
echo "<tr>";
echo "<td style='font-weight:bold;'>bilangan</td>"; // Kolom "bilangan" (judul)
for ($i = 1; $i <= 10; $i++) {
    echo "<td style='background-color:lime; font-weight:bold;'>$i</td>"; // Header angka 1–10 
}
echo "</tr>";

// Baris Isi Tabel
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";

    // Kolom pertama tiap baris (angka bilangan) 
    echo "<td style='background-color:lime; font-weight:bold;'>$i</td>";

    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;

        if ($hasil % 2 != 0) {
            $warna = "background-color:yellow;";
        } else {
            $warna = "background-color:cyan;";
        }

        echo "<td style='$warna'>$hasil</td>";
    }

    echo "</tr>";
}

echo"</table>";
?>