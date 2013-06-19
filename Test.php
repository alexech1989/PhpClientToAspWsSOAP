<?php
  
	require "SOAPClientFunctions.php";
	
	session_start();
	print_r(buscarEmpleado("46131804"));
	print_r(listarAreas());
	print_r(listarCargos());
	print_r(listarLocales());

?>
