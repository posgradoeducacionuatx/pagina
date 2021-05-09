<? 
 if (isset($_POST["submit"])) {
 	$name = $_POST["name"];
 	$remitente = $_POST["email"];
 	$mensaje = $_POST["mensaje"];

 	$txt = $name."Mensaje:".$mensaje;

 	mail("eduardo_corona@hotmail.com", "Mensaje de la página web", $txt, "From: $remitente");
 	header("Location:page2.html");
      }
 ?>