<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<title>Qualidade de Produto em Aplicações de Cidades Inteligentes</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script type="application/javascript" defer src="js/data-visualization.js"></script>
<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="js/core.js" type="text/javascript"></script>
<script src="js/charts.js" type="text/javascript"></script>
<script src="js/animated.js" type="text/javascript"></script>

<link rel="shortcut icon" type="image/png" href="img/lsdi_logo.png"/>

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-new w3-collapse w3-top w3-large w3-padding"
     style="z-index:3;width:300px;font-weight:bold; background: darkcyan !important;"
     id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft"
       style="width:100%;font-size:22px"> X </a>
    <div class="w3-container">
        <h3 class="w3-padding-64">
            <b>
                Universidade Federal do Maranhão - UFMA
                <hr/>
            </b>
        </h3>
    </div>
    <div class="w3-bar-block">
        <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
        <a href="validate.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Forms</a>
    </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-new w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-new w3-margin-right" onclick="w3_open()">☰</a>
    <span>Software Product Quality in Smart City Applications</span>

</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
     id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <?php
    include("php/data-dashboard.php");
    ?>


    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Software Product Quality in Smart City Applications</b></h1>
        <br/>
        <br/>
        <h1 class="w3-xxxlarge w3-text-new"><b>Characteristics</b></h1>
        <hr style="width:50px;border:5px solid darkcyan" class="w3-round">
        <br/>
        <br/>

        <div class="w3-container">
            <div id="chartdiv"></div>

        </div>


    </div>


    <!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">
        Powered by <a href="http://www.lsdi.ufma.br/" title="W3.CSS" target="_blank"
                      class="w3-hover-opacity">LSDi - UFMA</a></p></div>

</body>
</html>
