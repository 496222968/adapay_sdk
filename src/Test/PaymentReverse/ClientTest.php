<?php

namespace dwc\adapay\Test\PaymentReverse;

use dwc\adapay\Core\AdapayConfig;
use dwc\adapay\PaymentReverse\PaymentReverse;
use dwc\adapay\Test\Config;
use PHPUnit\Framework\TestCase;

require '../../../vendor/autoload.php';


class ClientTest extends TestCase
{
    public function testCreate(): void
    {
        $params = [
            'payment_id' => '',
            'app_id' => '',
            'order_no' => '',
            'reverse_amt' => '6.00',
        ];
        $config = Config::getConfig();
        $adapayConfig = new AdapayConfig($config);
        $service = new PaymentReverse($adapayConfig);
        $res = $service->create($params);
        echo json_encode($res, JSON_UNESCAPED_UNICODE);

        //断言错误结果
//        $this->assertEquals('failed', $res['data']['status']);

        //断言正常结果
        $this->assertEquals('succeeded', $res['data']['status']);
    }

    public function testQuery(): void
    {
        $params = [
            'reverse_id' => '',
        ];
        $config = Config::getConfig();
        $adapayConfig = new AdapayConfig($config);
        $service = new PaymentReverse($adapayConfig);
        $res = $service->query($params);
        echo json_encode($res, JSON_UNESCAPED_UNICODE);

        //断言错误结果
//        $this->assertEquals('failed', $res['data']['status']);

        //断言正常结果
        $this->assertEquals('succeeded', $res['data']['status']);
    }

    public function testQueryList(): void
    {
        $params = [
            'app_id' => ''
        ];
        $config = Config::getConfig();
        $adapayConfig = new AdapayConfig($config);
        $service = new PaymentReverse($adapayConfig);
        $res = $service->queryList($params);
        echo json_encode($res, JSON_UNESCAPED_UNICODE);

        //断言错误结果
//        $this->assertEquals('failed', $res['data']['status']);

        //断言正常结果
        $this->assertEquals('succeeded', $res['data']['status']);
    }
}