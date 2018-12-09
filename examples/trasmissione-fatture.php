<?php

use \Taocomp\Sdicoop\WebService;

try
{
    require_once(__DIR__ . '/../bootstrap.php');

    $wsdl = __DIR__ . '/../wsdl/TrasmissioneFatture_v1.1.wsdl';
    $srv = new WebService($wsdl);
    $srv->setClass('\Taocomp\Sdicoop\TrasmissioneFattureHandler');
    $srv->handle();
}
catch (\Exception $e)
{
    WebService::log($e->getMessage(), LOG_ERR);
}
