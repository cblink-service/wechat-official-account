<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['official_account'] = function ($pimple) {
            return new Client($pimple);
        };
    }
}