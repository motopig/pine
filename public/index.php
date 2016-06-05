<?php

// PUBLIC_PATH
define('PUBLIC_PATH', __DIR__);

// bootstrap
require PUBLIC_PATH.'/../bootstrap.php';

// slim routes
require BASE_PATH.'/config/routes.php';