<?php

namespace App;

class User 
{
    protected $name;
    protected $lastname;
    protected $email;
    public function setName($name)
    {
        $this->name =trim($name);
    }
    public function setEmail($email)
    {
        $this->email = trim($email);
    }
    public function setLastName($lastname)
    {
        $this->lastname =trim($lastname);
    }
    public function getName()
    {
        return $this->name;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getFullName()
    {
        return trim("$this->name $this->lastname");
    }
}