<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\BaseModel;
use YetAnotherGenerator\ValueHelper;

class UserProfileModel extends BaseModel
{
    use ValueHelper;

    protected $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAttributeMap()
    {
        return [
            ['name', 'name', false, false, 'bail|required|String', false, false, false],
            ['age', 'age', false, false, 'bail|required|Integer', false, false, false],
        ];
    }

}
