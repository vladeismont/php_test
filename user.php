<?php
//How many files can I put in a directory?
//https://stackoverflow.com/questions/466521/how-many-files-can-i-put-in-a-directory

//name of the file - Login
class LoginFile{
    private $login,$password,$email,$name;
    public function __construct($login,$password,$email,$name)
    {
        $this->password=$password;
        $this->email=$email;
        $this->name=$name;
        $this->login=$login;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function getEmail()
    {
        return $this->email;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setLogin($login): void
    {
        $this->login = $login;
    }
    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function setPassword($password): void
    {
        $this->password = $password;
    }
    public function create(){
        //$globalName -minus
        //$localVar=$file;
        $fp=fopen( 'db/'. $this->login.".json",w);
        fwrite($fp,json_encode(array($this->login,$this->password,$this->email,$this->name)));
        fclose($fp);
        echo("registration successfull");

    }

};

