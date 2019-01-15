<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\BaseModel;
use App\Generated\V1\Models\UserModel;
use YetAnotherGenerator\ValueHelper;

class ArticleCommentModel extends BaseModel
{
    use ValueHelper;

    protected $id;
    protected $user;
    protected $content;
    protected $createdAt;

    public function getId()
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getAttributeMap()
    {
        return [
            ['id', 'id', false, false, 'bail|required|Integer', false, false, false],
            ['user', 'user', true, false, UserModel::class, false, false, false],
            ['content', 'content', false, false, 'bail|required|String', false, false, false],
            ['createdAt', 'created_at', false, false, 'Date', false, false, false],
        ];
    }

}
