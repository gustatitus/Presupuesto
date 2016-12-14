<?php
session_start();
require_once("includes/connection.php");
if(isset($_SESSION["session_username"])){header('Location: menu.php');}
if(isset($_POST["login"])){
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query =mysql_query("SELECT * FROM usuarios WHERE username='".$username."' AND password='".$password."'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($username == $dbusername && $password == $dbpassword)

    {
    	$_SESSION['session_username']=$username;
    	header("Location: menu.php");}
    } else {

 $message =  "Nombre de usuario ó contraseña invalida!";
    }

} else {
    $message = "Todos los campos son requeridos!";
}
}
include("includes/header.php");
?>




    <div class="container mlogin">
            <div id="login">
    <h1>Logueo</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">Nombre De Usuario<br />
        <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
    </p>
    <p>
        <label for="user_pass">Contraseña<br />
        <input type="password" name="password" id="password" class="input" value="" size="20" /></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button" value="Entrar" />
    </p>
       <!-- <p class="regtext">No estas registrado? <a href="register.php" >Registrate Aquí</a>!</p> -->
</form>

    </div>

    </div>
	
	<? include("includes/footer.php"); ?>
	
	<? if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	