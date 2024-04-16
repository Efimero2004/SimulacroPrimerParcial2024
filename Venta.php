<?php
class Venta
{
    //Se registra la siguiente información: número, fecha, referencia al cliente,
    //referencia a una colección de motos y el precio final.
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

    /*Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
Utilizar el método que calcula el precio de venta de la moto donde crea necesario.
    */
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
        return ("VENTA: \n" . " numero:" . $this->getNumero() . " fecha:" . $this->fecha . " Cliente:" . $this->getObjCliente() . "\nArrayMotos:" . $this->mostrarArrayMotos() . " Precio Fnnal:" . $this->getPrecioFinal());
    }
}
