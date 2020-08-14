<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

use Cblink\Service\Wechat\OfficialAccount\Application;

class TemplateMessage
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @var AbstractNotification
     */
    protected $notification;

    /**
     * @var array
     */
    protected $config;

    public function __construct(AbstractNotification $notification = null, $config = [])
    {
        $this->notification = $notification;

        $this->setConfig($config);
    }

    public function setNotification(AbstractNotification $notification)
    {
        $this->notification = $notification;

        return $this;
    }

    public function getNotification()
    {
        return $this->notification;
    }

    public function setConfig($config)
    {
        $this->config = $config;

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

    public function send()
    {
        if (empty($this->getNotification())) {
            throw new \RuntimeException("未设置要发送的消息");
        }

        return $this->getService()->send([
            'template' => $this->getNotification()->getTemplate(),
        ]);
    }
}
