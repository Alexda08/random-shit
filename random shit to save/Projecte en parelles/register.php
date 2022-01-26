<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrar</title>
    <link rel="Stylesheet" href="index.css"/>
  </head>
  <body onload="reset()">
    <section>
      <div class="background2">
        <div class="contenidor">

          <div class="img">
            <img src="register.png" height="100px">
          </div>

            <form action="register.php" method="POST">

              <div class="login">
                <h1>Register Here</h1>
              </div>

 <!-- USERNAME  -->
                <div class="aaa"><label for="username">Username</label></div>
                <div class="aaa"><input class="xxx" type="text" id="usertextbox" placeholder="Enter username" name="usuari" value="" required></div>

 <!-- PASSWORD  -->
                <div class="aaa"><label for="password">Password</label></div>
                <div class="aaa"><input class="xxx"id="passwordtextbox" type="password" placeholder="Enter password" name="password" value="" required></div>
 <!-- RE PASSWORD  -->
                <div class="aaa"><label for="password">Repeat Password</label></div>
                <div class="aaa"><input class="xxx"id="passwordtextbox2" type="password" placeholder="Re Enter password" name="password2" value="" required></div>
 <!-- BOTO  -->
                <div class="buton"><input id="boto" type="submit" value="Register" onclick="register()"></div>
 <!-- LINKS  -->
                <div class="links">
                  <div class="link"><a href="#" >Has perdut la contrasenya?</a></div>
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


              if(isset($_POST['usuari']) && isset($_POST['password']) && isset($_POST['password2'])){

                $usuari = $_POST['usuari'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];


                if($stmt = $conexion->prepare("SELECT * FROM registrar WHERE user=? and password=?")){
                  $stmt->bind_param("ss", $usuari, $password);

                  $stmt->execute();

                  if ($stmt->fetch()) {

                  }else{

                    if($stmt2 = $conexion->prepare("INSERT into registrar(user, password) values(?,?)")){
                      $stmt2->bind_param("ss", $usuari, $password);

                      $stmt2->execute();

                            $conexion->close();
                            header("location: login.php");
                }
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
