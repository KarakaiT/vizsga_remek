<?php 

    require "connection.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/job.css">
    <title>Munkáink</title>
</head>
<body>
    <div class='navbar'>
        <div class="navbar-left">
            <img src="" alt="logo" />
        </div>
        <div class='navbar-right'>

            <a href='index.php'>Kezdőoldal</a>
            <a href='price.php'>Áraink</a>
            <a href='job.php'>Munkáink</a>
        </div>
    </div>

    <?php

            $sql = "SELECT munnev,munhely,munleir,kep,kep2 FROM jobs ORDER BY id DESC";

            $result = mysqli_query($con, $sql);

            while($row = mysqli_fetch_array($result)){

                $munnev = $row["munnev"];
                $munhely = $row["munhely"];
                $munleir = $row["munleir"];
                $kep = $row["kep"];
                $kep2 = $row["kep2"];

                echo "

                <div class='jobs'>
                    <div class='munkadoboz'>

                        <div class='kepbox'>
                            <div class='kep'>
                                <img src='img/$kep' alt='$kep' title='$kep'/>
                            </div>
                            <div class='kep2'>
                                <img src='img2/$kep2' alt='$kep2' title='$kep2' />
                            </div>
                        </div>


                        <div class='leirbox'>
                            <div class='munnev'>
                                <h3>Munka megnevezése:</h3>
                                <p>".$munnev."</p>
                            </div>

                            <div class='munhely'>
                                <h4>Munkavégzés helye:</h4>
                                <p>".$munhely."</p>
                            </div>

                            <div class='termekar'>
                                <h4>Munka leírása:</h4>
                                <p>".$munleir."</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                ";
            }


        ?>

        

</body>
</html>