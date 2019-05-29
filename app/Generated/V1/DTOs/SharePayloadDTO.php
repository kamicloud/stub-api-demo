<?php

namespace App\Generated\V1\DTOs;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\DTOs\DTO;
use Kamicloud\StubApi\Utils\Constants;

class SharePayloadDTO extends DTO
{
    use ValueHelper;

    protected $title;
    protected $description;
    protected $icon;
    protected $url;

    /**
     * 分享的标题
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 分享的描述
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 一个缩略图
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * 点进去的链接
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getAttributeMap()
    {
        return [
            ['title', 'title', 'bail|String', null],
            ['description', 'description', 'bail|String', null],
            ['icon', 'icon', 'bail|String', null],
            ['url', 'url', 'bail|String', null],
        ];
    }

}