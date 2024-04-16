<?php
class Moto
{
    /*código, costo, año fabricación, descripción, porcentaje incremento anual,
 activa (atributo que va a contener un valor true, si la moto está disponible para la
venta y false en caso contrario).*/
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcentajeIncrementoAnual;
    private $activa;

    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncrementoAnual, $activa)
    {

        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->porcentajeIncrementoAnual = $porcentajeIncrementoAnual;
        $this->activa = $activa;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function getAnioFabricacion()
    {
        return $this->anioFabricacion;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getPorcentajeIncrementoAnual()
    {
        return $this->porcentajeIncrementoAnual;
    }
    public function getActiva()
    {
        return $this->activa;
    }

    public function __toString()
    {
        return ("\nMOTO: " . "codigo:" . $this->getCodigo() . " costo:" . $this->getCosto() . " año de Fabricacion" . $this->getAnioFabricacion() . " descripcion:" . $this->getDescripcion() . " \nPorcentaje de incremento anual:" . $this->getPorcentajeIncrementoAnual() . " activa:" . $this->getActiva());
    }

    public function darPrecioVenta()
    {
        if ($this->getActiva()) {
            $venta = $this->getCosto() + $this->getCosto() * ($this->getAnioFabricacion() * $this->getPorcentajeIncrementoAnual());
        } else {
            $venta = -1;
        }
        return $venta;
    }
}
