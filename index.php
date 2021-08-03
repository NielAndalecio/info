<?php

$ign = "SHARP";
$name = "NIEL JOHN ANDALECIO";
$origin = "PHILIPPINES";
$age = 21;
$game = "VALORANT";
$team = "NONE";
$website = "FB.GG/IAMSHARPPH";

?>

<html>
    <head>
        <title>Player Info: SHARP</title>
    </head>

    <link rel="stylesheet" href="styles.css">

    <body>
        <div class="title-head">PLAYER - INFO</div>
        <div class="ign"><?php echo $ign?></div>
            <div class="datas">
                <div class="template">NAME </div>
                <div class="data"><?php echo $name?></div>
                <div class="template">ORIGIN </div>
                <div class="data"><?php echo $origin?></div>
                <div class="template">AGE </div>
                <div class="data"><?php echo $age?></div>
                <div class="template">ESPORTS GAME </div>
                <div class="data"><?php echo $game?></div>
                <div class="template">TEAM </div>
                <div class="data"><?php echo $team?></div>
            </div>
        </div>
        <div class="agents">
            <div class="agent-head">
                <div class="header1">MAIN</div>
                <div class="header2">AGENTS</div>
            </div>
            <div class="agent-body">
            <img src="img\a1.png" alt="sova" draggable=false>
            <img src="img\a2.png" alt="omen" draggable=false>
            <img src="img\a3.png" alt="reyna" draggable=false>
            </div>
        </div>

        <div class="bgd">
            <img class="bg1" src="img\sl1.png" draggable=false>
            <img class="bg2" src="img\sl2.png" draggable=false>
            <img class="photo" src="img\ph1.png" draggable=false>
        </div>

        <div class="footer"><a href="https://www.facebook.com/gaming/iamsharpph"><?php echo $website?></a></div>

    </body>
</html>