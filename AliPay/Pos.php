<?php

namespace AliPay;

use WeChat\Contracts\BasicAliPay;

/**
 * 支付宝刷卡支付
 * Class Pos
 * @package AliPay
 */
class Pos extends BasicAliPay
{
    /**
     * Pos constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        parent::__construct($options);
        $this->options->set('method', 'alipay.trade.pay');
        $this->params->set('product_code', 'FACE_TO_FACE_PAYMENT');
    }

    /**
     * 创建数据操作
     * @param array $options
     * @return mixed
     * @throws \WeChat\Exceptions\InvalidResponseException
     */
    public function apply($options)
    {
        return $this->getResult($options);
    }
}