<?php

namespace Cblink\Service\Wechat\OfficialAccount;

use Cblink\Service\Kennel\ServiceContainer;
use Cblink\Service\Wechat\OfficialAccount\TemplateMessage\Client;

/**
 * Class Application
 * @package Cblink\Service\Wechat\OfficialAccount
 * @property-read Client $official_account
 */
class Application extends ServiceContainer
{
    protected function getCustomProviders(): array
    {
        return [
            TemplateMessage\ServiceProvider::class,
        ];
    }

    /**
     * @return mixed
     */
    public function getUuid(): string
    {
        return $this->config('uuid');
    }
}