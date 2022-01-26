<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel="Stylesheet" href="index.css"/>
  </head>
  <body onload="reset()">
    <section>
      <div class="background">
        <div class="contenidor">

          <div class="img">
            <img src="usericon.png" height="100px">
          </div>



            <form  action="login.php" method="POST">

              <div class="login">
                <h1>Log In Here</h1>
              </div>

 <!-- USERNAME  -->
                <div class="aaa"><label for="username">Username</label></div>
                <div class="aaa"><input class="xxx" id="user" type="text" placeholder="Enter username" name="nom" value="" required></div>

 <!-- PASSWORD  -->
                <div class="aaa"><label for="password">Password</label></div>
                <div class="aaa"><input class="xxx" id="password" type="password" placeholder="Enter password" name="contra" value="" required></div>

                <div class="buton"><input id="boto" type="submit" value="Log In" onclick="inicisesio()"></div>

                <div class="links">
                  <div class="link"><a href="#" >Has perdut la contrasenya?</a></div>
                  <div class="link"><a href="register.php">No tens una compta?</a></div>
                </div>

            </form>

          <div id="php">

            <?php
            mysqli_report(MYSQLI_REPORT_OFF);
/*
              $servidor = "localhost";
              $nombreusuario = "root";
              $pass = "";
              $dbname = "projecteparelles";
*/
/*
              $servidor = "localhost";
              $nombreusuario = "id13615128_alex";
              $pass = "c)~&f4Ti0R!\*M}r";
              $dbname = "id13615128_projecteparelles";
*/


                $servidor = "sql304.epizy.com";
                $nombreusuario = "epiz_25728895";
                $pass = "XpoDe0UBbKsviV";
                $dbname = "epiz_25728895_projecteparelles";


              $conexion = new mysqli($servidor, $nombreusuario, $pass, $dbname);


              if(isset($_POST['nom']) && isset($_POST['contra'])){
          $usuari = $_POST['nom'];
          $password = $_POST['contra'];

          $resultats = mysqli_query($conexion, "SELECT * FROM registrar");
          while ($consulta = mysqli_fetch_array($resultats)) {


          if(($consulta['user'] === $usuari) && ($consulta['password'] === $password)){

            header ("Location: index4.html");
          }

        }
          }
            ?>
          </div>

        </div>
      </div>
    </section>

    <script src="index.js"></script>
  </body>
</html>
