<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

interface NotificationInterface
{
    public function isNeedNotification();

    public function getTemplate();

    public function getNotification();

    public function send();
}