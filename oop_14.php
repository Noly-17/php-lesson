<?php

class User
{
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function setUser($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

    }
    function getUser()
    {

        return $this->name;

    }
}

$user = new User("sample6", "sample@gmail.com", "12356");

// $user->setUser("sample1", "sample@gmail.com", "12356");
// var_dump($user->getUser());


class Employee extends User
{
    public $title;
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
}

$employee = new Employee('sample1', "sample@gmail.com", "12356", "manager");

echo $employee->name;

?>