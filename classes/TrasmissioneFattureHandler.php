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

class TrasmissioneFattureHandler
{
    public function RicevutaConsegna( \StdClass $parametersIn )
    {
        // SOAP request
        $request = new FileSdI($parametersIn);
        WebService::log(__FUNCTION__ . " $request");

        // Process request
        // ----------------------------------------
        // $id       = $request->IdentificativoSdI;
        // $filename = $request->NomeFile;
        // $file     = $request->File;
        // ----------------------------------------
    }

    public function NotificaMancataConsegna( \StdClass $parametersIn )
    {
        // SOAP request
        $request = new FileSdI($parametersIn);
        WebService::log(__FUNCTION__ . " $request");

        // Process request
        // ----------------------------------------
        // $id       = $request->IdentificativoSdI;
        // $filename = $request->NomeFile;
        // $file     = $request->File;
        // ----------------------------------------
    }

    public function NotificaScarto( \StdClass $parametersIn )
    {
        // SOAP request
        $request = new FileSdI($parametersIn);
        WebService::log(__FUNCTION__ . " $request");

        // Process request
        // ----------------------------------------
        // $id       = $request->IdentificativoSdI;
        // $filename = $request->NomeFile;
        // $file     = $request->File;
        // ----------------------------------------
    }
    
    public function NotificaEsito( \StdClass $parametersIn )
    {
        // SOAP request
        $request = new FileSdI($parametersIn);
        WebService::log(__FUNCTION__ . " $request");

        // Process request
        // ----------------------------------------
        // $id       = $request->IdentificativoSdI;
        // $filename = $request->NomeFile;
        // $file     = $request->File;
        // ----------------------------------------
    }

    public function NotificaDecorrenzaTermini( \StdClass $parametersIn )
    {
        // SOAP request
        $request = new FileSdI($parametersIn);
        WebService::log(__FUNCTION__ . " $request");

        // Process request
        // ----------------------------------------
        // $id       = $request->IdentificativoSdI;
        // $filename = $request->NomeFile;
        // $file     = $request->File;
        // ----------------------------------------
    }

    public function AttestazioneTrasmissioneFattura( \StdClass $parametersIn )
    {
        // SOAP request
        $request = new FileSdI($parametersIn);
        WebService::log(__FUNCTION__ . " $request");

        // Process request
        // ----------------------------------------
        // $id       = $request->IdentificativoSdI;
        // $filename = $request->NomeFile;
        // $file     = $request->File;
        // ----------------------------------------
    }
}
