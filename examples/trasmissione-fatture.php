<?php

/**
 * Copyright (C) 2018 Taocomp s.r.l.s. <https://taocomp.com>
 *
 * This file is part of php-sdicoop-server.
 *
 * php-sdicoop-server is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * php-sdicoop-server is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with php-sdicoop-server.  If not, see <http://www.gnu.org/licenses/>.
 */

ini_set("soap.wsdl_cache_enabled", 0);
ini_set('soap.wsdl_cache_ttl', 0);

use \Taocomp\Sdicoop\WebService;

try
{
    require_once(__DIR__ . '/../autoload.php');
    require_once(__DIR__ . '/TrasmissioneFattureHandler.php');

    $wsdl = __DIR__ . '/../wsdl/TrasmissioneFatture_v1.1.wsdl';
    $srv = new WebService($wsdl);
    $srv->setClass('\TrasmissioneFattureHandler');
    $srv->handle();
}
catch (\Exception $e)
{
    WebService::log($e->getMessage(), LOG_ERR);
}
