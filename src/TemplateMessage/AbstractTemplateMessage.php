<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

abstract class AbstractTemplateMessage
{
    protected $config;

    protected $notice;

    public function __construct(AbstractNotification $notice = null, $config = [])
    {
        $this->notice = $this->setNotice($notice);

        $this->config = $config;
    }

    public function setNotice($notice)
    {
        $this->notice = $notice;

        return $this;
    }

    abstract public function getService();

    abstract public function send();
}
