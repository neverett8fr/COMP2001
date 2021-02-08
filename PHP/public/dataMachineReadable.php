<?php
include_once ("header.php");
include_once ("footer.php");
?>



<div class="w3-row-padding" style="margin: 50px 50px 50px 50px">
    <?php
    $filePath = "../assets/data/airQuality.csv";
    $file = fopen($filePath, "r");

    $row=0;
    $csvData = array();
    while (($data = fgetcsv($file, 0, ",")) !== FALSE) {
        if($row > 0){
            $csvData[] = $data;
        }
        $row++;
    }
    echo json_encode($csvData);

    ?>

</div>