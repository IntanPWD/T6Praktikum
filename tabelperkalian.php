<?php
echo"<br><br>Tabel Perkalian:<br>";
echo"<table border='1' cellpadding='5' cellspacing='0'
style='border-collapse:collapse;'>";

//Baris Untuk Judul Kolom
echo"<tr>";
echo"<td style='background-color:lime;font-weight:bold;'>Bilangan</td>";
for($i=1; $i <= 10; $i++){
    echo"<td style='background-color: lime; font-weight: bold;'>$i</td>";
}
 echo"</tr>";

 //Mengisi Tabel
for($i=1; $i <= 10; $i++){
    echo"<tr>";
    echo"<td style='background-color:lime;  font-weight: bold;'>$i</td>"; // Kolom bilangan yang ada di samping
    for($j = 1; $j <= 10; $j++) {
        echo "<td style='background-color: cyan;'>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>