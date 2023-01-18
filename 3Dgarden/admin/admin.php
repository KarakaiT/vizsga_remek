<?php

    require "../connection.php";

    $error = "";
    $success = "";

    if(isset($_POST["upload"])){

        
        $target = "../img/".$_FILES["kep"]["name"];
        $kep = $_FILES["kep"]["name"];
        $target2 = "../img2/".$_FILES["kep2"]["name"];
        $kep2 = $_FILES["kep2"]["name"];
        $munnev = $_POST["munnev"];
        $munhely = $_POST["munhely"];
        $munleir = $_POST["munleir"];

        if(empty("kep") ||  empty("kep2") ||empty("munnev") || empty("munhely") || empty("munleir")){

            $error = "Minden mező kitöltése kötelező!";
        }
        else{

            $sql = "INSERT INTO jobs(munnev,munhely,munleir,kep,kep2) VALUES('$munnev', '$munhely','$munleir','$kep','$kep2')";
            if(mysqli_query($con, $sql)){
                $inserted_id = mysqli_insert_id($con);
                move_uploaded_file($_FILES["kep"]["tmp_name"], $target);
                move_uploaded_file($_FILES["kep2"]["tmp_name"], $target2);

                $success = "Feltöltés sikeres! ID: ".$inserted_id;
            } else {
                $error = "Hiba történt az SQL feltöltése során: ".mysqli_error($con);

            }

        }

    }

?>



<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <title>Admin Feltöltés</title>
</head>
<body>
    <h1 class="text-center my-4">Feltöltés</h1>
    <form action="" method="post" enctype="multipart/form-data" class="mx-auto w-50 text-center p-5">
        <label>Munka kép:</label>
        <input type="file" name="kep" class="form-control mb-3">

        <label>Munka kép2:</label>
        <input type="file" name="kep2" class="form-control mb-3">

        <label for="">Munka megnevezése:</label>
        <input type="text" name="munnev" id="" class="form-control mb-3">

        <label for="">Munkavégzés helye:</label>
        <input type="text" name="munhely" id="" class="form-control mb-3">

        <label for="">Munka rövid leirása:</label>
        <textarea name="munleir" id="" cols="30" rows="10" class="form-control mb-3"></textarea>

        <button type="submit" name="upload" class="btn btn-primary">Feltöltés</button>
    </form>
    <div>
        <?php echo $success; echo $error; ?>
    </div>


    <table class="table table-light table-striped text-center shadow-lg ">
            <tr>
                <th>Munka név</th>
                <th>Munka hely</th>
                <th>Munka leirás</th>
                <th>Kép1</th>
                <th>kép2</th>
            </tr>
    <?php

        $result = mysqli_query($con, 'SELECT * FROM jobs');
        while($job = mysqli_fetch_array($result)):
                ?>
        
        <tr>
            <td><?php echo $job['munnev']; ?></td>
            <td><?php echo $job['munhely']; ?></td>
            <td><?php echo $job['munleir']; ?></td>
            <td><?php if($job['kep']){echo '<img src="../img/'.$job['kep'].'" style="max-height: 32px" />';} ?> </td>
            <td><?php if($job['kep2']){echo '<img src="../img/'.$job['kep2'].'style="max-height: 32px" />';} ?> </td>
        </tr>
    <?php
        endwhile;
    ?>
    
</body>
</html>