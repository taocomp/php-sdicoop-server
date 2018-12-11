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

namespace Taocomp\Sdicoop;

class FileSdIConMetadati extends FileSdI
{
    public $NomeFileMetadati = null;
    public $Metadati = null;

    public function __construct( \StdClass $parametersIn = null )
    {
        parent::__construct($parametersIn);

        if ($parametersIn) {
            if (!property_exists($parametersIn, 'NomeFileMetadati')) {
                throw new \Exception("Cannot find property 'NomeFileMetadati'");
            }

            if (!property_exists($parametersIn, 'Metadati')) {
                throw new \Exception("Cannot find property 'Metadati'");
            }

            $this->NomeFileMetadati = $parametersIn->NomeFileMetadati;
            $this->Metadati = $parametersIn->Metadati;
        }
    }

    public function __toString()
    {
        return parent::__toString() . " NomeFileMetadati:{$this->NomeFileMetadati}";
    }
}
