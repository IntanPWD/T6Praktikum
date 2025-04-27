<?php
echo "<br><br>";

// Tabel Perkalian Matriks
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";

// Baris Judul Kolom
echo "<tr>";
echo "<td style='font-weight:bold;'>bilangan</td>"; // Kolom "bilangan" (judul) tanpa background (putih)
for ($i = 1; $i <= 10; $i++) {
    echo "<td style='background-color:lime; font-weight:bold;'>$i</td>"; // Header angka 1–10 warna hijau
}
echo "</tr>";
