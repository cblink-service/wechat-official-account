<?php

namespace Cblink\Service\Wechat\OfficialAccount\TemplateMessage;

abstract class AbstractNotification
{
    protected $data = [
        'touser' => '',
        'template_id' => '',
        'url' => '',
        'miniprogram' => [],
        'data' => [],
    ];

    protected $miniprogram = [
        'appid' => '',
        'pagepath' => '',
    ];

    protected $templateId;

    protected $url;

    public function __construct()
    {
        $this->setTemplate($this->templateId);
    }

    public function setUser($openid)
    {
        $this->data['touser'] = $openid;

        return $this;
    }

    public function setTemplate($templateId)
    {
        $this->data['template_id'] = $templateId;

        return $this;
    }

    public function setUrl($url)
    {
        $this->data['url'] = $url;

        $this->data['miniprogram'] = [];

        return $this;
    }

    public function setMiniprogram($appid, $pagepath = '')
    {
        $miniprogram = compact('appid', 'pagepath');

        $this->miniprogram = array_filter($miniprogram);

        $this->data['miniprogram'] = $this->miniprogram;

        unset($this->data['url']);
    }

    public function setDataItem($key, $value, $color = '')
    {
        $item = compact('value', 'color');

        $this->data['data'][$key] = array_filter($item);

        return $this;
    }

    public function toArray()
    {
        return $this->data;
    }

    public function toJson()
    {
        return \json_encode($this->toArray(), JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }
}
