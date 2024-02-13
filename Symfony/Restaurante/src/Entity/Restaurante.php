<?php
// src/Entity/Restaurante.php
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity:
 * @ORM\Table(name="restaurantes")
 * @ORM\Entity(repositoryClass="RestaurantRepository")
 */
class Restaurante implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="CodRes")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string", name="Correo")
     */
    private $correo;
    /**
     * @ORM\Column(type="string", name="Clave")
     */
    private $clave;
    /**
     * @ORM\Column(type="string", name="Pais")
     */
    private $pais;
    /**
     * @ORM\Column(type="string", name="CP")
     */
    private $codPostal;
    /**
     * @ORM\Column(type="string", name="Ciudad")
     */
    private $ciudad;
    /**
     * @ORM\Column(type="string", name="Direccion")
     */
    private $direccion;
    /**
     * @ORM\Column(type="integer", name="Rol")
     */
    private $rol;

    public function getId()
    {
        return $this->id;
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

    public function getCP()
    {
        return $this->codPostal;
    }

    public function setCP($codPostal)
    {
        $this->codPostal = $codPostal;
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

    // public function getRol()
    // {
    //     return $this->rol;
    // }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }


    public function serialize()
    {
        return serialize(
            array(
                $this->id,
                $this->correo,
                $this->clave,
            )
        );
    }
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->correo,
            $this->clave,
        ) = unserialize($serialized);
    }

    public function getRoles(): array
    {
        return [$this->rol, 'ROLE_USER'];
    }

    public function getPassword()
    {
        return $this->getClave();
    }
    public function getSalt()
    {
        return;
    }
    public function getUsername()
    {
        return $this->getCorreo();
    }
    public function eraseCredentials()
    {
        return;
    }

    public function getUserIdentifier(): string
    {
        return $this->getCorreo();
    }
}
