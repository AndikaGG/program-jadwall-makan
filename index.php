<?php
// Data jadwal makan (contoh)
$jadwal_makan = [
    ["Waktu Makan", "Makanan"],
    ["07:00 AM", "Sarapan"],
    ["12:00 PM", "Makan Siang"],
    ["04:00 PM", "Makanan Ringan"],
    ["07:00 PM", "Makan Malam"],
];

// Fungsi untuk memulai persiapan makanan
function mulaiPersiapanMakanan($makanan) {
    return "Waktunya mempersiapkan $makanan!";
}

echo "<h2>Jadwal Makan</h2>";
echo "<table border='1'>";
foreach ($jadwal_makan as $index => $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    if ($index !== 0) {
        echo "<td><button onclick='alert(\"" . mulaiPersiapanMakanan($row[1]) . "\")'>Mulai Persiapan</button></td>";
    } else {
        echo "<td>-</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>