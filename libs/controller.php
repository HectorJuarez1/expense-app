<?php

class Controller{

    function __construct(){
        $this->view = new View();
    }
    function loadModel($model){
        $url = 'models/'.$model.'model.php';

        if(file_exists($url)){
            require_once $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }

    function existPOST($params){
        foreach ($params as $key) {
            if (!isset($_POST[$params])) {
                error_log('CONTROLLER::existPOST -> No existe el parametro'.$params);
                return false;
            }
        }
        return true;
    }

    function existGET($params){
        foreach ($params as $key) {
            if (!isset($_GET[$params])) {
                error_log('CONTROLLER::existGET -> No existe el parametro'.$params);
                return false;
            }
        }
        return true;
    }

    function getPost($name){
        return $_POST[$name];
    }
    function getGet($name){
        return $_GET[$name];
    }

    function redirect($url,$mensajes){
        $data=[];
        $params='';
        foreach ($mensajes as $key => $mensajes) {
            array_push($data,$key . '='.$mensajes);
        }
        $params = join('&',$data);
        if($params != ''){
            $params = '?' . $params;
        }
        header('location: ' . constant('URL') . $url . $params);
    }

}

?>