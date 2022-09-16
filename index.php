<?php
error_reporting(E_ALL); // Error/Exception engine, always use E_ALL
ini_set('ignore_repeated_errors', TRUE); // always use TRUE
ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment
ini_set('log_errors', TRUE); // Error/Exception file logging engine.
ini_set("error_log", "C:/xampp/htdocs/expense-app/php-error.log");
error_log( "Inicio de aplicacion" );



require_once 'config/config.php';
require_once 'libs/database.php';
require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/model.php';
require_once 'libs/app.php';

require_once 'classes/errors.php';
require_once 'classes/success.php';

$app = new App();
?>

