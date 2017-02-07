<?php

//system folder
define('SYSTEM_DIR', DOCROOT.'/system');

//core folder
define('CORE_DIR', SYSTEM_DIR.'/core');

//project folder
define('PROJECT_DIR', SYSTEM_DIR.'/project');

//folder for libraries that are part of the core
define('CORE_LIBRARIES_DIR', CORE_DIR.'/libraries');

//project config folder
define('CONFIG_DIR', PROJECT_DIR.'/config');

//project controllers folder
define('CONTROLLERS_DIR', PROJECT_DIR.'/controllers');

//project libraries folder
define('LIBRARIES_DIR', PROJECT_DIR.'/libraries');

//project models folder
define('MODELS_DIR', PROJECT_DIR.'/models');

//project views folder
define('VIEWS_DIR', PROJECT_DIR.'/views');

//load the libraries..
require_once(CORE_LIBRARIES_DIR.'/request.class.php');
require_once(CORE_LIBRARIES_DIR.'/router.class.php');



?>