<?php

namespace dwc\adapay\Test\Member;

use dwc\adapay\Core\AdapayConfig;
use dwc\adapay\Exception\DwcException;
use dwc\adapay\Member\Member;
use dwc\adapay\Test\Config;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;

require '../../../vendor/autoload.php';

class ClientTest extends TestCase
{
    /**
     * @return void
     * @throws GuzzleException
     * @throws DwcException
     */
    public function testQuery(): void
    {
        $params = [
            'app_id' => '',
            'member_id' => '',
        ];
        $config = Config::getConfig();
        $adapayConfig = new AdapayConfig($config);
        $service = new Member($adapayConfig);
        $res = $service->query($params);
        echo json_encode($res, JSON_UNESCAPED_UNICODE);

        //断言错误结果
        $this->assertEquals('failed', $res['data']['status']);

        //断言正常结果
        $this->assertEquals('succeeded', $res['data']['status']);
    }


    public function testCreate(): void
    {
        $params = [
            'app_id' => '',
            'member_id' => '',
        ];
        $config = Config::getConfig();
        $adapayConfig = new AdapayConfig($config);
        $service = new Member($adapayConfig);
        $res = $service->create($params);
        echo json_encode($res, JSON_UNESCAPED_UNICODE);

        //断言错误结果
        $this->assertEquals('failed', $res['data']['status']);

        //断言正常结果
        $this->assertEquals('succeeded', $res['data']['status']);
    }


}