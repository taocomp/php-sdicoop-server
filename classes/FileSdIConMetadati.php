<?php namespace Taocomp\Sdicoop;

class FileSdIConMetadati extends FileSdI
{
    public $NomeFileMetadati = null;
    public $Metadati = null;

    protected function setFromObject( \StdClass $obj )
    {
        parent::setFromObject($obj);
        
        if (!property_exists($obj, 'NomeFileMetadati')) {
            throw new \Exception("Cannot find property 'NomeFileMetadati'");
        }

        if (!property_exists($obj, 'Metadati')) {
            throw new \Exception("Cannot find property 'Metadati'");
        }

        $this->NomeFileMetadati = $obj->NomeFileMetadati;
        $this->Metadati = $obj->Metadati;
    }

    public function __toString()
    {
        return parent::__toString() . " NomeFileMetadati:{$this->NomeFileMetadati}";
    }
}
