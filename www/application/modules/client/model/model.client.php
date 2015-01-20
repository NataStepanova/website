<?php

class modelClient{

    private static $connection = null;
    private $login = null;
    private $password = null;

    public $arrError = array();

    private function setConnect() {
        self::$connection = Connection::getInstance();
        return self::$connection->getConnection();
    }


    public function __construct(){

    }
    private  function __clone(){

    }
    private  function __wakeup(){

    }
    private  function signIn($login, $password){
        $this->login = $login;
        $this->password = $password;

    }

    private function takeInfo(){
        $loginInfo = null;
        $passwordInfo = null;
        $setConnect = $this->setConnect();
        $sqlQuery =
    }
}