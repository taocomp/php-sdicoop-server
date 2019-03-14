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

namespace Taocomp\Einvoicing\SdicoopServer;

class FileSdIBase
{
    public $NomeFile = null;
    public $File = null;
    private $BOM = array("\xEF\xBB\xBF",
	    "\xFE\xFF",
	    "\xFF\xFE",
	    "\x00\x00\xFE\xFF",
	    "\xFF\xFE\x00\x00",
	    "\x2B\x2F\x76\x38",
	    "\x2B\x2F\x76\x39",
	    "\x2B\x2F\x76\x2B",
	    "\x2B\x2F\x76\x2F",
	    "\x2B\x2F\x76\x38\x2D",
	    "\xF7\x64\x4C",
	    "\xDD\x73\x66\x73",
	    "\x0E\xFE\xFF",
	    "\xFB\xEE\x28",
	    "\x84\x31\x95\x33");
    private $isP7M=FALSE;

    public function __construct( \StdClass $parametersIn = null )
    {
        if ($parametersIn) {
            if (!property_exists($parametersIn, 'NomeFile')) {
                throw new \Exception("Cannot find property 'NomeFile'");
            }
            if (!property_exists($parametersIn, 'File')) {
                throw new \Exception("Cannot find property 'File'");
            }
		$estensione=end(explode($this->NomeFile));
	    	if(strcmp("p7m",$estensione)===0 || strcmp("P7M",$estensione)===0 || strcmp("p7M",$estensione)===0 || 
		strcmp("P7m",$estensione)===0) $this->isP7M=TRUE;
            $this->NomeFile = $parametersIn->NomeFile;
            $this->File = $parametersIn->File;
            $this->removeBOM();
        }
    }

    public function __toString()
    {
        return "NomeFile:{$this->NomeFile}";
    }

    public function import( $file )
    {
        if (false === is_readable($file)) {
            throw new \Exception("'$file' not found or not readable");
        }
	    $estensione=end(explode($file));
	    if(strcmp("p7m",$estensione)===0 || strcmp("P7M",$estensione)===0 || strcmp("p7M",$estensione)===0 || 
		strcmp("P7m",$estensione)===0) $this->isP7M=TRUE;
        $this->NomeFile = basename($file);
        $this->File = file_get_contents($file);
        $this->removeBOM();

        return $this;
    }

    /**
     * If is P7M do nothing, else remove ALL UTF BOM charachters
     *
     */
    public function removeBOM()
    {
        if($this->isP7M){
	    return $this;
	    }
	else{
	    $this->File = str_replace($this->BOM, '', $this->File);
	    return $this;
	    }
    }
}
