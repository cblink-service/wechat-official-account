<?php

namespace Cblink\Service\Wechat\OfficialAccount\Auth;

use Cblink\Service\Kennel\AbstractApi;
use Cblink\Service\Wechat\OfficialAccount\Application;

/**
 * Class Client
 * @package Cblink\Service\Wechat\OfficialAccount\Auth
 * @property-read Application $app
 */
class Client extends AbstractApi
{

    /**
     * 获取授权链接
     *
     * @param array $params
     * @return string
     */
    public function getAuthUrl(array $params = [])
    {
        return $this->get(sprintf('api/official/auth/%s/url', $this->app->getUuid()), $params);
    }

}