# 汇付天下

### 主要新特性

* 汇付天下 SDK for PHP
* 在官网sdk基础上转变composer依赖自动加载形式
* 在官网sdk代码基础上，规范代码符合sonarLint检测
* 官网sdk init 加载不同配置等，优化加载内容，提高性能
* 官网sdk crul请求相对复杂，转换guzzle统一请求
* 可执行单元测试
* 简化使用方式、更符合面向对象、命名空间使用规范
* 错误、成功都统一返回正常可用数组

## 安装

> 运行环境要求PHP7.1+。

```shell
$ composer require dwc/adapay
```

### 接口对应文件

了解[接口参数](https://docs.adapay.tech/api/apipath.html#)，点击快速进入

| 文件                  | 方法            | 说明         |
|---------------------|---------------|------------|
| SettleAccount.php   | `balance()`   | 查询余额       |
| SettleAccount.php   | `query()`     | 查询结算账户对象   |
| SettleAccount.php   | `create()`    | 创建结算账户对象   |
| SettleAccount.php   | `delete()`    | 删除结算账户对象   |
| Member.php          | `query()`     | 查询用户对象     |
| Member.php          | `create()`    | 创建用户对象     |
| PaymentReverse.php  | `create()`    | 创建支付撤销对象   |
| PaymentReverse.php  | `query()`     | 查询支付撤销对象   |
| PaymentReverse.php  | `queryList()` | 查询支付撤销对象列表 |
| PaymentsConfirm.php | `query()`     | 查询支付确认对象   |
| PaymentsConfirm.php | `queryList()` | 查询支付确认对象列表 |
| PaymentsConfirm.php | `create()`    | 创建支付确认对象   |
| Refund.php          | `create()`    | 创建退款对象     |
| Refund.php          | `query()`     | 查询退款对象     |
| Payment.php         | `create()`    | 创建支付对象     |
| Payment.php         | `query()`     | 查询支付对象     |
| Payment.php         | `queryList()` | 查询支付对象列表   |
| Payment.php         | `close()`     | 创建支付关单     |
| SignTool.php        | `checkSign()` | 验签是否正确     |

### 快速使用

了解汇付天下[接口约定](https://docs.adapay.tech/api/apipath.html#)。

```php
<?php

use dwc\adapay\Settle\SettleAccount;
//请求数组
$params = [
    'app_id' => 'app_id',
    'member_id' => 0,
];
//配置数组
$config = [

];
$adapayConfig = new AdapayConfig($config);
$service = new SettleAccount($adapayConfig);
$res = $service->balance($params);
//结果
var_dump($res);
```

```php
<?php

use dwc\adapay\SignTool\SignTool;

$adapayConfig = new AdapayConfig($config);
$service = new SignTool($adapayConfig);
$res = $service->checkSign();
//结果 true=验签成功，false=验签失败
var_dump($res);
```

## 文档

[接口约定](https://docs.adapay.tech/api/apipath.html#)
[API 文档](https://docs.adapay.tech/api/index.html)
[官网](https://www.adapay.tech/)

## License

MIT
