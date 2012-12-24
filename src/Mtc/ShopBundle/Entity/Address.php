<?php

namespace Mtc\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mtc\ShopBundle\Entity\Address
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mtc\ShopBundle\Entity\AddressRepository")
 */
class Address
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $user
     *
     * @ORM\Column(name="user", type="string", length=60)
     */
    private $user;

    /**
     * @var string $compagny
     *
     * @ORM\Column(name="compagny", type="string", length=60)
     */
    private $compagny;

    /**
     * @var string $lastname
     *
     * @ORM\Column(name="lastname", type="string", length=60)
     */
    private $lastname;

    /**
     * @var string $firstname
     *
     * @ORM\Column(name="firstname", type="string", length=60)
     */
    private $firstname;

    /**
     * @var string $address1
     *
     * @ORM\Column(name="address1", type="string", length=150)
     */
    private $address1;

    /**
     * @var string $address2
     *
     * @ORM\Column(name="address2", type="string", length=150)
     */
    private $address2;

    /**
     * @var string $zipcode
     *
     * @ORM\Column(name="zipcode", type="string", length=30)
     */
    private $zipcode;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=100)
     */
    private $city;

    /**
     * @var string $country
     *
     * @ORM\Column(name="country", type="string", length=100)
     */
    private $country;

    /**
     * @var string $other
     *
     * @ORM\Column(name="other", type="string", length=100)
     */
    private $other;

    /**
     * @var string $phone
     *
     * @ORM\Column(name="phone", type="string", length=22)
     */
    private $phone;

    /**
     * @var string $phone_mobile
     *
     * @ORM\Column(name="phone_mobile", type="string", length=22)
     */
    private $phone_mobile;

    /**
     * @var boolean $is_active
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active;

    /**
     * @var boolean $is_delivery_address
     *
     * @ORM\Column(name="is_delivery_address", type="boolean")
     */
    private $is_delivery_address;

    /**
     * @var datetime $created_date
     *
     * @ORM\Column(name="created_date", type="datetime")
     */
    private $created_date;

    /**
     * @var datetime $update_date
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $update_date;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set user
     *
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set compagny
     *
     * @param string $compagny
     */
    public function setCompagny($compagny)
    {
        $this->compagny = $compagny;
    }

    /**
     * Get compagny
     *
     * @return string 
     */
    public function getCompagny()
    {
        return $this->compagny;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set address1
     *
     * @param string $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set other
     *
     * @param string $other
     */
    public function setOther($other)
    {
        $this->other = $other;
    }

    /**
     * Get other
     *
     * @return string 
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Set phone
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone_mobile
     *
     * @param string $phoneMobile
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phone_mobile = $phoneMobile;
    }

    /**
     * Get phone_mobile
     *
     * @return string 
     */
    public function getPhoneMobile()
    {
        return $this->phone_mobile;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set is_delivery_address
     *
     * @param boolean $isDeliveryAddress
     */
    public function setIsDeliveryAddress($isDeliveryAddress)
    {
        $this->is_delivery_address = $isDeliveryAddress;
    }

    /**
     * Get is_delivery_address
     *
     * @return boolean 
     */
    public function getIsDeliveryAddress()
    {
        return $this->is_delivery_address;
    }

    /**
     * Set created_date
     *
     * @param datetime $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->created_date = $createdDate;
    }

    /**
     * Get created_date
     *
     * @return datetime 
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * Set update_date
     *
     * @param datetime $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;
    }

    /**
     * Get update_date
     *
     * @return datetime 
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }
}