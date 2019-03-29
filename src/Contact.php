<?php
/**
 * Created by PhpStorm.
 * User: elner
 * Date: 29/03/2019
 * Time: 10:17
 */

class Contact
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $civility_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Contact
     */
    public function setId(int $id): Contact
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Contact
     */
    public function setLastname(string $lastname): Contact
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname(string $firstname): Contact
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getCivilityId(): string
    {
        return $this->civility_id;
    }

    /**
     * @param string $civility_id
     * @return Contact
     */
    public function setCivilityId(string $civility_id): Contact
    {
        $this->civility_id = $civility_id;
        return $this;
    }


}