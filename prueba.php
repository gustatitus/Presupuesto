<? 
session_start();
require_once("includes/connection.php");
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {

var_dump($_POST);

?>

<? include("includes/header_m.php"); ?>
<div class="container">
  <!-- Top Navigation -->
<div class="cctop clearfix"> 
  <span class="right"><a href="logout.php"><span>Cerrar sesi&oacute;n</span></a></span> 
</div>
   
 <?  
    $cont = 0;
    $pcias=mysql_query("SELECT * FROM articulos GROUP BY ID_PEDIDO ASC");//Realiza la consulta cuantos datos encontro
?>
  
 <div class="wrapper">
    <div class="wrap">
          <h1 class="Start">Men&uacute; Presupuestos</h1>
    
  
  </div>
</div>
<?php include("includes/footer.php");
}
?>
