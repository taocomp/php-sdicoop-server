<?php namespace Taocomp\Sdicoop;

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
