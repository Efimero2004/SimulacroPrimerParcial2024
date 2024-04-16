<?php
class Cliente
{
    private $nombre;
    private $apellido;
    private $alta;
    private $tipoDocumento;
    private $numeroDocumento;

    public function __construct($nombre, $apellido, $alta, $tipoDocumento, $numeroDocumento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->alta = $alta;
        $this->tipoDocumento = $tipoDocumento;
        $this->numeroDocumento = $numeroDocumento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getAlta()
    {
        return $this->alta;
    }
    public function setAlta($alta)
    {
        $this->alta = $alta;
    }

    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
    }

    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
    }

    public function __toString()
    {
        return ("\n CLIENTE: " . "Nombre:" . $this->getNombre() . " Apellido:" . $this->getApellido() . " Alta:" . $this->getAlta() . " " . $this->getTipoDocumento() . ":" . $this->getNumeroDocumento());
    }
}
