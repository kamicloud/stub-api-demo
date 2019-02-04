<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\BaseModel;
use App\Generated\V1\Models\UserModel;
use YetAnotherGenerator\Utils\Constants;
use YetAnotherGenerator\ValueHelper;
use App\Generated\V1\Enums\ArticleStatusEnum;

class ArticleModel extends BaseModel
{
    use ValueHelper;

    protected $id;
    protected $title;
    protected $content;
    protected $user;
    protected $status;
    protected $commentsCount;
    protected $favorite;
    protected $hot;
    protected $createdAt;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCommentsCount()
    {
        return $this->commentsCount;
    }

    /**
     * 需要时用于标记是否收藏
     */
    public function getFavorite()
    {
        return $this->favorite;
    }

    /**
     * 是否是添加火热标记
     */
    public function getHot()
    {
        return $this->hot;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setCommentsCount($commentsCount)
    {
        $this->commentsCount = $commentsCount;
    }

    public function setFavorite($favorite)
    {
        $this->favorite = $favorite;
    }

    public function setHot($hot)
    {
        $this->hot = $hot;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getAttributeMap()
    {
        return [
            ['id', 'id', 'bail|nullable|Integer', null],
            ['title', 'title', 'bail|required|String', Constants::IS_OPTIONAL],
            ['content', 'content', 'bail|nullable|String', null],
            ['user', 'user', UserModel::class, Constants::IS_MODEL],
            ['status', 'status', ArticleStatusEnum::class, Constants::IS_ENUM],
            ['commentsCount', 'comments_count', 'bail|nullable|Integer', null],
            ['favorite', 'favorite', 'bail|nullable|Boolean', null],
            ['hot', 'hot', 'bail|nullable|Boolean', null],
            ['createdAt', 'created_at', 'Date', null],
        ];
    }

}
