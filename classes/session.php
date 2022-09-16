<?php
class Session {
    private $sessionName ='user';
    public function __construct()
    {
        if (session_start() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    public function setCurrentUser($User){
        $_SESSION[$this->sessionName=$User];
    }
    public function getCurrenUser(){
        return $_SESSION[$this->sessionName];
    }
    public function closeSession(){
        session_unset();
        session_destroy();
    }
    public function existes(){
        return isset($_SESSION[$this->sessionName]);
    }
}

?>