<?php
use PHPUnit\Framework\TestCase;
use Taocomp\Einvoicing\SdicoopServer\WebService;

class WebServiceTest extends TestCase
{
    public function testCanCreateWithWsdl()
    {
        $wsdl = __DIR__ . '/../assets/wsdl/TrasmissioneFatture_v1.1.wsdl';
        $ws = new WebService($wsdl);

        $this->assertInstanceOf(WebService::class, $ws);
    }
}
