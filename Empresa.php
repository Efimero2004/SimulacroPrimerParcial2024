<?php

include "Venta.php";
class Empresa
{

    private $denominacion;
    private $direccion;
    private $arrayClientes;
    private $arrayMotos;
    private $arrayVentas;


    public function __construct($denominacion, $direccion, $arrayClientes, $arrayMotos, $arrayVentas)
    {
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->arrayClientes = $arrayClientes;
        $this->arrayMotos = $arrayMotos;
        $this->arrayVentas = $arrayVentas;
    }

    public function getDenominacion()
    {
        return $this->denominacion;
    }
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function getArrayClientes()
    {
        return $this->arrayClientes;
    }
    public function setArrayClientes($arrayClientes)
    {
        $this->arrayClientes = $arrayClientes;
    }
    public function getArrayMotos()
    {
        return $this->arrayMotos;
    }
    public function setArrayMotos($arrayMotos)
    {
        $this->arrayMotos = $arrayMotos;
    }
    public function getArrayVentas()
    {
        return $this->arrayVentas;
    }
    public function setArrayVentas($arrayVentas)
    {
        $this->arrayVentas = $arrayVentas;
    }
    public function mostrarArrayMotos()
    {
        foreach ($this->getArrayMotos() as $moto) {
            echo $moto;
        }
    }

    public function mostrarArrayClientes()
    {

        foreach ($this->getArrayClientes() as $cliente) {
            echo $cliente;
        }
    }

    public function mostrarArrayVentas()
    {
        foreach ($this->getArrayVentas() as $venta) {
            echo $venta;
        }
    }
    public function __toString()
    {
        return ("\n**EMPRESA**\n" . "Denominacion:" . $this->getDenominacion() . " Direccion:" . $this->getDireccion() . " \nclientes:" . $this->mostrarArrayClientes() . " \nmotos:" . $this->mostrarArrayMotos() . " \nventas:" . $this->mostrarArrayVentas());
    }
    public function retornarMoto($codigoMoto)
    {
        $motoEncontrada = null;
        $indice = 0;
        $arrayMotos = $this->getArrayMotos();
        while ($indice < count($arrayMotos)) {
            $moto = $arrayMotos[$indice];
            if ($moto->getCodigo() == $codigoMoto) {

                $motoEncontrada = $moto;
            }
            $indice++;
        }

        if ($motoEncontrada == null) {
            return null;
        } else {
            return $motoEncontrada;
        }
    }
    public function registrarVenta($arrayCodigosMoto, $objCliente)
    {
        $indiceFinal = count($arrayCodigosMoto);
        $indice = 0;
        $objVenta = new Venta((count($this->getArrayVentas()) + 1), date("d/m/y"), $objCliente, [], 0);
        while ($indice < $indiceFinal) {

            $objMoto = $this->retornarMoto($arrayCodigosMoto[$indice]);
            if ($objMoto != null) {
                $objVenta->incorporarMoto($objMoto);
            }
            $indice++;
        }
        $precioFinal = $objVenta->getPrecioFinal();
        $objVenta->setPrecioFinal($precioFinal);
        $arrayVentas = $this->getArrayVentas();
        array_push($arrayVentas, $objVenta);
        $this->setArrayVentas($arrayVentas);
    }
    public function retornarVentasXCliente($tipoDoc, $numDoc)
    {
        $arrayVentasPorCliente = [];
        $arrayV = $this->getArrayVentas();
        foreach ($arrayV as $Venta) {
            $objCliente = $Venta->getObjCliente();
            if ($objCliente->getTipoDocumento() == $tipoDoc && $objCliente->getNumeroDocumento() == $numDoc) {
                array_push($arrayVentasPorCliente, $Venta);
            }
        }
        return $arrayVentasPorCliente;
    }
}
