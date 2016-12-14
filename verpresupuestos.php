<? 
session_start();
require_once("includes/connection.php");
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
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
    
    <table><!-- Crea la tabla pero no hay que generarla automáticamente -->
    <?
      while( $row = mysql_fetch_array($pcias) ){//Dependiendo el resultado saca los datos hasta que no haya nada
      ?>
      <td>
      <form action="comparativas.php" name="formulario" id="formulario" method="POST">
      <div class="btn-big blue">
      <span class="label bottom"><? print nl2br($row['TITULO']."\n".$row['ID_PEDIDO']."\n".$row['NOTA']); 
                                    $cadena = "\n";
                                    echo nl2br($cadena);
                                    $cont++
    ?></span>
    </div>
    <input type="hidden" name ="id_pedido" value="<? print $row['ID_PEDIDO']; ?>">
    <br>
    <input type="submit" name ="Elegir" value="<? print $row['TITULO']; ?>">
    </form>
     </td><? if($cont == 4){ $cont = 0;?> <tr></tr> <?}?>
    <? 
     }
    ?>
    </table>

  </div>
</div>
<?php include("includes/footer.php");
}
?>
