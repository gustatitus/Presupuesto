<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>

<script src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
function slctr(texto,valor){
  this.texto = texto
  this.valor = valor
}

var IM=new Array()
  IM[0] = new slctr('- -Inmuebles- -')
  IM[1] = new slctr("Edificio",null)
  IM[2] = new slctr("Terreno",null)
  IM[3] = new slctr("Mejoras Edificio",null)
  
var BI=new Array()
  BI[0] = new slctr('- -Elementos de Biblioteca- -')
  BI[1] = new slctr("Cuaderno",null)
  BI[2] = new slctr("Lapiceras",null)
  BI[3] = new slctr("Elementos varios",null)
  
var RO=new Array()
  RO[0] = new slctr('- -Rodados- -')
  RO[1] = new slctr("Automóvil",null)
  RO[2] = new slctr("Camión",null)
  RO[3] = new slctr("Camioneta",null)
  RO[4] = new slctr("Motocicleta",null)
  RO[5] = new slctr("Otro rodado",null)

var IN=new Array()
  IN[0] = new slctr('- -Informática- -')
  IN[1] = new slctr("Cartucho de tinta" ,null)
  IN[2] = new slctr("CD/DVD" ,null) 
  IN[3] = new slctr("Fotocopiadora" ,null)
  IN[4] = new slctr("Fax" ,null)
  IN[5] = new slctr("Herramienta",null)
  IN[6] = new slctr("Impresora",null)
  IN[7] = new slctr("Monitor",null)
  IN[8] = new slctr("Mouse" ,null)
  IN[9] = new slctr("Memoría Extraíble" ,null)
  IN[10] = new slctr("Pilas" ,null)
  IN[11] = new slctr("Parlantes" ,null)
  IN[12] = new slctr("Router" ,null)
  IN[13] = new slctr("Toner",null)
  IN[14] = new slctr("Teclado" ,null)
  IN[15] = new slctr("UPS" ,null)
  IN[16] = new slctr("Batería UPS" ,null)
  IN[17] = new slctr("Otros" ,null)

var EL = new Array()
  EL[0] = new slctr('- -Electrónica- -')  
  EL[1] = new slctr("Teléfono",null)
  EL[2] = new slctr("Celular" ,null)
  EL[3] = new slctr("Microondas",null)
  EL[4] = new slctr("Heladera",null)
  EL[5] = new slctr("Otro tipo de equipo",null)

var MU=new Array()
  MU[0] = new slctr('- -Muebles- -')
  MU[1] = new slctr("Armario" ,null)
  MU[2] = new slctr("Mesa",null)
  MU[3] = new slctr("Mesada",null)
  MU[4] = new slctr("Silla",null)
  MU[5] = new slctr("Sillón" ,null)
  MU[6] = new slctr("Escritorio" ,null)
  MU[7] = new slctr("Otro tipo" ,null)
  
function slctryole(cual,donde){
  if(cual.selectedIndex != 0){
    donde.length=0
    cual = eval(cual.value)
    for(m=0;m<cual.length;m++){
      var nuevaOpcion = new Option(cual[m].texto);
      donde.options[m] = nuevaOpcion;
      if(cual[m].valor != null){
        donde.options[m].value = cual[m].valor
      }
      else{
        donde.options[m].value = cual[m].texto
      }
    }
  }
}

function esconde(form)
{
if ((form.familia.value != "- - Seleccionar - -") && (form.modelo.value != "Ejemplo: Monitor XP28")
     && (form.fechacompra.value != "") && (form.lugar.value != "null"))
{ form.graba.style.visibility = "visible"; } else { form.graba.style.visibility = "hidden"; }
}

</script>

<?php include("includes/header_m.php"); ?>



<div class="container">
  <!-- Top Navigation -->
<div class="cctop clearfix"> 
	<span class="right"><a href="logout.php"><span>Cerrar sesi&oacute;n</span></a></span> 
</div>
   
  <div class="wrapper">
    <div class="wrap">

<form action="agregar_presup.php" name="formulario" id="formulario" method="POST">

     <div id="cajacuadro">  
  <h1>1. Tipo de Presupuesto</h1>
  <table align="center">
    <tr>
    <td><h3>Titulo: *</h3></td><td><h3><input type="text" name="titulo" style="text-transform:uppercase;"  required size="50"></h3></td>
    </tr> 

    <tr>
    <td><h3>Categor&iacute;a: *&nbsp;&nbsp;</h3></td><td><h3><select class="form-control" name="familia" onchange="slctryole(this,this.form.elemento)" required>
                          <option value="">- - Seleccionar - -</option>
                          <option value="MU">Muebles</option>
                    <option value="IN">Informática</option>
                    <option value="EL">Electrónica</option>
                    <option value="RO">Rodados</option>
                    <option value="BI">Biblioteca</option>
                    <option value="IM">Inmueble</option>
                      </select></h3></td>
    </tr>
    <tr>
    <td><h3>Sub-Categor&iacute;a *:&nbsp;&nbsp;</h3></td><td><h3><select class="form-control" name="elemento" required>
                  <option>- - - - - -</option>
                </select></h3></td>   
    </tr>
    <tr>
    <td><h3>NOTA:</h3></td><td><h3><textarea name="nota" rows="10" cols="70"></textarea></h3></td>
    </tr> 
  </table>
</div>

<table  align="center">
  <tr>
      <td height="15">
        <br> 
      <input type="submit" name ="graba" class="botonaceptar" value="ACEPTAR">
    </td>
  </tr>
</table>
      
</form>


  </div>
</div>
<!-- /container -->
<?php include("includes/footer.php"); ?>
	

<?php
}
?>
