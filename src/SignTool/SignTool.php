<?php

namespace cccdl\adapay\SignTool;

use cccdl\adapay\Core\BaseCore;

class SignTool extends BaseCore
{
    public function checkSign(array $notify): bool
    {
        $data = $notify['data'];
        $signature = $notify['sign'] ?? '';
        return $this->verifySign($signature, $data);
    }
}