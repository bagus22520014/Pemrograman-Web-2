<?php
$departure_date = mktime(0, 0, 0, 12, 24, 2021);
$purchase_date = strtotime("-60 days", $departure_date);
echo "Tanggal pembelian tiket: " . date("d F Y", $purchase_date);
