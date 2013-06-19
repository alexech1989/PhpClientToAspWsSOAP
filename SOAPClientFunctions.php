<?php

  require "ClassesMappers.php";
	
	function soapClientFactory($config) {
		return new SoapClient("http://localhost:29227/Service1.asmx?wsdl", $config);
	}
	
	function buscarEmpleado($dni) {
		$response = soapClientFactory(
			array("classmap" => array("EmpleadoEntity" => "Empleado"))
		)->ConsultarEmpleadoPorNumeroDocumento(array("sNroDocumento" => $dni));
		
		if ($response->ConsultarEmpleadoPorNumeroDocumentoResult->Exito) {
			return $response->ConsultarEmpleadoPorNumeroDocumentoResult->Objeto;
		}
		
		$_SESSION["ws_message_error"] = $response->ConsultarEmpleadoPorNumeroDocumentoResult->MensajeError;
		header('Location: WSError.php');
	}
	
	function listarAreas() {
		$response = soapClientFactory(
			array("classmap" => array("AreaEntity" => "Entidad"))
		)->ListarAreas();
		
		if ($response->ListarAreasResult->Exito) {
			return $response->ListarAreasResult->Lista->AreaEntity;
		}
		
		$_SESSION["ws_message_error"] = $response->ListarAreasResult->MensajeError;
		header('Location: WSError.php');
	}
	
	function listarLocales() {
		$response = soapClientFactory(
			array("classmap" => array("LocalEntity" => "Entidad"))
		)->ListarLocales();
		
		if ($response->ListarLocalesResult->Exito) {
			return $response->ListarLocalesResult->Lista->LocalEntity;
		}
		
		$_SESSION["ws_message_error"] = $response->ListarLocalesResult->MensajeError;
		header('Location: WSError.php');
	}
	
	function listarCargos() {
		$response = soapClientFactory(
			array("classmap" => array("CargoEntity" => "Entidad"))
		)->ListarCargos();
		
		if ($response->ListarCargosResult->Exito) {
			return $response->ListarCargosResult->Lista->CargoEntity;
		}
		
		$_SESSION["ws_message_error"] = $response->ListarCargosResult->MensajeError;
		header('Location: WSError.php');
	}
	
?>
