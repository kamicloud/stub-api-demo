<?php

namespace App\Generated\V1\Models;

use App\Generated\V1\Models\UserModel;
use YetAnotherGenerator\Concerns\ValueHelper;
use YetAnotherGenerator\Utils\Constants;
use YetAnotherGenerator\DTOs\DTO;

class ArticleCommentModel extends DTO
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
            ['id', 'id', 'bail|Integer', null],
            ['user', 'user', UserModel::class, Constants::IS_MODEL],
            ['content', 'content', 'bail|String', null],
            ['createdAt', 'created_at', 'Date', null],
        ];
    }

}
