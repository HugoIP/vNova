<?php
  require 'database.php';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];   
      $email=$_POST['email'];
      $password=$_POST['password'];
      $daniel = 'daniel';
      $monica = 'monica';
      $hugo = 'hugo';

      if ($daniel === $email || $monica === $email || $hugo === $email) {
      header("Location: validar.php");

      } else {
      header("Location: validar2.php");
      }
    } else {
      $message = 'Usuario o contraseña incorrecta';
    }
  }
?>
<!doctype html>
<html>
<script 
src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha256-pasqAKBDmFT4eHoN2ndd61N370kFiGUFyTiUHWhU7k8="
crossorigin="anonymous"></script>

<script src="https://www.google.com/recaptcha/api.js?render=6Le6WPkUAAAAAJcC7nZeAzmcflqww3mOKA4c58T9"></script>

<head>
<title>vNovaInternet</title>
.
<link rel="stylesheet" href="estilos.css">
<meta charset="utf-8">
<h2>vNova Internet</h2>
   <center>
</head>
<header>
   </center>

</header>
<body> 
	    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
<center>
    <h1>Iniciar Sesion</h1>
<br/>
    <label>Ingrese Email o Usuario</label>
     <form action="index.php" method="POST">
      <input REQUIRED name="email" type="text" placeholder=" Usuario"><br/>
       <label>Ingrese contraseña</label>
      <input REQUIRED name="password" type="password" placeholder=" Contraseña">
      <br/>
      <input type="submit" value="Entrar">
    </form>

<script>
  $('#form').submit(function(event){
    event.preventDefault();
    grecaptcha.ready(function(){
      grecaptcha.execute('6Le6WPkUAAAAAJcC7nZeAzmcflqww3mOKA4c58T9',{action:'registro'}).then(function(token){
        $('#form').prepend('<input type="hidden"name="token"value="'+ token +'">');
        $('#form').prepend('<input type="hidden"name="action"value="registro">');
        $('#form').unbind('submit').submit();
      });
    });
  });
</script>
</center>

</body>

</html>


