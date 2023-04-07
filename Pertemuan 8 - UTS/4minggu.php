<?php
$date = new DateTime('2021-05-04');
for ($i = 0; $i < 4; $i++) {
    $date->modify('next Tuesday');
    echo $date->format('Y-m-d') . "\n";
}
