<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

abstract class AbstractTemplateMessage
{
    protected $notice;

    public function __construct($notice = null)
    {
        $this->notice = $this->setNotice($notice);
    }

    public function setNotice($notice)
    {
        $this->notice = $notice;

        return $this;
    }

    abstract public function getService();

    abstract public function send();
}
