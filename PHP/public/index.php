<?php
include_once ("header.php");
include_once ("footer.php");
?>

<body>



<!-- Top menu on small screens -->


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">


    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Air Quality</b></h1>
        <h1 class="w3-xxxlarge w3-text-red"><b>Data Set</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
    </div>

    <!-- Photo grid (modal) -->
    <div class="w3-row-padding">
        <div class="w3-half">
            <img src="../assets/img/environmentDataPlymouth.jpg" style="width:100%" onclick="onClick(this)" alt="Data Place Plymouth">
            <img src="../assets/img/data-analysis.jpg" style="width:100%" onclick="onClick(this)" alt="----">
        </div>

        <div class="w3-half">
            <img src="../assets/img/data-analysis.jpg" style="width:100%" onclick="onClick(this)" alt="----">
            <img src="../assets/img/data-analysis.jpg" style="width:100%" onclick="onClick(this)" alt="----">
        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption"></p>
        </div>
    </div>

    <!-- Services -->
    <div class="w3-container" id="services" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>About The Project.</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
        <p>This project we have to take a data set and display it in a readable format</p>
        <p>The Data Set can be found on the data page by clicking the Data tab, and output in a RDF (Resource Description Framework) format
        </p>
        <p>The dataset I picked is based on the air quality in plymouth. This can be found by clicking the Original Data Set tab.
        </p>
        <p>The data has been transformed into machine readable format also. This can be found by clicking the Entity / Machine Readable Data tab.
        </p>

    </div>
