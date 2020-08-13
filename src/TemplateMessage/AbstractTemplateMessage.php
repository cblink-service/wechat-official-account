<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

use Cblink\Service\Wechat\OfficialAccount\Application;

abstract class AbstractTemplateMessage
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @var AbstractNotification
     */
    protected $notice;

    /**
     * @var array
     */
    protected $config;

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

    public function getNotice()
    {
        return $this->notice;
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

    public function send()
    {
        if (empty($this->getNotice())) {
            throw new \RuntimeException("未设置要发送的消息");
        }

        return $this->getService()->send($this->getNotice()->getTemplate());
    }
}
