<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

use Cblink\Service\Wechat\OfficialAccount\Application;

abstract class AbstractTemplateMessage
{
    protected $config;

    protected $notice;

    protected $app;

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

    public function getConfig()
    {
        return $this->config;
    }

    public function getService()
    {
        if (empty($this->app)) {
            $this->app = new Application($this->getConfig());
        }

        return $this->app->official_account;
    }

    abstract public function send();
}
