<?php

use \Taocomp\Sdicoop\WebService;

try
{
    require_once(__DIR__ . '/../autoload.php');

    $wsdl = __DIR__ . '/../wsdl/RicezioneFatture_v1.0.wsdl';
    $srv = new WebService($wsdl);
    $srv->setClass('\Taocomp\Sdicoop\RicezioneFattureHandler');
    $srv->handle();
}
catch (\Exception $e)
{
    WebService::log($e->getMessage(), LOG_ERR);
}
