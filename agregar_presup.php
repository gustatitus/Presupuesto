<?
//var_dump($_GET);
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {

$familia = $_POST['familia'];
$elemento = $_POST['elemento'];
$nota = $_POST['nota'];
$idRand = rand();

switch ($elemento){
	case "Edificio": $t_elemento = "01";
	break;
	case "Terreno": $t_elemento = "02";
	break;
	case "Mejoras Edificio": $t_elemento = "03";
	break;
	case "Cuaderno": $t_elemento = "04";
	break;
	case "Lapiceras": $t_elemento = "05";
	break;
	case "Elementos varios": $t_elemento = "06";
	break;
	case "Automóvil": $t_elemento = "07";
	break;
	case "Camión": $t_elemento = "08";
	break;
	case "Camioneta": $t_elemento = "09";
	break;
	case "Motocicleta": $t_elemento = "10";
	break;
	case "Otro rodado": $t_elemento = "11";
	break;
	case "Cartucho de tinta": $t_elemento = "12";
	break;
	case "CD/DVD": $t_elemento = "13";
	break;
	case "Fotocopiadora": $t_elemento = "14";
	break;
	case "Fax": $t_elemento = "15";
	break;
	case "Herramienta": $t_elemento = "16";
	break;
	case "Impresora": $t_elemento = "17";
	break;
	case "Monitor": $t_elemento = "18";
	break;
	case "Mouse": $t_elemento = "19";
	break;
	case "Memoría Extraíble": $t_elemento = "20";
	break;
	case "Pilas": $t_elemento = "21";
	break;
	case "Parlantes": $t_elemento = "22";
	break;
	case "Router": $t_elemento = "23";
	break;
	case "Toner": $t_elemento = "24";
	break;
	case "Teclado": $t_elemento = "25";
	break;
	case "UPS": $t_elemento = "26";
	break;
	case "Batería UPS": $t_elemento = "27";
	break;
	case "Otros": $t_elemento = "28";
	break;
	case "Teléfono": $t_elemento = "29";
	break;
	case "Celular": $t_elemento = "30";
	break;
	case "Microondas": $t_elemento = "31";
	break;
	case "Heladera": $t_elemento = "32";
	break;
	case "Otro tipo de equipo": $t_elemento = "33";
	break;
	case "Armario": $t_elemento = "34";
	break;
	case "Mesa": $t_elemento = "35";
	break;
	case "Mesada": $t_elemento = "36";
	break;
	case "Silla": $t_elemento = "37";
	break;
	case "Sillón": $t_elemento = "38";
	break;
	case "Escritorio": $t_elemento = "39";
	break;
	case "Otro tipo": $t_elemento = "40";
	break;
}

if ($_GET['otro']=='SI'){ $id_pedido = $_GET['id_pedido'];
}else { $id_pedido = $familia.$t_elemento.$idRand; }

if ($_GET['otro']=='SI'){ $titu = $_GET['titulo'];
}else { $titu = $_POST['titulo']; }
?>


<?include("includes/header_m.php");?>
<form action="calcular.php" name="formulario" id="formulario" method="POST">

<div id="cajacuadro">
	<h1><? echo "El número de ID de este pedido es: ".$id_pedido; ?></h1>
	<input type="hidden" name="idpedido" value="<? echo $id_pedido; ?>">
	<input type="hidden" name="nota" value="<? echo $nota; ?>">	
	
	<h1><? echo "Presupuesto: ".$titu; ?></h1>
	<input type="hidden" name="titulo" value="<? echo $titu; ?>">

	<h2>1. Datos Vendedor</h2>
	<table align="center">
		<tr>
		<td>Nombre: *</td><td><input type="text" name="nombre" style="text-transform:uppercase;"  size="40" required></td>
		</tr>
		<tr>
		<td>Direcci&oacute;n:</td><td><input type="text" style="text-transform:uppercase;" name="direccion" size="40"></td>		
		</tr>
		<tr>
		<td>Provincia:</td><td><input type="text" style="text-transform:uppercase;" name="provincia" size="40"></td>
		</tr>
		<tr>
		<td>Tel/Fax:</td><td><input type="text" style="text-transform:uppercase;" name="telfax" size="40"></td>		
		</tr>
		<tr>
		<td>Correo electr&oacute;nico:</td><td><input type="email" name="mail" size="40"></td>
		</tr>
		<tr>
		<td>C.U.I.T.:</td><td><input type="text" name="cuit" size="40"></td>
		</tr>	
	</table>
</div>

<div id="cajacuadro">
	<h1>2. Per&iacute;odo:</h1>	
	<table align="center">
		<tr>
		<td>Fecha de Presupuesto: </td><td><input type="date" name="fpresupuesto" size="40"></td>
		</tr>
		<tr>
		<td>V&aacute;lidez (en d&iacute;as):</td><td><input type="text" name="dias" max="3" size="10" maxlength="3"></td>		
		</tr>
	</table>
</div>

<div id="cajacuadro">
	<h2>3. Presupuesto:</h2>	
	<table align="center">
		<tr>
		<td>DESCRIPCION
		<br><input type="text" name="desc01" max="3" size="40" value = "<? print $_GET['desc01']; ?>">
		<br><input type="text" name="desc02" max="3" size="40" value = "<? print $_GET['desc02']; ?>">
		<br><input type="text" name="desc03" max="3" size="40" value = "<? print $_GET['desc03']; ?>">
		<br><input type="text" name="desc04" max="3" size="40" value = "<? print $_GET['desc04']; ?>">
		<br><input type="text" name="desc05" max="3" size="40" value = "<? print $_GET['desc05']; ?>">
		<br><input type="text" name="desc06" max="3" size="40" value = "<? print $_GET['desc06']; ?>">
		<br><input type="text" name="desc07" max="3" size="40" value = "<? print $_GET['desc07']; ?>">
		<br><input type="text" name="desc08" max="3" size="40" value = "<? print $_GET['desc08']; ?>">
		<br><input type="text" name="desc09" max="3" size="40" value = "<? print $_GET['desc09']; ?>">
		<br><input type="text" name="desc10" max="3" size="40" value = "<? print $_GET['desc10']; ?>">
		</td>
		<td>UNIDADES
		<br><input type="text" name="unidades01" max="3" size="10" value = "<? print $_GET['unidades01']; ?>">
		<br><input type="text" name="unidades02" max="3" size="10" value = "<? print $_GET['unidades02']; ?>">
		<br><input type="text" name="unidades03" max="3" size="10" value = "<? print $_GET['unidades03']; ?>">
		<br><input type="text" name="unidades04" max="3" size="10" value = "<? print $_GET['unidades04']; ?>">
		<br><input type="text" name="unidades05" max="3" size="10" value = "<? print $_GET['unidades05']; ?>">
		<br><input type="text" name="unidades06" max="3" size="10" value = "<? print $_GET['unidades06']; ?>">
		<br><input type="text" name="unidades07" max="3" size="10" value = "<? print $_GET['unidades07']; ?>">
		<br><input type="text" name="unidades08" max="3" size="10" value = "<? print $_GET['unidades08']; ?>">
		<br><input type="text" name="unidades09" max="3" size="10" value = "<? print $_GET['unidades09']; ?>">
		<br><input type="text" name="unidades10" max="3" size="10" value = "<? print $_GET['unidades10']; ?>">
		</td>
		<td>PRECIO UNITARIO
		<br><input type="text" name="precio01" max="3" size="10">
		<br><input type="text" name="precio02" max="3" size="10">
		<br><input type="text" name="precio03" max="3" size="10">
		<br><input type="text" name="precio04" max="3" size="10">
		<br><input type="text" name="precio05" max="3" size="10">
		<br><input type="text" name="precio06" max="3" size="10">
		<br><input type="text" name="precio07" max="3" size="10">
		<br><input type="text" name="precio08" max="3" size="10">
		<br><input type="text" name="precio09" max="3" size="10">
		<br><input type="text" name="precio10" max="3" size="10">
		</td>
		<td>%DTO
		<br><input type="text" name="dto01" max="3" size="10" value = "0">
		<br><input type="text" name="dto02" max="3" size="10" value = "0">
		<br><input type="text" name="dto03" max="3" size="10" value = "0">
		<br><input type="text" name="dto04" max="3" size="10" value = "0">
		<br><input type="text" name="dto05" max="3" size="10" value = "0">
		<br><input type="text" name="dto06" max="3" size="10" value = "0">
		<br><input type="text" name="dto07" max="3" size="10" value = "0">
		<br><input type="text" name="dto08" max="3" size="10" value = "0">
		<br><input type="text" name="dto09" max="3" size="10" value = "0">
		<br><input type="text" name="dto10" max="3" size="10" value = "0">
		</td>
		</tr>
	</table>
</div>

<div id="cajacuadro">
	<h2>4. Per&iacute;odo:</h2>	
	<table align="center">
		<tr>
		<td>I.V.A %: </td><td><input type="text" name="iva" size="10" value="20"></td>
		</tr>
		<tr>
		<td>Forma de Pago:</td><td><input type="text" name="formaspagos" style="text-transform:uppercase;" size="20"></td>		
		</tr>
	</table>
</div>

<table  align="center">
	<tr>
	    <td height="15">
	    	<br> 
			<input type="submit" name ="agregar" class="botonaceptar" value="AGREGAR OTRO">
		</td>
	</tr>
</table>
<table  align="center">
	<tr>
	    <td height="15">
	    	<br> 
			<a href="menu.php" class="botonterminar">T E R M I N A R</a>
		</td>
	</tr>
</table>

<table  align="center">
	<tr>
	    <td height="15">
	    	<p><a href="logout.php">Finalice sesión aquí</a></p>
	    </td>
	</tr>
</table>

</form>

<?php include("includes/footer.php"); ?>
	

<?php
}
?>
