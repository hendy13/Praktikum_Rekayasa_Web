<?php
function curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/Rekayasaweb/Pertemuan2/getwisata.php");
$data = json_decode($send, TRUE);


if(!empty($data)) {
    echo "<table border='1' cellspacing='0' cellpadding='10' style='width: 100%; border-collapse: collapse;'>";
    echo "<tr style='background-color: #4CAF50; color: white;'>
            <th>ID Wisata</th>
            <th>Kota</th>
            <th>Landmark</th>
            <th>Tarif</th>
          </tr>";

    foreach($data as $row) {
        
        echo "<tr style='background-color: #f2f2f2;'>";
        echo "<td>" . $row["id_wisata"] . "</td>";
        echo "<td>" . $row["kota"] . "</td>";
        echo "<td>" . $row["landmark"] . "</td>";
        echo "<td>" . $row["tarif"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Data tidak ditemukan.";
}
?>