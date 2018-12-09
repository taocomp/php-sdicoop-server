<?php namespace Taocomp\Sdicoop;

class RicezioneFattureHandler
{
    public function RiceviFatture( \StdClass $parametersIn )
    {
        // SOAP request        
        $request = new FileSdIConMetadati($parametersIn);
        WebService::log(__FUNCTION__ . " $request");

        // Process request
        // ------------------------------------------------
        // $id               = $request->IdentificativoSdI;
        // $filename         = $request->NomeFile;
        // $file             = $request->File;
        // $metadataFilename = $request->NomeFileMetadati;
        // $metadata         = $request->Metadati;
        // ------------------------------------------------

        // SOAP response        
        return new RispostaRiceviFatture(RispostaRiceviFatture::ER01);
    }

    public function NotificaDecorrenzaTermini( \StdClass $parametersIn )
    {
        // SOAP request
        $fileSdI = new FileSdI($parametersIn);
        WebService::log(__FUNCTION__ . " $request");
    }
}
