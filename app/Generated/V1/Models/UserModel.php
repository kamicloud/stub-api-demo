<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\BaseModel;
use YetAnotherGenerator\ValueHelper;

class UserModel extends BaseModel
{
    use ValueHelper;

    protected $id;
    protected $name;
    protected $avatar;

    /**
     * 一个注释
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 这里只是留了一个备注
     */
    public function getName()
    {
        return $this->name;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getAttributeMap()
    {
        return [
            ['id', 'id', false, false, 'bail|required|Integer', false, false, false],
            ['name', 'name', false, false, 'bail|required|String', false, false, false],
            ['avatar', 'avatar', false, false, 'bail|required|String', false, false, false],
        ];
    }

}
