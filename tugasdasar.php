$pemasukan = 50000000;
$hutangA = 16500000;
$bungaA = 0.05; // 5%
$hutangB = 9500000;
$bungaB = 0.045; // 4.5%

$bungaHutangA = $hutangA * $bungaA;
$bungaHutangB = $hutangB * $bungaB;

$totalBungaHutang = $bungaHutangA + $bungaHutangB;

$totalHutang = ($hutangA + $bungaHutangA) + ($hutangB + $bungaHutangB);

$sisaUang = $pemasukan - $totalHutang;

echo "<h2>Perhitungan Hutang dan Bunga</h2>";
echo "Pemasukan: Rp " . number_format($pemasukan, 0, ',', '.') . "<br>";
echo "Hutang A: Rp " . number_format($hutangA, 0, ',', '.') . " (Bunga 5%)<br>";
echo "Hutang B: Rp " . number_format($hutangB, 0, ',', '.') . " (Bunga 4.5%)<br><br>";

echo "Total Bunga Hutang A: Rp " . number_format($bungaHutangA, 0, ',', '.') . "<br>";
echo "Total Bunga Hutang B: Rp " . number_format($bungaHutangB, 0, ',', '.') . "<br>";
echo "<b>Jumlah Total Bunga Hutang: Rp " . number_format($totalBungaHutang, 0, ',', '.') . "</b><br><br>";

echo "<b>Jumlah Total Hutang (termasuk bunga): Rp " . number_format($totalHutang, 0, ',', '.') . "</b><br>";
echo "<b>Sisa Uang Setelah Membayar Hutang: Rp " . number_format($sisaUang, 0, ',', '.') . "</b><br>";
?>
