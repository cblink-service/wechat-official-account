<?php

namespace Cblink\Service\Wechat\OfficialAccount;

use Cblink\Service\Kennel\ServiceContainer;

/**
 * Class Application
 * @package Cblink\Service\Wechat\OfficialAccount
 * @property-read TemplateMessage\Client $official_account
 * @property-read Auth\Client $auth
 */
class Application extends ServiceContainer
{
    protected function getCustomProviders(): array
    {
        return [
            TemplateMessage\ServiceProvider::class,
            Auth\ServiceProvider::class,
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