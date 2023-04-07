<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= 6 - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*&nbsp;";
    }
    echo "<br>";
}
for ($i = 6; $i >= 1; $i--) {
    for ($j = 1; $j <= 6 - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*&nbsp;";
    }
    echo "<br>";
}
