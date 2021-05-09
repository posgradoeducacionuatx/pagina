<?
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=inscripciones2019.xls");
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Tabla de ponencias</title>
		<style type="text/css">
		<!--
			.Estilo1 { border:solid 1px #999999; background-color:#FFCC99; font-weight:bold}
			.Estilo2 { border:solid 1px #999999; font-weight:bold; font-size:16px}
			.Estilo3 { border:solid 1px #999999; font-weight:bold; font-size:12px; margin:0px; padding:0px;}
		-->
		</style>
	</head>
	<body>
<?
	//	***** B A S E    D E    D A T O S *****
	$con = mysql_connect("localhost", "posgrado_eduardo", "131313B");
	if (!$con){die('ERROR DE CONECCION:' . mysql_error()); }
        mysql_query("SET NAMES 'utf8'");   
	mysql_select_db("posgrado_todo", $con);
	
	$sql="select * FROM inscripcion2019 ORDER BY inscripcion2019.ins_ID";
	$result = mysql_query($sql, $con) or die('ERROR DE SQL:'.$sql);
?>

	<TABLE>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<col style='width:100px'>
	<TR>
		<TD class="Estilo2" colspan="2" bgcolor="#6699FF"><?="Control"?></TD>
		<TD class="Estilo2" colspan="3" bgcolor="#66CCFF"><?="Nombre"?></TD>
		<TD class="Estilo2" colspan="3" bgcolor="#6699FF"><?="Estudiante"?></TD>
		<TD class="Estilo2" colspan="7" bgcolor="#66CCFF"><?="Profesor/estudiante"?></TD>
		<TD class="Estilo2" colspan="6" bgcolor="#6699FF"><?="Profesor"?></TD>
		<TD class="Estilo2" colspan="3" bgcolor="#66CCFF"><?="Dirección"?></TD>
		<TD class="Estilo2" colspan="1" bgcolor="#6699FF">&nbsp;</TD>
		<TD class="Estilo2" colspan="3" bgcolor="#66CCFF"><?="Télefonos"?></TD>
		<TD class="Estilo2" colspan="1" bgcolor="#6699FF"><?="participación"?></TD>
		<TD class="Estilo2" colspan="2" bgcolor="#66CCFF"><?="pago"?></TD>
		<TD class="Estilo2" colspan="7" bgcolor="#6699FF"><?="Fiscal"?></TD>
		<TD class="Estilo2" colspan="1" bgcolor="#66CCFF">&nbsp;</TD>
	</TR>

	<TR>
          <TD class="Estilo1"><?="Ponencia"?></TD>
          <TD class="Estilo1"><?="Fecha"?></TD>

          <TD class="Estilo1"><?="Paterno"?></TD>
          <TD class="Estilo1"><?="Materno"?></TD>
          <TD class="Estilo1"><?="Nombre (s)"?></TD>

          <TD class="Estilo1"><?="Nivel académico"?></TD>
          <TD class="Estilo1"><?="Institución"?></TD>
          <TD class="Estilo1"><?="Carrera o posgrado que cursa"?></TD>
		  
          <TD class="Estilo1"><?="Nivel académico"?></TD>
          <TD class="Estilo1"><?="Institución estudios"?></TD>
          <TD class="Estilo1"><?="Institución labora"?></TD>
          <TD class="Estilo1"><?="Departamento adscripción"?></TD>
          <TD class="Estilo1"><?="Puesto"?></TD>
          <TD class="Estilo1"><?="Pertenencia consejos asociaciones"?></TD>
          <TD class="Estilo1"><?="Otros"?></TD>
		  
          <TD class="Estilo1"><?="Nivel académico"?></TD>
          <TD class="Estilo1"><?="Institución labora"?></TD>
          <TD class="Estilo1"><?="Departamento adscripción"?></TD>
          <TD class="Estilo1"><?="Puesto"?></TD>
          <TD class="Estilo1"><?="Pertenencia consejos asociaciones"?></TD>
          <TD class="Estilo1"><?="Otro"?></TD>
		  
          <TD class="Estilo1"><?="Pais"?></TD>
          <TD class="Estilo1"><?="Estado"?></TD>
          <TD class="Estilo1"><?="Otro"?></TD>
		  
          <TD class="Estilo1"><?="Correo"?></TD>
		  
          <TD class="Estilo1"><?="TelCasa"?></TD>
          <TD class="Estilo1"><?="TelCel"?></TD>
          <TD class="Estilo1"><?="TelFax"?></TD>
		  
          <TD class="Estilo1"><?="TipoParticipa"?></TD>
		  
          <TD class="Estilo1"><?="TipoPago"?></TD>
          <TD class="Estilo1"><?="Ficha de depósito"?></TD>
		  
          <TD class="Estilo1"><?="Comprobante"?></TD>
          <TD class="Estilo1"><?="RazonSocial"?></TD>
          <TD class="Estilo1"><?="R.F.C."?></TD>
          <TD class="Estilo1"><?="Domicilio"?></TD>
          <TD class="Estilo1"><?="Estado"?></TD>
          <TD class="Estilo1"><?="Ciudad"?></TD>
          <TD class="Estilo1"><?="C.P."?></TD>
		  
          <TD class="Estilo1"><?="Credencial"?></TD>
	</TR>
<? 

	$pri = 0;
	$color = "#CCFFFF";
	$ponencia = $row["ponencia"];

	while($row = mysql_fetch_array($result)) 
		{  	
	if ($pri == 0)
		{
		$color = "#CCFFFF";
		$ponencia = $row["ponencia"];
		$pri = 1;
		}
	if ($ponencia != $row["ponencia"])
		{
			$ponencia = $row["ponencia"];
			if ($color == "#CCFFFF")
				{$color = "#FFFFFF";}
			else
				{$color = "#CCFFFF";}
		}		
		
?>

	<TR>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_Pon1"].'/'.$row["ins_Pon2"].'/'.$row["ins_Pon3"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_FechaReg"];?></TD>

<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_ApPaterno"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_ApMaterno"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_Nombre"];?></TD>
<?
		switch($row['ins_NivelAcademino1']) 
	  	{ 
   			case "1":$strAux='Licenciatura';break; 
   			case "2":$strAux='Maestría';break; 
   			case "3":$strAux='Doctorado';break; 
		} 
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$strAux;?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_Institucion1"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_Carrera1"];?></TD>

<?
		switch($row['ins_NivelAcademino3']) 
	  	{ 
   			case "1":$strAux='Licenciatura';break; 
   			case "2":$strAux='Maestría';break; 
   			case "3":$strAux='Doctorado';break; 
		} 
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$strAux;?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_InstiCursa2"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_InstiLabora2"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_Departamento2"];?></TD>
<?
		switch($row['ins_Puesto2']) 
	  	{ 
   			case "1":$strAux='Directivo';break; 
   			case "2":$strAux='Coordinador';break; 
   			case "3":$strAux='Docente investigador';break; 
   			case "4":$strAux='Secretario académico';break; 
   			case "5":$strAux='Docente';break; 
   			case "6":$strAux='Auxiliar de docencia';break; 
		} 
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$strAux;?></TD>
<?
		switch($row['ins_Consejo2']) 
	  	{ 
   			case "1":$strAux='AMC';break; 
   			case "2":$strAux='COMIE';break; 
   			case "3":$strAux='SNI';break; 
   			case "4":$strAux='AFIRSE';break; 
   			case "5":$strAux='LASA';break; 
   			case "6":$strAux='OTROS';break; 
		} 
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$strAux;?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_ConsejoOtro2"];?></TD>

<?
		switch($row['ins_NivelAcademino3']) 
	  	{ 
   			case "1":$strAux='Licenciatura';break; 
   			case "2":$strAux='Maestría';break; 
   			case "3":$strAux='Doctorado';break; 
		} 
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$strAux;?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_Institucion3"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_Departamento3"];?></TD>
<?
		switch($row['ins_Puesto3']) 
	  	{ 
   			case "1":$strAux='Directivo';break; 
   			case "2":$strAux='Coordinador';break; 
   			case "3":$strAux='Docente investigador';break; 
   			case "4":$strAux='Secretario académico';break; 
   			case "5":$strAux='Docente';break; 
   			case "6":$strAux='Auxiliar de docencia';break; 
		} 
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$strAux;?></TD>
<?
		switch($row['ins_Consejo2']) 
	  	{ 
   			case "1":$strAux='AMC';break; 
   			case "2":$strAux='COMIE';break; 
   			case "3":$strAux='SNI';break; 
   			case "4":$strAux='AFIRSE';break; 
   			case "5":$strAux='LASA';break; 
   			case "6":$strAux='OTROS';break; 
		} 
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$strAux;?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_ConsejoOtro3"];?></TD>
<?
		switch($row["ins_Pais"]) 
	  	{ 
	      case "AF": $V_Pais = "Afganistán";break;
    	  case "AL": $V_Pais = "Albania";break;
	      case "DE": $V_Pais = "Alemania";break;
    	  case "AD": $V_Pais = "Andorra";break;
	      case "AO": $V_Pais = "Angola";break;
    	  case "AI": $V_Pais = "Anguilla";break;
	      case "AQ": $V_Pais = "Antártida";break;
    	  case "AG": $V_Pais = "Antigua y Barbuda";break;
	      case "AN": $V_Pais = "Antillas Holandesas";break;
    	  case "SA": $V_Pais = "Arabia Saudí";break;
	      case "DZ": $V_Pais = "Argelia";break;
    	  case "AR": $V_Pais = "Argentina";break;
	      case "AM": $V_Pais = "Armenia";break;
    	  case "AW": $V_Pais = "Aruba";break;
	      case "AU": $V_Pais = "Australia";break;
    	  case "AT": $V_Pais = "Austria ";break;
	      case "AZ": $V_Pais = "Azerbaiyán ";break;
    	  case "BS": $V_Pais = "Bahamas ";break;
	      case "BH": $V_Pais = "Bahrein ";break;
    	  case "BD": $V_Pais = "Bangladesh ";break;
	      case "BB": $V_Pais = "Barbados ";break;
    	  case "BE": $V_Pais = "Bélgica ";break;
	      case "BZ": $V_Pais = "Belice ";break;
    	  case "BJ": $V_Pais = "Benin ";break;
	      case "BM": $V_Pais = "Bermudas ";break;
    	  case "BY": $V_Pais = "Bielorrusia ";break;
	      case "MM": $V_Pais = "Birmania ";break;
    	  case "BO": $V_Pais = "Bolivia ";break;
	      case "BA": $V_Pais = "Bosnia y Herzegovina ";break;
    	  case "BW": $V_Pais = "Botswana ";break;
	      case "BR": $V_Pais = "Brasil ";break;
    	  case "BN": $V_Pais = "Brunei ";break;
	      case "BG": $V_Pais = "Bulgaria ";break;
    	  case "BF": $V_Pais = "Burkina Faso ";break;
	      case "BI": $V_Pais = "Burundi ";break;
    	  case "BT": $V_Pais = "Bután ";break;
	      case "CV": $V_Pais = "Cabo Verde ";break;
    	  case "KH": $V_Pais = "Camboya ";break;
	      case "CM": $V_Pais = "Camerún ";break;
    	  case "CA": $V_Pais = "Canadá ";break;
	      case "TD": $V_Pais = "Chad ";break;
    	  case "CL": $V_Pais = "Chile ";break;
	      case "CN": $V_Pais = "China ";break;
    	  case "CY": $V_Pais = "Chipre" ; break;
	      case "VA": $V_Pais = "Ciudad del Vaticano (Santa Sede) ";break;
    	  case "CO": $V_Pais = "Colombia ";break;
	      case "KM": $V_Pais = "Comores ";break;
    	  case "CG": $V_Pais = "Congo ";break;
	      case "CD": $V_Pais = "Congo, República Democrática del ";break;
    	  case "KR": $V_Pais = "Corea ";break;
	      case "KP": $V_Pais = "Corea del Norte ";break;
    	  case "CI": $V_Pais = "Costa de Marfíl ";break;
	      case "CR": $V_Pais = "Costa Rica ";break;
    	  case "HR": $V_Pais = "Croacia (Hrvatska) ";break;
	      case "CU": $V_Pais = "Cuba ";break;
    	  case "DK": $V_Pais = "Dinamarca ";break;
	      case "DJ": $V_Pais = "Djibouti ";break;
    	  case "DM": $V_Pais = "Dominica ";break;
	      case "EC": $V_Pais = "Ecuador ";break;
    	  case "EG": $V_Pais = "Egipto ";break;
	      case "SV": $V_Pais = "El Salvador ";break;
    	  case "AE": $V_Pais = "Emiratos Árabes Unidos ";break;
	      case "ER": $V_Pais = "Eritrea ";break;
    	  case "SI": $V_Pais = "Eslovenia ";break;
	      case "ES": $V_Pais = "España ";break;
    	  case "US": $V_Pais = "Estados Unidos ";break;
	      case "EE": $V_Pais = "Estonia ";break;
    	  case "ET": $V_Pais = "Etiopía ";break;
	      case "FJ": $V_Pais = "Fiji ";break;
    	  case "PH": $V_Pais = "Filipinas ";break;
	      case "FI": $V_Pais = "Finlandia ";break;
    	  case "FR": $V_Pais = "Francia ";break;
	      case "GA": $V_Pais = "Gabón ";break;
    	  case "GM": $V_Pais = "Gambia ";break;
	      case "GE": $V_Pais = "Georgia ";break;
    	  case "GH": $V_Pais = "Ghana ";break;
	      case "GI": $V_Pais = "Gibraltar ";break;
    	  case "GD": $V_Pais = "Granada ";break;
	      case "GR": $V_Pais = "Grecia ";break;
    	  case "GL": $V_Pais = "Groenlandia ";break;
	      case "GP": $V_Pais = "Guadalupe ";break;
    	  case "GU": $V_Pais = "Guam ";break;
	      case "GT": $V_Pais = "Guatemala ";break;
    	  case "GY": $V_Pais = "Guayana ";break;
	      case "GF": $V_Pais = "Guayana Francesa ";break;
    	  case "GN": $V_Pais = "Guinea ";break;
	      case "GQ": $V_Pais = "Guinea Ecuatorial ";break;
    	  case "GW": $V_Pais = "Guinea-Bissau ";break;
	      case "HT": $V_Pais = "Haití ";break;
    	  case "HN": $V_Pais = "Honduras ";break;
	      case "HU": $V_Pais = "Hungría ";break;
    	  case "IN": $V_Pais = "India ";break;
    	  case "ID": $V_Pais = "Indonesia ";break;
	      case "IQ": $V_Pais = "Irak ";break;
	      case "IR": $V_Pais = "Irán ";break;
    	  case "IE": $V_Pais = "Irlanda "; break;
	      case "BV": $V_Pais = "Isla Bouvet ";break;
    	  case "CX": $V_Pais = "Isla de Christmas ";break;
	      case "IS": $V_Pais = "Islandia ";break;
    	  case "KY": $V_Pais = "Islas Caimán ";break;
	      case "CK": $V_Pais = "Islas Cook ";break;
    	  case "CC": $V_Pais = "Islas de Cocos o Keeling ";break;
	      case "FO": $V_Pais = "Islas Faroe ";break;
    	  case "HM": $V_Pais = "Islas Heard y McDonald ";break;
	      case "FK": $V_Pais = "Islas Malvinas ";break;
    	  case "MP": $V_Pais = "Islas Marianas del Norte ";break;
	      case "MH": $V_Pais = "Islas Marshall ";break;
    	  case "UM": $V_Pais = "Islas menores de Estados Unidos ";break;
	      case "PW": $V_Pais = "Islas Palau ";break;
    	  case "SB": $V_Pais = "Islas Salomón ";break;
	      case "SJ": $V_Pais = "Islas Svalbard y Jan Mayen ";break;
    	  case "TK": $V_Pais = "Islas Tokelau ";break;
	      case "TC": $V_Pais = "Islas Turks y Caicos ";break;
    	  case "VI": $V_Pais = "Islas Vírgenes (EE.UU.) ";break;
	      case "VG": $V_Pais = "Islas Vírgenes (Reino Unido) ";break;
    	  case "WF": $V_Pais = "Islas Wallis y Futuna ";break;
	      case "IL": $V_Pais = "Israel ";break;
    	  case "IT": $V_Pais = "Italia ";break;
	      case "JM": $V_Pais = "Jamaica ";break;
    	  case "JP": $V_Pais = "Japón ";break;
	      case "JO": $V_Pais = "Jordania ";break;
    	  case "KZ": $V_Pais = "Kazajistán ";break;
	      case "KE": $V_Pais = "Kenia ";break;
    	  case "KG": $V_Pais = "Kirguizistán ";break;
	      case "KI": $V_Pais = "Kiribati ";break;
    	  case "KW": $V_Pais = "Kuwait ";break;
	      case "LA": $V_Pais = "Laos ";break;
    	  case "LS": $V_Pais = "Lesotho ";break;
	      case "LV": $V_Pais = "Letonia ";break;
    	  case "LB": $V_Pais = "Líbano ";break;
	      case "LR": $V_Pais = "Liberia ";break;
    	  case "LY": $V_Pais = "Libia ";break;
	      case "LI": $V_Pais = "Liechtenstein" ; break;
    	  case "LT": $V_Pais = "Lituania ";break;
	      case "LU": $V_Pais = "Luxemburgo ";break;
    	  case "MK": $V_Pais = "Macedonia, Ex-República Yugoslava de ";break;
	      case "MG": $V_Pais = "Madagascar ";break;
    	  case "MY": $V_Pais = "Malasia ";break;
	      case "MW": $V_Pais = "Malawi ";break;
    	  case "MV": $V_Pais = "Maldivas ";break;
	      case "ML": $V_Pais = "Malí ";break;
    	  case "MT": $V_Pais = "Malta ";break;
	      case "MA": $V_Pais = "Marruecos ";break;
    	  case "MQ": $V_Pais = "Martinica ";break;
	      case "MU": $V_Pais = "Mauricio ";break;
    	  case "MR": $V_Pais = "Mauritania ";break;
	      case "YT": $V_Pais = "Mayotte ";break;
    	  case "MX": $V_Pais = "México ";break;
	      case "FM": $V_Pais = "Micronesia ";break;
    	  case "MD": $V_Pais = "Moldavia ";break;
	      case "MC": $V_Pais = "Mónaco ";break;
    	  case "MN": $V_Pais = "Mongolia ";break;
	      case "MS": $V_Pais = "Montserrat ";break;
    	  case "MZ": $V_Pais = "Mozambique ";break;
	      case "NA": $V_Pais = "Namibia ";break;
    	  case "NR": $V_Pais = "Nauru ";break;
	      case "NP": $V_Pais = "Nepal ";break;
    	  case "NI": $V_Pais = "Nicaragua ";break;
	      case "NE": $V_Pais = "Níger ";break;
    	  case "NG": $V_Pais = "Nigeria ";break;
	      case "NU": $V_Pais = "Niue ";break;
    	  case "NF": $V_Pais = "Norfolk ";break;
	      case "NO": $V_Pais = "Noruega ";break;
    	  case "NC": $V_Pais = "Nueva Caledonia break;";
	      case "NZ": $V_Pais = "Nueva Zelanda ";break;
    	  case "OM": $V_Pais = "Omán ";break;
	      case "NL": $V_Pais = "Países Bajos ";break;
    	  case "PA": $V_Pais = "Panamá ";break;
	      case "PG": $V_Pais = "Papúa Nueva Guinea ";break;
    	  case "PK": $V_Pais = "Paquistán ";break;
	      case "PY": $V_Pais = "Paraguay ";break;
    	  case "PE": $V_Pais = "Perú ";break;
	      case "PN": $V_Pais = "Pitcairn ";break;
    	  case "PF": $V_Pais = "Polinesia Francesa ";break;
	      case "PL": $V_Pais = "Polonia ";break;
    	  case "PT": $V_Pais = "Portugal ";break;
	      case "PR": $V_Pais = "Puerto Rico ";break;
    	  case "QA": $V_Pais = "Qatar ";break;
	      case "UK": $V_Pais = "Reino Unido ";break;
    	  case "CF": $V_Pais = "República Centroafricana ";break;
	      case "CZ": $V_Pais = "República Checa ";break;
    	  case "ZA": $V_Pais = "República de Sudáfrica ";break;
	      case "DO": $V_Pais = "República Dominicana ";break;
    	  case "SK": $V_Pais = "República Eslovaca ";break;
	      case "RE": $V_Pais = "Reunión ";break;
    	  case "RW": $V_Pais = "Ruanda ";break;
	      case "RO": $V_Pais = "Rumania ";break;
    	  case "RU": $V_Pais = "Rusia ";break;
	      case "EH": $V_Pais = "Sahara Occidental ";break;
    	  case "KN": $V_Pais = "Saint Kitts y Nevis ";break;
	      case "WS": $V_Pais = "Samoa ";break;
    	  case "AS": $V_Pais = "Samoa Americana ";break;
	      case "SM": $V_Pais = "San Marino ";break;
    	  case "VC": $V_Pais = "San Vicente y Granadinas ";break;
	      case "SH": $V_Pais = "Santa Helena ";break;
    	  case "LC": $V_Pais = "Santa Lucía ";break;
	      case "ST": $V_Pais = "Santo Tomé y Príncipe ";break;
    	  case "SN": $V_Pais = "Senegal ";break;
	      case "SC": $V_Pais = "Seychelles ";break;
    	  case "SL": $V_Pais = "Sierra Leona ";break;
	      case "SG": $V_Pais = "Singapur ";break;
    	  case "SY": $V_Pais = "Siria ";break;
	      case "SO": $V_Pais = "Somalia ";break;
    	  case "LK": $V_Pais = "Sri Lanka ";break;
	      case "PM": $V_Pais = "St. Pierre y Miquelon ";break;
    	  case "SZ": $V_Pais = "Suazilandia ";break;
	      case "SD": $V_Pais = "Sudán ";break;
    	  case "SE": $V_Pais = "Suecia ";break;
	      case "CH": $V_Pais = "Suiza ";break;
    	  case "SR": $V_Pais = "Surinam ";break;
	      case "TH": $V_Pais = "Tailandia ";break;
    	  case "TW": $V_Pais = "Taiwán ";break;
	      case "TZ": $V_Pais = "Tanzania ";break;
    	  case "TJ": $V_Pais = "Tayikistán ";break;
	      case "TF": $V_Pais = "Territorios franceses del Sur ";break;
    	  case "TP": $V_Pais = "Timor Oriental ";break;
	      case "TG": $V_Pais = "Togo ";break;
    	  case "TO": $V_Pais = "Tonga ";break;
	      case "TT": $V_Pais = "Trinidad y Tobago ";break;
    	  case "TN": $V_Pais = "Túnez ";break;
	      case "TM": $V_Pais = "Turkmenistán ";break;
    	  case "TR": $V_Pais = "Turquía ";break;
	      case "TV": $V_Pais = "Tuvalu ";break;
    	  case "UA": $V_Pais = "Ucrania ";break;
	      case "UG": $V_Pais = "Uganda ";break;
    	  case "UY": $V_Pais = "Uruguay ";break;
	      case "UZ": $V_Pais = "Uzbekistán ";break;
    	  case "VU": $V_Pais = "Vanuatu ";break;
	      case "VE": $V_Pais = "Venezuela ";break;
    	  case "VN": $V_Pais = "Vietnam ";break;
	      case "YE": $V_Pais = "Yemen ";break;
    	  case "YU": $V_Pais = "Yugoslavia ";break;
	      case "ZM": $V_Pais = "Zambia ";break;
    	  case "ZW": $V_Pais = "Zimbabue";break;
		} 
	switch($row["ins_Edo"]) 
		{
	      case 1: $V_Estado = "Aguascalientes";break;
    	  case 2: $V_Estado = "Baja California";break;
	      case 3: $V_Estado = "Baja California Sur";break;
    	  case 4: $V_Estado = "Campeche";break;
	      case 5: $V_Estado = "Coahuila";break;
    	  case 6: $V_Estado = "Colima";break;
	      case 7: $V_Estado = "Chiapas";break;
    	  case 8: $V_Estado = "Chihuahua";break;
	      case 9: $V_Estado = "Ciudad de México";break;
    	  case 10: $V_Estado = "Durango";break;
	      case 11: $V_Estado = "Estado de México";break;
    	  case 12: $V_Estado = "Guanajuato";break;
	      case 13: $V_Estado = "Guerrero";break;
    	  case 14: $V_Estado = "Hidalgo";break;
	      case 15: $V_Estado = "Jalisco";break;
    	  case 16: $V_Estado = "Michoacán";break;
	      case 17: $V_Estado = "Morelos";break;
    	  case 18: $V_Estado = "Nayarit";break;
	      case 19: $V_Estado = "Nuevo León";break;
    	  case 20: $V_Estado = "Oaxaca";break;
	      case 21: $V_Estado = "Puebla";break;
    	  case 22: $V_Estado = "Querétaro";break;
	      case 23: $V_Estado = "Quintana Roo";break;
    	  case 24: $V_Estado = "San Luis Potosí";break;
	      case 25: $V_Estado = "Sinaloa";break;
    	  case 26: $V_Estado = "Sonora";break;
	      case 27: $V_Estado = "Tabasco";break;
    	  case 28: $V_Estado = "Tamaulipas";break;
	      case 29: $V_Estado = "Tlaxcala";break;
    	  case 30: $V_Estado = "Veracruz";break;
	      case 31: $V_Estado = "Yucatán";break;
    	  case 32: $V_Estado = "Zacatecas";break;
		}
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$V_Pais;?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$V_Estado;?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_OtroEdo"];?></TD>

<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_Correo"];?></TD>

<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_TelCasa"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_TelCel"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_TelFax"];?></TD>
<? 
	$auxTp = "Asistente";
	if($row["ins_TipoParticipa"] == "b"){$auxTp = "Ponente";}
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$auxTp;?></TD>
<? 
	$auxTp = "Estudiante o ponente";
	if($row["ins_TipoPago"] == "b"){$auxTp = "Público en general";}
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$auxTp;?></TD>
<TD class="Estilo3" style="background:<?=$color?>">
	http://www.posgradoeducacionuatx.org/formato1/fiscal/<?=$row["ins_Deposito"];?>
</TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_sino"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_FIRazonSocial"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_FIRFC"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_FIDomicilio"];?></TD>
<?
	switch($row["ins_FIEdo"]) 
		{
	      case 1: $V_Estado = "Aguascalientes";break;
    	  case 2: $V_Estado = "Baja California";break;
	      case 3: $V_Estado = "Baja California Sur";break;
    	  case 4: $V_Estado = "Campeche";break;
	      case 5: $V_Estado = "Coahuila";break;
    	  case 6: $V_Estado = "Colima";break;
	      case 7: $V_Estado = "Chiapas";break;
    	  case 8: $V_Estado = "Chihuahua";break;
	      case 9: $V_Estado = "Ciudad de México";break;
    	  case 10: $V_Estado = "Durango";break;
	      case 11: $V_Estado = "Estado de México";break;
    	  case 12: $V_Estado = "Guanajuato";break;
	      case 13: $V_Estado = "Guerrero";break;
    	  case 14: $V_Estado = "Hidalgo";break;
	      case 15: $V_Estado = "Jalisco";break;
    	  case 16: $V_Estado = "Michoacán";break;
	      case 17: $V_Estado = "Morelos";break;
    	  case 18: $V_Estado = "Nayarit";break;
	      case 19: $V_Estado = "Nuevo León";break;
    	  case 20: $V_Estado = "Oaxaca";break;
	      case 21: $V_Estado = "Puebla";break;
    	  case 22: $V_Estado = "Querétaro";break;
	      case 23: $V_Estado = "Quintana Roo";break;
    	  case 24: $V_Estado = "San Luis Potosí";break;
	      case 25: $V_Estado = "Sinaloa";break;
    	  case 26: $V_Estado = "Sonora";break;
	      case 27: $V_Estado = "Tabasco";break;
    	  case 28: $V_Estado = "Tamaulipas";break;
	      case 29: $V_Estado = "Tlaxcala";break;
    	  case 30: $V_Estado = "Veracruz";break;
	      case 31: $V_Estado = "Yucatán";break;
    	  case 32: $V_Estado = "Zacatecas";break;
		}
?>
<TD class="Estilo3" style="background:<?=$color?>"><?=$V_Estado;?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_FICiudad"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>"><?=$row["ins_FICP"];?></TD>
<TD class="Estilo3" style="background:<?=$color?>">
	http://www.posgradoeducacionuatx.org/fiscal/<?=$row["ins_Credencial"];?>
</TD>
</TR>

<? 
		}
	mysql_close($con);
?>
	
	</body>
</html>
