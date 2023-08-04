<?php
class User
{

    // Employees properties
    private $id;
    private $Name;
    private $Address;
    private $Salary;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address): void
    {
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->Salary;
    }

    /**
     * @param mixed $Salary
     */
    public function setSalary($Salary): void
    {
        $this->Salary = $Salary;
    }

    /**
     * @param $id
     * @param $Name
     * @param $Address
     * @param $Salary
     */
    public function __construct($id, $Name, $Address, $Salary)
    {
        $this->id = $id;
        $this->Name = $Name;
        $this->Address = $Address;
        $this->Salary = $Salary;
    }

}