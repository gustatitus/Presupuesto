<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>

<?php include("includes/header_m.php"); ?>

<div class="container">
  <!-- Top Navigation -->
<div class="cctop clearfix"> 
	<span class="right"><a href="logout.php"><span>Cerrar sesi&oacute;n</span></a></span> 
</div>
   
  <div class="wrapper">
    <div class="wrap">
      <h1 class="Start">Men&uacute; Presupuestos</h1>
     
      <a href="crearpedido.php">
      <div class="btn-big red">
      <span class="label bottom">Crear Pedido</span>
	  </div>
	  </a>
      
      <a href="verpresupuestos.php">
      <div class="btn-big blue">
      <span class="label bottom">Ver Presupuestos</span> 
      </div>
      </a>
	<!--
      <div class="btn-small orange">
         <i class="fa fa-windows fa-2x"></i>
        <span class="label bottom">Store</span> </div>
		
      <div class="btn-big blue">
        <i class="fa fa-user fa-2x"></i>
        <span class="label bottom">User</span> </div>

      <div class="btn-small green last">
        <i class="fa fa-umbrella fa-2x"></i>
        <span class="label bottom">Application</span> </div>
		
      <div class="btn-small red-light">
        <i class="fa fa-wrench fa-2x"></i>
        <span class="label bottom">Setting</span> </div>
		
      <div class="btn-big purple">
        <i class="fa fa-video-camera fa-2x"></i>
        <span class="label bottom">Videos</span> </div>
        
      <div class="btn-big gray">
        <i class="fa fa-music fa-2x"></i>
        <span class="label bottom">Musics</span> </div>

      <div class="btn-small green-bright last">
        <i class="fa fa-gamepad fa-2x"></i>
        <span class="label bottom">Games</span> </div>
      <div class="btn-small blue">
        <i class="fa fa-twitter fa-2x"></i>
        <span class="label bottom">twitter</span> </div>
      <div class="btn-small red-light">
        <i class="fa fa-google-plus fa-2x"></i>
        <span class="label bottom">Google+</span> </div>
      <div class="btn-small blue-nav">
        <i class="fa fa-facebook fa-2x"></i>
        <span class="label bottom">Facebook</span> </div>
      <div class="btn-small redish">
        <i class="fa fa-fighter-jet fa-2x"></i>
        <span class="label bottom">Fighter Jet</span> </div>
      <div class="btn-big yellow">
        <i class="fa fa-lock fa-2x"></i>
        <span class="label bottom">Security</span> </div>
    </div>-->
  </div>
</div>
<!-- /container -->
<?php include("includes/footer.php"); ?>
	

<?php
}
?>
