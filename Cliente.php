<?php
require_once 'lib/nusoap.php';
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$valor = $_POST['proVar'];
}

$cliente = new nusoap_client("http://serviciosoapmoto.x10.mx/MotService.php");

$error = $cliente->getError();
if($error){
	echo "<h2>Constructor error</h2><pre>".$error. "</pre>";
}


switch ($valor) {
	case 1:
		$respuesta = $cliente->call("leermoto");
			if ($cliente->fault){
				echo "<h2>fault</h2><pre>";
				print_r($respuesta);
				echo "</pre>";
			}

		else{
			$error = $cliente->getError();
			if($error){
				echo "<h2>Error</h2><pre>".$error."</pre>";
			}
			else{
				echo "<h2>Motos</h2><pre>";
				foreach($respuesta as $resul){
				echo $resul, " ";
				}
				echo "</pre>";
			    }
			}
		break;
	case 2:
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nombre = $_POST['nombre'];
		$modelo = $_POST['modelo'];
		$marca = $_POST['marca'];
		$cilindrada = $_POST['cilindrada'];
		}
		$respuesta = $cliente->call("insertmoto",array("nombre" =>$nombre, "modelo" =>$modelo, "marca" =>$marca, "cilindrada" =>$cilindrada));
		if($cliente->fault){
			echo "<h2>Fault<h2><pre>";
			print_r($respuesta);
			echo "</pre>";
		}
		else{
			$error = $cliente->getError();
			if($error){
				echo "<h2>Error</h2><pre>".$error."</pre>";
			}
			else{
				echo "<h2>Registro insertado</h2><pre>";
				//echo $respuesta;
				echo "</pre>";
			}
		}
		break;
	case 3:
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['idmoto'];
		$nombre = $_POST['nombre'];
		$modelo = $_POST['modelo'];
		$marca = $_POST['marca'];
		$cilindrada = $_POST['cilindrada'];
		}
		$respuesta = $cliente->call("actualizarmoto",array("id" =>$id, "nombre" =>$nombre, "modelo" =>$modelo, "marca" =>$marca, "cilindrada" =>$cilindrada));
		if($cliente->fault){
			echo "<h2>Fault<h2><pre>";
			print_r($respuesta);
			echo "</pre>";
		}
		else{
			$error = $cliente->getError();
			if($error){
				echo "<h2>Error</h2><pre>".$error."</pre>";
			}
			else{
				echo "<h2>Registro Modificado</h2><pre>";
				//echo $respuesta;
				echo "</pre>";
			}
		}
		break;
	case 4:
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['idmoto'];
		}
		$respuesta = $cliente->call("eliminarmoto",array("id"=>$id));
		if($cliente->fault){
			echo "<h2>Fault<h2><pre>";
			print_r($respuesta);
			echo "</pre>";
		}
		else{
			$error = $cliente->getError();
			if($error){
				echo "<h2>Error</h2><pre>".$error."</pre>";
			}
			else{
				echo "<h2>Registro Eliminado</h2><pre>";
				//echo $respuesta;
				echo "</pre>";
			}
		}
		break;
}

?>