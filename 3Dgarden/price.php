<?php 

    require "connection.php";

    $error = "";
    $success = "";

    if(isset($_POST["send"])){


        $veznev = $_POST["veznev"];
        $kernev = $_POST["kernev"];
        $munkahely = $_POST["munkahely"];
        $tel = $_POST["tel"];
        $leir = $_POST["leir"];

        if(empty($veznev) || empty($kernev) || empty($munkahely) || empty($tel) || empty($leir)){

            $error = "Árajánlat kéréséhez minden mező kitöltése kötelező!";
        }
        else{

            $sql = "INSERT INTO ajanlat(veznev,kernev,munkahely,tel,leir) VALUES('$veznev', '$kernev', '$munkahely', '$tel', '$leir')";

            mysqli_query($con, $sql);

            $success = "Ajánlatkérés elküldve!";
        }
    }

    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/price.css">
    <title>Áraink</title>
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

        
    
    <div class="all_price">
        <?php 
        
        $sql= "SELECT * FROM arak";

        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($result)){

            $fu1 = $row["fu1"];
            $fu2 = $row["fu2"];
            $fu3 = $row["fu3"];
            $soveny1 = $row["soveny1"];
            $soveny2 = $row["soveny2"];
            $soveny3 = $row["soveny3"];
            $fa1 = $row["fa1"];
            $fa2 = $row["fa2"];
            $fa3 = $row["fa3"];
            $fakugli = $row["fakugli"];
            $tuja1 = $row["tuja1"];
            $tuja2 = $row["tuja2"];
            $tuja3 = $row["tuja3"];
            $tujakugli = $row["tujakugli"];
            $tusko1 = $row["tusko1"];
            $tusko2 = $row["tusko2"];
            $tusko3 = $row["tusko3"];
            $tusko4 = $row["tusko4"];
            $zoldhull = $row["zoldhull"];
            $fold = $row["fold"];

            echo"

                    <div class='price'>
                    <h2>Árak listája!</h2>
                    <p><small><strong>Figyelem</strong> árváltozás joga fenntartva!</small></p>
                    <p><strong>Fűnyírás:</strong></p>
                    <ul>
                        <li>10cm fű : ".$fu1."ft/m<sup>2</sup></li>
                        <li>20cm fű : ".$fu2."ft/m<sup>2</sup></li>
                        <li>30cm fű : ".$fu3."ft/m<sup>2</sup></li>
                    </ul>

                    <p><strong>Sövény nyírás:</strong></p>
                    <ul>
                        <li>Fazonra nyírás : ".$soveny1."ft/db</li>
                        <li>Formázás : ".$soveny2."ft/db</li>
                        <li>Teljes visszanyírás : ".$soveny3."ft/db</li>
                    </ul>

                    <p><strong>Fa kivágás:</strong></p>
                    <ul>
                        <li>1 - 6m magasságig : ".$fa1."ft/db</li>
                        <li>6 - 8m magasságig : ".$fa2."ft/db</li>
                        <li>8 - 15m magasságig: ".$fa3."ft/db</li>
                        <li>Kuglizás: ".$fakugli."ft/m<sup>3</sup></li>
                    </ul>

                    <p><strong>Tuja kivágás:</strong></p>
                    <ul>
                        <li>1 - 3m magasságig : ".$tuja1."ft/db</li>
                        <li>3 - 6m magasságig : ".$tuja2."ft/db</li>
                        <li>6 - 12m magasságig : ".$tuja3."ft/db</li>
                        <li>Kuglizás: ".$tujakugli."ft/m<sup>3</sup></li>
                    </ul>

                    <p><strong>Tuskó marás:</strong></p>
                    <ul>
                        <li>10cm tuskó : ".$tusko1."ft/db</li>
                        <li>20cm tuskó : ".$tusko2."ft/db</li>
                        <li>30cm tuskó : ".$tusko3."ft/db</li>
                        <li>40cm tuskó : ".$tusko4."ft/db</li>
                    </ul>

                    <p><strong>Zöldhulladék elszálítás:</strong></p>
                    <p><small>Az ár a távolságtól változhat!</small></p>
                    <ul>
                        <li>1m<sup>3</sup> Zöldhulladék: ".$zoldhull."ft/m<sup>3</sup></li>
                    </ul>

                    <p><strong>Kertrendezés:</strong></p>
                    <ul>
                        <li>1m<sup>3</sup> föld elszálítása: ".$fold."ft/m<sup>3</sup></li>
                        <p><small>Az ár a távolságtól változhat!</small></p>
                        <li>Ásás : Árajánlat szükséges!</li>
                        <li>Tereprendezés : Árajánlat szükséges!</li>
                    </ul>

                    <p><strong>Lomtalanítás:</strong></p>
                    <ul>
                        <li>Lomtalanítás : Árajánlat szükséges!</li>
                    </ul>
                </div>

        ";
        }        
        ?>

            <div class="arajanlat">
                <h2>Árajánlat</h2>
                <span><?php if(!empty($error)){echo $error;} ?></span>
                <span><?php  if(!empty($success)){echo $success;}  ?></span>
                <form action="" method="post">
                    <label for="">Vezetéknév:</label>
                    <input type="text" name="veznev" id="">

                    <label for="">Keresztnév:</label>
                    <input type="text" name="kernev" id="">

                    <label for="">Munkavégzés helye:</label>
                    <input type="text" name="munkahely" id="">

                    <label for="">Telefonszám:</label>
                    <input type="text" name="tel" id="">

                    <label for="">Munka Rövid leírása:</label>
                    <textarea name="leir" id="" cols="30" rows="10"></textarea>

                    <button name="send">Küldés</button>
                </form>
            </div>
        
    </div>
</body>
</html>