<? 
session_start();
require_once("includes/connection.php");
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>

<? include("includes/header_s.php"); ?>

<div id="container">

<div class="cctop clearfix"> 
  <span class="right"><a href="logout.php"><span>Cerrar sesi&oacute;n</span></a></span> 
</div>

 <?  
    $id_pedido = $_POST['id_pedido'];
    $cont = 0;
    $pcias=mysql_query("SELECT * FROM articulos where ID_PEDIDO='$id_pedido' order by TOTAL_IVA asc");//Realiza la consulta cuantos datos encontro
    $pcias2=mysql_query("SELECT * FROM articulos where ID_PEDIDO='$id_pedido' order by TOTAL_IVA asc");
    $pcias3=mysql_query("SELECT * FROM articulos where ID_PEDIDO='$id_pedido' order by TOTAL_IVA asc");
    $pcias4=mysql_query("SELECT * FROM articulos where ID_PEDIDO='$id_pedido' order by TOTAL_IVA asc");
?>


<div class="wrapper">
    <div class="wrap">
          <h1 class="Start">Precio por unidad</h1>

  <table bgcolor= "#00FFFF" border="1" >
  <tr>
      <th>VENDEDOR</th><th>ITEMS 1</th><th>ITEMS 2</th><th>ITEMS 3</th><th>ITEMS 4</th><th>ITEMS 5</th><th>ITEMS 6</th><th>ITEMS 7</th><th>ITEMS 8</th><th>ITEMS 9</th><th>ITEMS 10</th><th>TOTAL</th>
     </tr>
  <?
      while( $row2 = mysql_fetch_array($pcias2) ){//Dependiendo el resultado saca los datos hasta que no haya nada
  ?>

    <tr>
      <td><b><? print $row2['NOMBRE']; ?></b></td>
      <td><b><? print $row2['PRECIO01']; ?></b></td>
      <td><b><? print $row2['PRECIO02']; ?></b></td>
      <td><b><? print $row2['PRECIO03']; ?></b></td>
      <td><b><? print $row2['PRECIO04']; ?></b></td>
      <td><b><? print $row2['PRECIO05']; ?></b></td>
      <td><b><? print $row2['PRECIO06']; ?></b></td>
      <td><b><? print $row2['PRECIO07']; ?></b></td>
      <td><b><? print $row2['PRECIO08']; ?></b></td>
      <td><b><? print $row2['PRECIO09']; ?></b></td>
      <td><b><? print $row2['PRECIO10']; ?></b></td>
      <td><b><? print $row2['TOTAL_IVA']; ?></b></td>
    </tr>
  <? 
          }
  ?>
  </table>

    <h1 class="Start">Descripciones por art&iacute;culo</h1>
  <table bgcolor= "#00FFFF" border="1" >
  <tr>
      <th>VENDEDOR</th><th>ITEMS 1</th><th>ITEMS 2</th><th>ITEMS 3</th><th>ITEMS 4</th><th>ITEMS 5</th><th>ITEMS 6</th><th>ITEMS 7</th><th>ITEMS 8</th><th>ITEMS 9</th><th>ITEMS 10</th>
     </tr>
  <?
      while( $row3 = mysql_fetch_array($pcias3) ){//Dependiendo el resultado saca los datos hasta que no haya nada
  ?>

    <tr>
      <td><b><? print $row3['NOMBRE']; ?></b></td>
      <td><b><? print $row3['DESC01']; ?></b></td>
      <td><b><? print $row3['DESC02']; ?></b></td>
      <td><b><? print $row3['DESC03']; ?></b></td>
      <td><b><? print $row3['DESC04']; ?></b></td>
      <td><b><? print $row3['DESC05']; ?></b></td>
      <td><b><? print $row3['DESC06']; ?></b></td>
      <td><b><? print $row3['DESC07']; ?></b></td>
      <td><b><? print $row3['DESC08']; ?></b></td>
      <td><b><? print $row3['DESC09']; ?></b></td>
      <td><b><? print $row3['DESC10']; ?></b></td>
    </tr>
  <? 
          }
  ?>
  </table>

            <h1 class="Start">Descuento por art&iacute;culo</h1>

  <table bgcolor= "#00FFFF" border="1" >
  <tr>
      <th>VENDEDOR</th><th>ITEMS 1</th><th>ITEMS 2</th><th>ITEMS 3</th><th>ITEMS 4</th><th>ITEMS 5</th><th>ITEMS 6</th><th>ITEMS 7</th><th>ITEMS 8</th><th>ITEMS 9</th><th>ITEMS 10</th><th>TOTAL</th>
     </tr>
  <?
      while( $row4 = mysql_fetch_array($pcias4) ){//Dependiendo el resultado saca los datos hasta que no haya nada
  ?>

    <tr>
      <td><b><? print $row4['NOMBRE']; ?></b></td>
      <td><b><? print $row4['DTO01']; ?></b></td>
      <td><b><? print $row4['DTO02']; ?></b></td>
      <td><b><? print $row4['DTO03']; ?></b></td>
      <td><b><? print $row4['DTO04']; ?></b></td>
      <td><b><? print $row4['DTO05']; ?></b></td>
      <td><b><? print $row4['DTO06']; ?></b></td>
      <td><b><? print $row4['DTO07']; ?></b></td>
      <td><b><? print $row4['DTO08']; ?></b></td>
      <td><b><? print $row4['DTO09']; ?></b></td>
      <td><b><? print $row4['DTO10']; ?></b></td>
      <td><b><? print $row4['TOTAL_IVA']; ?></b></td>
    </tr>
  <? 
          }
  ?>
  </table>


  <canvas id="chart" width="600" height="500"></canvas>

  <table id="chartData" bgcolor= "#00FFFF" border="1" hidden>
  <tr>
      <th>VENDEDOR</th><th>TOTAL ($)</th>
     </tr>
  <?
      while( $row = mysql_fetch_array($pcias) ){//Dependiendo el resultado saca los datos hasta que no haya nada
  ?>

    <tr style="color: <?echo '#'.$color = substr(md5(rand()), 0, 6);?>">
      <td><b><? print $row['NOMBRE']; ?></td><td><? print $row['TOTAL_IVA']; ?></b></td>
    </tr>

  <? 
          }
  ?>
  </table>

  </div>
</div>

<?php include("includes/footer.php");
}
?>
