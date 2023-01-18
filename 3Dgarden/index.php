<?php 

    require "connection.php";

        $error= "";
        $success = "";

    if(isset($_POST['send'])){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        if(empty($name) || empty($email) || empty($message)){

            $error = "Minden mező kitöltése kötelező!";
        }
        else{

            $sql = "INSERT INTO uzenet(name,email,message) VALUES('$name', '$email', '$message')";

            mysqli_query($con, $sql);

            $success = "Üzenet elküldése sikeres!";
        }
    }

?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>3D Garden</title>
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

    <div class="home">
        <img src="img/3dgardenkezdo.jpg" alt="">
    </div>

    <div class="about">
        <h2>Rólunk!</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, culpa! Laborum exercitationem, laudantium quo iure saepe rem laboriosam deleniti odit neque maiores vero eius quibusdam aliquid nostrum libero veniam debitis qui tempora hic fugit quod! Minus blanditiis sit quis quasi animi molestias, non beatae, nemo modi accusantium ipsum reprehenderit commodi adipisci rem! Quidem delectus corrupti neque similique excepturi fuga expedita tempore voluptates libero, aliquam exercitationem provident repellendus numquam vitae ut eaque? Beatae eveniet corrupti quis alias incidunt dolorem vero dicta nesciunt et, praesentium nam laborum mollitia corporis aliquam enim delectus quibusdam! Delectus quos, magni distinctio quae suscipit voluptas ex officia impedit fugiat, deserunt alias, voluptatem et iusto ullam veniam tempora reiciendis quibusdam? Cum qui, distinctio in recusandae beatae veniam, placeat assumenda consectetur temporibus corrupti vitae delectus, molestiae laudantium quam voluptatem doloribus? Inventore earum aut, porro impedit incidunt enim, aliquam quia quo itaque quaerat dolorem, sequi magnam necessitatibus fuga adipisci odio?</p>
    </div>

    <div class="provision">
        
        <h2>Szolgáltatásaink</h2>

            <div class="provicards">
                <div class="card">
                    <h3>Fű nyírás</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam sequi aperiam amet fugit quaerat nihil esse laudantium cumque in ut, commodi consectetur asperiores voluptatibus! Id.</p>
                    <a href="price.php" class="btn">Érdekel</a>
                </div>

                <div class="card">
                    <h3>Sövény nyírás</h3>
                    <article>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam sequi aperiam amet fugit quaerat nihil esse laudantium cumque in ut, commodi consectetur asperiores voluptatibus! Id.</p>
                    <a href="price.php" class="btn">Érdekel</a>
                    </article>
                </div>
            
                <div class="card">
                    <h3>Fakivágás</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam sequi aperiam amet fugit quaerat nihil esse laudantium cumque in ut, commodi consectetur asperiores voluptatibus! Id.</p>
                    <a href="price.php" class="btn">Érdekel</a>
                </div>

                <div class="card">
                    <h3>Tuskómarás</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam sequi aperiam amet fugit quaerat nihil esse laudantium cumque in ut, commodi consectetur asperiores voluptatibus! Id.</p>
                    <a href="price.php" class="btn">Érdekel</a>
                </div>

                <div class="card">
                    <h3>Tuja kivágás</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam sequi aperiam amet fugit quaerat nihil esse laudantium cumque in ut, commodi consectetur asperiores voluptatibus! Id.</p>
                    <a href="price.php" class="btn">Érdekel</a>
                </div>

                <div class="card">
                    <h3>Zöld hulladék elszálítás</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam sequi aperiam amet fugit quaerat nihil esse laudantium cumque in ut, commodi consectetur asperiores voluptatibus! Id.</p>
                    <a href="price.php" class="btn">Érdekel</a>
                </div>

                <div class="card">
                    <h3>Kertrendezés</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam sequi aperiam amet fugit quaerat nihil esse laudantium cumque in ut, commodi consectetur asperiores voluptatibus! Id.</p>
                    <a href="price.php" class="btn">Érdekel</a>
                </div>

                <div class="card">
                    <h3>Lomtalanítás</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam sequi aperiam amet fugit quaerat nihil esse laudantium cumque in ut, commodi consectetur asperiores voluptatibus! Id.</p>
                    <a href="price.php" class="btn">Érdekel</a>
                </div>
            </div>
    </div>
    <div class="all_contact">

        <div class="contact">
            
            <h2>Kapcsolat</h2>

            <p> <strong>Cím:</strong> 8900 Zalaegerszeg, Béke utca 26. </p>
            <p> <strong>Telefonszám:</strong> +36-20/409-8856 </p>
            <p> <strong>E-mail cím:</strong> 3dgarden@gmail.com.hu </p>

        </div>

        <div class="mapmes">
            <div>
                <iframe class="mapp "src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1364.4098400159794!2d16.823788658288883!3d46.847239529271896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47692837301b018f%3A0xb029b8f202c3f66f!2sZalaegerszeg%2C%20B%C3%A9ke%20u.%2025%2C%208900!5e0!3m2!1shu!2shu!4v1670783597308!5m2!1shu!2shu"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="message">
                <form action="" method="post">
                    
                    <h2>Vedd fel velünk a kapcsolatot!</h2>

                    <span><?php if(!empty($error)){echo $error;}?></span>
                    <span><?php if(!empty($success)){echo $success;}?></span>

                    <label for="">Teljes név:</label>
                    <input type="text" name="name" id="" placeholder="Ird be a teljes neved...">

                    <label for="">E-mail cím:</label>
                    <input type="email" name="email" id="" placeholder="Ird be az e-mail címed...">

                    <label for="">Üzenet:</label>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Ird le az üzenetet..."></textarea>

                    <button name="send">Küldés</button>
                </form>
            </div>
        </div>
    </div>

    

</body>
</html>