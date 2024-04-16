<?php
include "Cliente.php";
include "Empresa.php";
include "Moto.php";
$objCliente1 = new Cliente("fabricio", "barrera", true, "DNI", 34632727);
$objCliente2 = new Cliente("francisco", "mendeleiev", true, "Cedula Verde", 67829333);

$objMoto1 = new Moto('11', 2230000, 2022, 'Benelli Imperiale 400', 85, true);
$objMoto2 = new Moto('12', 584000, 2021, 'Zanella Zr 150 Ohc', 75, true);
$objMoto3 = new Moto('13', 999900, 2023, 'Zanella Patagonian Eagle 250 ', 55, false);

$empresa = new Empresa("Alta Gama", "Av. Argenetina 123", [$objCliente1, $objCliente2], [$objMoto1, $objMoto2, $objMoto3], []);
$empresa->registrarVenta([11, 12, 13], $objCliente2);
$empresa->registrarVenta([0], $objCliente2);
$empresa->registrarVenta([2], $objCliente2);
$empresa->retornarVentasXCliente("DNI", 34632727);
$empresa->retornarVentasXCliente("Cedula Verde", 67829333);
echo $empresa;
