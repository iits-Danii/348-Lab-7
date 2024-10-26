<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = intval($_POST["size"]);

        if ($size > 0) {
            echo "<table border='1'>";
            //creates the first row
            echo "<tr><th></th>";
            for ($i = 1; $i <= $size; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            //fills the rest of the rows with values i*j
            for ($i = 1; $i <= $size; $i++) {
                echo "<tr><th>$i</th>";
                for ($j = 1; $j <= $size; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } 
    }
?>