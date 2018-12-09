<?php namespace Taocomp\Sdicoop;

class RispostaRiceviFatture
{
    const ER01 = 'ER01';

    public $Esito = self::ER01;

    public function __construct( $code = self::ER01 )
    {
        $this->Esito = $code;
    }
}
