<?php

class Login extends SessionController{
    function __construct()
    {
        parent::__construct();
        error_log('Login::__construct ->inicio de login');
    }

    function render(){
        $this->view->render('login/index');
    }

}

?>