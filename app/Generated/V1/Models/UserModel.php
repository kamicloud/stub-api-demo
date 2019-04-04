<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\Concerns\ValueHelper;
use YetAnotherGenerator\Utils\Constants;
use YetAnotherGenerator\DTOs\DTO;

class UserModel extends DTO
{
    use ValueHelper;

    protected $name;
    protected $id;
    protected $avatar;

    /**
     * 这里只是留了一个备注
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 一个注释
     */
    public function getId()
    {
        return $this->id;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getAttributeMap()
    {
        return [
            ['name', 'name', 'bail|String', null],
            ['id', 'id', 'bail|Integer', Constants::IS_MUTABLE],
            ['avatar', 'avatar', 'bail|String', null],
        ];
    }

}
