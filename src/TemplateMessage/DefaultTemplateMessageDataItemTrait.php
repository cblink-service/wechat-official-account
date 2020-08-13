<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

/**
 * Trait DefaultTemplateMessageDataItemTrait
 * @package Cblink\Service\Wechat\OfficialAccount\TemplateMessage
 * @mixin AbstractNotification
 */
trait DefaultTemplateMessageDataItemTrait
{
    public function setFirst($value = '')
    {
        return $this->setDataItem('first', $value);
    }

    public function setKeyword1($value)
    {
        return $this->setDataItem('keyword1', $value);
    }

    public function setKeyword2($value)
    {
        return $this->setDataItem('keyword2', $value);
    }

    public function setKeyword3($value)
    {
        return $this->setDataItem('keyword3', $value);
    }

    public function setRemark($value)
    {
        return $this->setDataItem('remark', $value);
    }
}