<?php
class Moto
{
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
    public function setCodigo($codigo){
        $this->codigo =$codigo;
    }


    public function getCosto()
    {
        return $this->costo;
    }
    public function setCosto($costo){
        $this->costo =$costo;
    }

    public function getAnioFabricacion()
    {
        return $this->anioFabricacion;
    }
    public function setAnioFabricacion($anioFabricacion){
        $this->anioFabricacion =$anioFabricacion;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion =$descripcion;
    }


    public function getPorcentajeIncrementoAnual()
    {
        return $this->porcentajeIncrementoAnual;
    }
    public function setPorcentajeIncrementoAnual($porcIncAnual){
        $this->porcentajeIncrementoAnual =$porcIncAnual;
    }

    public function getActiva()
    {
        return $this->activa;
    }
    public function setActiva($activa){
        $this->activa =$activa;
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
