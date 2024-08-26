<?php

namespace dwc\adapay\Test\Sign;

use dwc\adapay\Core\AdapayConfig;
use dwc\adapay\Exception\dwcException;
use dwc\adapay\SignTool\SignTool;
use dwc\adapay\Test\Config;
use PHPUnit\Framework\TestCase;

require '../../../vendor/autoload.php';

class ClientTest extends TestCase
{
    /**
     * @return void
     * @throws dwcException
     */
    public function testVerifySign(): void
    {
        $config = Config::getConfig();
        $adapayConfig = new AdapayConfig($config);
        $service = new SignTool($adapayConfig);
        $res = $service->checkSign();

        //断言正常结果
        $this->assertTrue($res);
    }


}