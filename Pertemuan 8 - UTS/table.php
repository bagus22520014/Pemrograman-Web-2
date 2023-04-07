<table border="1">
    <?php
    for ($row = 1; $row <= 10; $row++) {
        echo "<tr";
        if ($row % 2 == 1) {
            echo " style='background-color: green;'";
        }
        echo ">";
        for ($col = 1; $col <= 5; $col++) {
            echo "<td>";
            echo "Baris " . $row . ", Kolom " . $col;
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>