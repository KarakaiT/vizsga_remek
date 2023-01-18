<?php

  require "../connection.php";

  $success = "";


  if(isset($_POST["update"])){
        $id = $_POST["id"];
        $fu1 = $_POST["fu1"];
        $fu2 = $_POST["fu2"];
        $fu3 = $_POST["fu3"];
        $soveny1 = $_POST["soveny1"];
        $soveny2 = $_POST["soveny2"];
        $soveny3 = $_POST["soveny3"];
        $fa1 = $_POST["fa1"];
        $fa2 = $_POST["fa2"];
        $fa3 = $_POST["fa3"];
        $fakugli = $_POST["fakugli"];
        $tuja1 = $_POST["tuja1"];
        $tuja2 = $_POST["tuja2"];
        $tuja3 = $_POST["tuja3"];
        $tujakugli = $_POST["tujakugli"];
        $tusko1 = $_POST["tusko1"];
        $tusko2 = $_POST["tusko2"];
        $tusko3 = $_POST["tusko3"];
        $tusko4 = $_POST["tusko4"];
        $zoldhull = $_POST["zoldhull"];
        $fold = $_POST["fold"];

        $sql = "UPDATE arak SET fu1='$fu1', fu2='$fu2', fu3='$fu3', soveny1='$soveny1', soveny2='$soveny3', soveny3='$soveny3', fa1='$fa1', fa2='$fa2', fa3='$fa3', fakugli='$fakugli', tuja1='$tuja1', tuja2='$tuja2',tuja3='$tuja3',tujakugli='$tujakugli', tusko1='$tusko1', tusko2='$tusko2', tusko3='$tusko3', tusko4='$tusko4', zoldhull='$zoldhull', fold='$fold'  WHERE id='$id=1'";

        mysqli_query($con, $sql);

        $success = "Sikeres módosítás!";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Árak módosítása</title>
</head>
<body>

  <div class="container">

    <h2 class="text-center my-4"> Árak módosítása </h2> 

    <?php

        if (isset($_GET["id"])):

            $id = $_GET["id"];

            $sql = "SELECT * FROM arak WHERE id='$id'";

            $result = mysqli_query($con, $sql);

            while($row = mysqli_fetch_array($result)){

                ?>

                    <form action="" method="post" class="mx-auto w-75 text-center p-5">
                        <input type="hidden" name="id" value="<?php  echo $id;  ?>">
                        <span class="d-block my-3 text-success"> <?php if(!empty($success)){ echo $success; }  ?> </span>

                        <h3>Fűnyirás:</h3>

                        <label>10cm fű:</label>
                        <input type="text" name="fu1" class="form-control mb-3" value="<?php  echo $row["fu1"];  ?>">

                        <label>20 cm fű:</label>
                        <input type="text" name="fu2" class="form-control mb-3" value="<?php echo $row["fu2"];  ?>">

                        <label>30 cm fű :</label>
                        <input type="text" name="fu3" class="form-control mb-3" value="<?php echo $row["fu3"];  ?>">

                        <h3>Sövény nyírás:</h3>

                        <label>Fazonra nyírás :</label>
                        <input type="text" name="soveny1" class="form-control mb-3" value="<?php echo $row["soveny1"];  ?>">

                        <label>Formázás :</label>
                        <input type="text" name="soveny2" class="form-control mb-3" value="<?php echo $row["soveny2"];  ?>">

                        <label>Teljes visszanyírás : </label>
                        <input type="text" name="soveny3" class="form-control mb-3" value="<?php echo $row["soveny3"];  ?>">

                        <h3>Fa kivágás:</h3>

                        <label>1 - 6m magasságig :</label>
                        <input type="text" name="fa1" class="form-control mb-3" value="<?php echo $row["fa1"];  ?>">

                        <label>6 - 8m magasságig :</label>
                        <input type="text" name="fa2" class="form-control mb-3" value="<?php echo $row["fa2"];  ?>">

                        <label>8 - 15m magasságig:</label>
                        <input type="text" name="fa3" class="form-control mb-3" value="<?php echo $row["fa3"];  ?>">

                        <label>Kuglizás:</label>
                        <input type="text" name="fakugli" class="form-control mb-3" value="<?php echo $row["fakugli"];  ?>">

                        <h3>Tuja kivágás:</h3>

                        <label>1 - 3m magasságig :</label>
                        <input type="text" name="tuja1" class="form-control mb-3" value="<?php echo $row["tuja1"];  ?>">

                        <label>3 - 6m magasságig :</label>
                        <input type="text" name="tuja2" class="form-control mb-3" value="<?php echo $row["tuja2"];  ?>">

                        <label>6 - 12m magasságig :</label>
                        <input type="text" name="tuja3" class="form-control mb-3" value="<?php echo $row["tuja3"];  ?>">

                        <label>Kuglizás:</label>
                        <input type="text" name="tujakugli" class="form-control mb-3" value="<?php echo $row["tujakugli"];  ?>">

                        <h3>Tuskó marás:</h3>

                        <label>10cm tuskó :</label>
                        <input type="text" name="tusko1" class="form-control mb-3" value="<?php echo $row["tusko1"];  ?>">

                        <label>20cm tuskó :</label>
                        <input type="text" name="tusko2" class="form-control mb-3" value="<?php echo $row["tusko2"];  ?>">

                        <label>30cm tuskó :</label>
                        <input type="text" name="tusko3" class="form-control mb-3" value="<?php echo $row["tusko3"];  ?>">

                        <label>40cm tuskó :</label>
                        <input type="text" name="tusko4" class="form-control mb-3" value="<?php echo $row["tusko4"];  ?>">

                        <h3>Kertrendezés, Zöldhulladék elszálítás:</h3>

                        <label>Zöldhulladék /m<sup>3</sup>:</label>
                        <input type="text" name="zoldhull" class="form-control mb-3" value="<?php echo $row["zoldhull"];  ?>">
                        
                        <label>Föld elszálítása /m<sup>3</sup>:</label>
                        <input type="text" name="fold" class="form-control mb-3" value="<?php echo $row["fold"];  ?>">
                        

                        <button type="submit" name="update" class="btn btn-primary">Termék módosítása</button>

                    </form>


                <?php
            }
        endif;
                ?>
                <style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }

                    td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                    }
                </style>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fű ár 1</th>
                        <th>Fű ár 2</th>
                        <th>Fű ár 3</th>
                        <th>Sövény ár 1</th>
                        <th>Sövény ár 2</th>
                        <th>Sövény ár 3</th>
                        <th>Fa ár 1</th>
                        <th>Fa ár 2</th>
                        <th>Fa ár 3</th>
                        <th>Tuja ár 1</th>
                        <th>Tuja ár 2</th>
                        <th>Tuja ár 3</th>
                        <th>Tusko ár 1</th>
                        <th>Tusko ár 2</th>
                        <th>Tusko ár 3</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                        $result = mysqli_query($con, 'SELECT * FROM arak');
                        while($price = mysqli_fetch_array($result)):
                            ?>
                            <tr>
                                <td><?php echo $price['id']; ?></td>
                                <td><?php echo $price['fu1']; ?></td>
                                <td><?php echo $price['fu2']; ?></td>
                                <td><?php echo $price['fu3']; ?></td>
                                <td><?php echo $price['soveny1']; ?></td>
                                <td><?php echo $price['soveny2']; ?></td>
                                <td><?php echo $price['soveny3']; ?></td>
                                <td><?php echo $price['fa1']; ?></td>
                                <td><?php echo $price['fa2']; ?></td>
                                <td><?php echo $price['fa3']; ?></td>
                                <td><?php echo $price['tuja1']; ?></td>
                                <td><?php echo $price['tuja2']; ?></td>
                                <td><?php echo $price['tuja3']; ?></td>
                                <td><?php echo $price['tusko1']; ?></td>
                                <td><?php echo $price['tusko2']; ?></td>
                                <td><?php echo $price['tusko3']; ?></td>
                                <td><button onclick="location.href = './admin_modosit.php?id=<?php echo $price['id']; ?>'">Szerkesztés</button></td>
                            </tr>
                        <?php
                        endwhile;

                ?>
                </tbody>
            </table>

  </div>


</body>
</html>