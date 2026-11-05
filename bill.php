<?php
$units = (int)$_POST['units'];
$rate = (int)$_POST['rate'];
$total = $units * $rate;
echo "<h2>Electricity Bill</h2>";
echo "Units Consumed: " . $units . "<br>";
echo "Rate per Unit: " . number_format($rate, 2) . "<br>";
echo "Total Bill Amount: " . number_format($total, 2);

?>