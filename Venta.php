<?php
class Venta
{
    private $numero;
    private $fecha;
    private $objCliente;
    private $arrayMotos;
    private $precioFinal;

    public function __construct($numero, $fecha, $objCliente, $arrayMotos, $precioFinal)
    {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->objCliente = $objCliente;
        $this->arrayMotos = $arrayMotos;
        $this->precioFinal = $precioFinal;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    public function getObjCliente()
    {
        return $this->objCliente;
    }
    public function setObjCliente($objCliente)
    {
        $this->objCliente = $objCliente;
    }
    public function getArrayMotos()
    {
        return $this->arrayMotos;
    }
    public function setArrayMotos($arrayMotos)
    {
        $this->arrayMotos = $arrayMotos;
    }
    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }
    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;
    }
    public function mostrarArrayMotos()
    {
        foreach ($this->getArrayMotos() as $moto) {
            echo $moto;
        }
    }

    public function incorporarMoto($objMoto)
    {
        if ($objMoto->getActiva()) {
            $precio = $objMoto->darPrecioVenta() + $this->getPrecioFinal();
            $this->setPrecioFinal($precio);
            $arrayMotos = $this->getArrayMotos();
            array_push($arrayMotos, $objMoto);
            $this->setArrayMotos($arrayMotos);
        }
    }

    public function __toString()
    {
        return ("\nVENTA: \n" . " numero:" . $this->getNumero() . " fecha:" . $this->fecha . " Cliente:" . $this->getObjCliente() . "\nArrayMotos:" . $this->mostrarArrayMotos() . " Precio Fnnal:" . $this->getPrecioFinal());
    }
}
