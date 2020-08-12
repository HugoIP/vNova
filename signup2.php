<?php
  require 'database.php';
  require 'sesion.php';
  ?>

<?php
  $message = '';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      header("Location: signu2.php");
      $message = 'Usuario creado con exito';
    } else {
      $message = 'Usuario o contraseña incorrecta';
    }
  }
?>
<!DOCTYPE html>
<html>
    <script src="jquery.min.js"></script>
    <script src="password.js" ></script>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
  <head>
    <meta charset="utf-8">
    <title>Usuario nuevo</title>
<link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h2>Nuevo usuario</h2>
    
<center>
    <form action="signup2.php" method="POST">
  <label>Ingrese email o nombre de usuario</label>
      <input REQUIRED name="email" type="text" placeholder="Email o Usuario">
    </br>
  <label>Ingrese contraceña</label>
      <input REQUIRED id="password" name="password" type="password" placeholder="Ingrese contraceña" maxlength="20" minlength="8" ">
      <input type="submit" value="Enviar">
    </form>
    <ul class="menuuuu">

    <span id="mensaje"></span>

<div id="main-container">

<form action="">
  <span id="mesaje"> </span>
</form>
<ul>

  <li id="mayus"> 2 Mayusculas</li>
  <li id="numbers">2 Numeros</li>
  <li id="lower"> minusculas</li>
  <li id="len"> Minimo 8 caracteres</li>

</ul>

</div>
</ul>

</center>

  </body>
</html>