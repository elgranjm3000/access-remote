<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *     fields={"email"},
 *     message="Este email ya esta en uso."
 * )
 * @UniqueEntity(
 *     fields={"username"},
 *     message="Este username ya esta en uso."
 * )
 * @UniqueEntity(
 *     fields={"dpi"},
 *     message="Este DPI ya esta en uso."
 * )
 */
class User implements UserInterface, \Serializable
{
      public static $possibleRoles = array(
        'ADMINISTRADOR' => 'ROLE_ADMIN',
        'USUARIO A'  => 'ROLE_USERA',
        'USUARIO B'  => 'ROLE_USERB'
       
    );
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     * @Assert\NotBlank(
     *     message = "Valor requerido"
     * )
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)     
     
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
    * @Assert\NotBlank( message = "Valor requerido")
     * @Assert\Email(
     *     message = "El email '{{ value }}' no es valido. ",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

     /**
     * @Assert\NotBlank( message = "Valor requerido")
     * @Assert\Length(max=4096)
 
     */
    private $plainPassword;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Clientes", mappedBy="IdUsuario")
     */
    private $clientes;

   /**
     * @ORM\Column(type="simple_array", length=20) 
    * @Assert\NotBlank( message = "Valor requerido")
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=11, unique=true)
      * @Assert\NotBlank(
     *     message = "Valor requerido"
     * )
     */
    private $dpi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
      * @Assert\NotBlank(
     *     message = "Valor requerido"
     * )
     */
    private $telefono;

    /**
     * @ORM\Column(type="text")
      * @Assert\NotBlank(
     *     message = "Valor requerido"
     * )
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=255)
      * @Assert\NotBlank(
     *     message = "Valor requerido"
     * )
     */
    private $contactoEmergencia;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Metas", mappedBy="usuario")
     */
    private $metas;

    public function __construct()
    {
        $this->isActive = true;
        $this->clientes = new ArrayCollection();
        $this->metas = new ArrayCollection();
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }


   public function getRoles()
    {
        //return array('ROLE_USER');
       /* if (is_null($this->roles)) {
            return [];
        }*/
        
        //return array($this->roles);
        return $this->roles;
    }
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized, array('allowed_classes' => false));
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return Collection|Clientes[]
     */
    public function getClientes(): Collection
    {
        return $this->clientes;
    }

    public function addCliente(Clientes $cliente): self
    {
        if (!$this->clientes->contains($cliente)) {
            $this->clientes[] = $cliente;
            $cliente->setIdUsuario($this);
        }

        return $this;
    }

    public function removeCliente(Clientes $cliente): self
    {
        if ($this->clientes->contains($cliente)) {
            $this->clientes->removeElement($cliente);
            // set the owning side to null (unless already changed)
            if ($cliente->getIdUsuario() === $this) {
                $cliente->setIdUsuario(null);
            }
        }

        return $this;
    }

     public function __toString()
   {
      return strval($this->getId());
   }

     public function getDpi(): ?string
     {
         return $this->dpi;
     }

     public function setDpi(string $dpi): self
     {
         $this->dpi = $dpi;

         return $this;
     }

     public function getTelefono(): ?string
     {
         return $this->telefono;
     }

     public function setTelefono(string $telefono): self
     {
         $this->telefono = $telefono;

         return $this;
     }

     public function getDireccion(): ?string
     {
         return $this->direccion;
     }

     public function setDireccion(string $direccion): self
     {
         $this->direccion = $direccion;

         return $this;
     }

     public function getContactoEmergencia(): ?string
     {
         return $this->contactoEmergencia;
     }

     public function setContactoEmergencia(string $contactoEmergencia): self
     {
         $this->contactoEmergencia = $contactoEmergencia;

         return $this;
     }

     /**
      * @return Collection|Metas[]
      */
     public function getMetas(): Collection
     {
         return $this->metas;
     }

     public function addMeta(Metas $meta): self
     {
         if (!$this->metas->contains($meta)) {
             $this->metas[] = $meta;
             $meta->setUsuario($this);
         }

         return $this;
     }

     public function removeMeta(Metas $meta): self
     {
         if ($this->metas->contains($meta)) {
             $this->metas->removeElement($meta);
             // set the owning side to null (unless already changed)
             if ($meta->getUsuario() === $this) {
                 $meta->setUsuario(null);
             }
         }

         return $this;
     }
}