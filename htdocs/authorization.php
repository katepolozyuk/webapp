<?php

include_once ("../config/db.php");
Class User{

    public $email_v = "admin@gmail.com";
    public $password_v = "admin";

    private $email;
    private $password;

    public function setLoginPassword($array){
        if(isset($array['email']) && isset($array['password']))
        {
            if (filter_var($array['email'], FILTER_VALIDATE_EMAIL)) {
                $this->email=$array['email'];
                $this->password =htmlspecialchars($_POST['password']);
            }
        }
    }
    
    public function authUser(){
        $pass =  $this->password;
        $email = $this->email;

        if($email == $this->email_v && $pass == $this->password_v)
        {
            session_start();
            $_SESSION['Auth']=1;
            echo "ок";
        }
        else
        {
            session_start();
            $_SESSION['Auth']=0;           
            echo "нет";
        }
    }

}

function authUserFunc($arr){
    $user= new User();
    $user->setLoginPassword($arr);
    $user->authUser();
}
function exitUser($arr){
    session_start();
    $_SESSION['Auth']=0;

}