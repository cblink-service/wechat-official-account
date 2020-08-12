<?php

namespace Cblink\Service\Wechat\OfficialAccount;

use Cblink\Service\Kennel\ServiceContainer;

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