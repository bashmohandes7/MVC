<?php
define("DS",DIRECTORY_SEPARATOR); // get Separator
define("ROOT", dirname(__DIR__).DS); // get path from root user to current directory
define("APP", ROOT.DS."app".DS); 
define("CONFING", APP.DS."confing".DS);
define("CONTROLLERS", APP.DS."controllers".DS);
define("MODELS", APP.DS."models".DS);
define("CORE", APP.DS."core".DS);
define("VIEWS", APP.DS."views".DS);


//Database Config

define("SERVER", "localhost" );
define("USERNAME", "root" );
define("PASSWORD", "" );
define("DATABASE_TYPE", "mysql" );
define("DATABASE_NAME", "resume" );
define("PORT", "3306" );
define("DOMAIN_NAME", "http://mvc.test/");

require_once ("../vendor/autoload.php");

$app = new MVC\core\APP();