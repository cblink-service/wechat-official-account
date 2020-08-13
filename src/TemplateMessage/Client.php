<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

use Cblink\Service\Kennel\AbstractApi;
use Cblink\Service\Wechat\OfficialAccount\Application;

/**
 * Class Client
 * @package Cblink\Service\Wechat\OfficialAccount\TemplateMessage
 * @property-read Application $app
 */
class Client extends AbstractApi
{
    public function getPrivateTemplates()
    {
        return $this->get('api/official/message/templates', array_merge([
            'uuid' => $this->app->getUuid(),
        ]));
    }

    public function send($payload)
    {
        return $this->get('api/official/message/templates/send', array_merge([
            'uuid' => $this->app->getUuid(),
        ], $payload));
    }
}