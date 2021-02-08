<?php
include_once ("header.php");
include_once ("footer.php");
?>

<div class="w3-main" style="margin-left:340px;margin-right:40px">
    <div class="w3-container" style="margin-top:80px">
        <h1 class="w3-jumbo"><b>Air Quality</b></h1>
        <h1 class="w3-xxxlarge w3-text-red"><b>Data Set</b></h1>
        <hr style="width:50px;border:5px solid #ff0000" class="w3-round">
    </div>
<div class="w3-row-padding">
    <div class="w3-half">
        <?php
        echo "<html><body><table align='Center' border='10pt'>\n\n";
        $f = fopen("../assets/data/airQuality.csv", "r");
        while (($line = fgetcsv($f)) !== false) {
            echo "<tr>";
            foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>\n";
        }
        fclose($f);
        echo "\n</table></body></html>";

        ?>

        <?php
        include_once ("../assets/data/airQualityGraph.php");
        ?>


    </div>
</div>

</div>