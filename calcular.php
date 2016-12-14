<?
session_start();
require_once("includes/connection.php");

//var_dump($_POST);
$usr = $_SESSION['session_username'];

if ($_POST['otro']==''){
	$id_pedido = $_POST['idpedido'];
}else { $id_pedido = $_POST['otro'];
	$id_pedido = $_POST['idpedido'];
}

$t_titu = $_POST['titulo'];
$nota = $_POST['nota'];

$nomb = $_POST["nombre"];
$dir = $_POST["direccion"];
$prov = $_POST["provincia"];
$email = $_POST["mail"];
$faxtel = $_POST["telfax"];
$cuit = $_POST["cuit"];
$fecha_pre = $_POST["fpresupuesto"];
$dias_pre = $_POST["dias"];

$descr01 = $_POST["desc01"];
$descr02 = $_POST["desc02"];
$descr03 = $_POST["desc03"];
$descr04 = $_POST["desc04"];
$descr05 = $_POST["desc05"];
$descr06 = $_POST["desc06"];
$descr07 = $_POST["desc07"];
$descr08 = $_POST["desc08"];
$descr09 = $_POST["desc09"];
$descr10 = $_POST["desc10"];

$unid01 = $_POST["unidades01"];
$unid02 = $_POST["unidades02"];
$unid03 = $_POST["unidades03"];
$unid04 = $_POST["unidades04"];
$unid05 = $_POST["unidades05"];
$unid06 = $_POST["unidades06"];
$unid07 = $_POST["unidades07"];
$unid08 = $_POST["unidades08"];
$unid09 = $_POST["unidades09"];
$unid10 = $_POST["unidades10"];

$prec01 = $_POST["precio01"];
$prec02 = $_POST["precio02"];
$prec03 = $_POST["precio03"];
$prec04 = $_POST["precio04"];
$prec05 = $_POST["precio05"];
$prec06 = $_POST["precio06"];
$prec07 = $_POST["precio07"];
$prec08 = $_POST["precio08"];
$prec09 = $_POST["precio09"];
$prec10 = $_POST["precio10"];

$descu01 = '0.'.$_POST["dto01"];
$descu02 = '0.'.$_POST["dto02"];
$descu03 = '0.'.$_POST["dto03"];
$descu04 = '0.'.$_POST["dto04"];
$descu05 = '0.'.$_POST["dto05"];
$descu06 = '0.'.$_POST["dto06"];
$descu07 = '0.'.$_POST["dto07"];
$descu08 = '0.'.$_POST["dto08"];
$descu09 = '0.'.$_POST["dto09"];
$descu10 = '0.'.$_POST["dto10"];

$totaldesc = $unid01*($prec01-($descu01 * $prec01)) + $unid02*($prec02-($descu02 * $prec02)) + $unid03*($prec03-($descu03 * $prec03)) + $unid04*($prec04-($descu04 * $prec04)) + $unid05*($prec05-($descu05 * $prec05)) + $unid06*($prec06-($descu06 * $prec06)) + $unid07*($prec07-($descu07 * $prec07)) + $unid08*($prec08-($descu08 * $prec08)) + $unid09*($prec09-($descu09 * $prec09)) + $unid10*($prec10-($descu10 * $prec10));

if ($_POST['iva']=='0'){ $iva = 1; }else { $iva = '0.'.$_POST['iva']; }

$total_civa = ($totaldesc * $iva)+$totaldesc;

$formadepago = $_POST["formaspagos"];

$sql = "insert into articulos (NOMBRE, DIRECCION, PROVINCIA, TELFAX, MAIL, CUIT, FECHAPRES, VALIDEZ, DESC01, DESC02, DESC03, DESC04, DESC05, DESC06, DESC07, DESC08, DESC09, DESC10, UNIDAD01, UNIDAD02, UNIDAD03, UNIDAD04, UNIDAD05, UNIDAD06, UNIDAD07, UNIDAD08, UNIDAD09, UNIDAD10, PRECIO01, PRECIO02, PRECIO03, PRECIO04, PRECIO05, PRECIO06, PRECIO07, PRECIO08, PRECIO09, PRECIO10, DTO01, DTO02, DTO03, DTO04, DTO05, DTO06, DTO07, DTO08, DTO09, DTO10, IVA, FPAGO, USUARIO, ID_PEDIDO, TITULO, TOTAL_SIVA, TOTAL_IVA, NOTA )
		 values ('$nomb', '$dir', '$prov', '$faxtel', '$email', '$cuit', '$fecha_pre', '$dias_pre', '$descr01', '$descr02', '$descr03', '$descr04', '$descr05', '$descr06', '$descr07', '$descr08', '$descr09', '$descr10', '$unid01', '$unid02', '$unid03', '$unid04', '$unid05', '$unid06', '$unid07', '$unid08', '$unid09', '$unid10', '$prec01', '$prec02', '$prec03', '$prec04', '$prec05', '$prec06', '$prec07', '$prec08', '$prec09', '$prec10', '$descu01', '$descu02', '$descu03', '$descu04', '$descu05', '$descu06', '$descu07', '$descu08', '$descu09', '$descu10', '$iva', '$formadepago', '$usr', '$id_pedido', '$t_titu', '$totaldesc', '$total_civa', '$nota')";
$agrega = mysql_query ($sql, $con);

if (!mysql_error())

		{	header ("Location: agregar_presup.php?otro=SI&id_pedido=$id_pedido&titulo=$t_titu&desc01=$descr01&desc02=$descr02&desc03=$descr03&desc04=$descr04&desc05=$descr05&desc06=$descr06&desc07=$descr07&desc08=$descr08&desc09=$descr09&desc10=$descr10&unidades01=$unid01&unidades02=$unid02&unidades03=$unid03&unidades04=$unid04&unidades05=$unid05&unidades06=$unid06&unidades07=$unid07&unidades08=$unid08&unidades09=$unid09&unidades10=$unid10");	}
		else
		{
			echo "ERROR al grabar sus datos. Comuniquese con el administrador <br>programacion@camionerosentrerios.org<br> - El error es:" .mysql_errno();
			switch(mysql_errno())
			{
				case 2003: echo "No se puede conectar al servidor MySQL";
				case 2006: echo "El servidor MySQL se ha apagado";
				case 2008: echo "MySQL se quedó sin memoria";
				case 2013: echo "Se perdió la conexión con el servidor MySQL durante la consulta";
				case 2047: echo "incorrecto o desconocido protocolo";
			}
		}
	
mysql_close($con);

?>