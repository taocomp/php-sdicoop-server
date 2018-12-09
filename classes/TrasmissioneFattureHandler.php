<?php namespace Taocomp\Sdicoop;

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
