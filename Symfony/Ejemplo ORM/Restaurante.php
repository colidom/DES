<?php

/**
 * @ORM\Entity:
 * @ORM\Table(name="restaurantes")
 * @ORM\Entity(repositoryClass="RestauranteRepository")
 */
class Restaurante
{
    /** @ORM\Id @ORM\Column(type="integer", name="CodRes") @ORM\GeneratedValue  **/
    private $id;

    /** @ORM\Column @ORM\Column(type="string", name="Correo") **/
    private $correo;

    /** @ORM\Column @ORM\Column(type="string", name="Clave") **/
    private $clave;

    /** @ORM\Column @ORM\Column(type="string", name="Pais") **/
    private $pais;

    /** @ORM\Column @ORM\Column(type="integer", name="CP") **/
    private $cp;

    /** @ORM\Column @ORM\Column(type="string", name="Ciudad") **/
    private $ciudad;

    /** @ORM\Column @ORM\Column(type="string", name="Direccion") **/
    private $direccion;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

}
