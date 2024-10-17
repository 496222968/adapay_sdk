<?php

namespace dwc\adapay\Common;

use dwc\adapay\Core\BaseCore;
use dwc\adapay\Exception\DwcException;
use GuzzleHttp\Exception\GuzzleException;

class Common extends BaseCore
{

    /**
     * 请求前缀
     * @var string
     */
    protected $endpoint = '/v1';

    /**
     * @param array $params
     * @return array
     * @throws GuzzleException
     * @throws DwcException
     */
    public function create(array $params): array
    {
        if (!isset($params['adapay_func_code'])) {
            throw new DwcException('adapay_func_code is required');
        }
        $this->setUrl('/' . str_replace(".", "/", $params['adapay_func_code']));
        $this->setPostParams($params);
        $this->setPostHeader();
        return $this->getPostBody();
    }
}