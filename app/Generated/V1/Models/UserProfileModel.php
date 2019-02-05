<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\Concerns\ValueHelper;
use YetAnotherGenerator\Utils\Constants;
use YetAnotherGenerator\DTOs\DTO;

class UserProfileModel extends DTO
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
            ['name', 'name', 'bail|required|String', Constants::IS_OPTIONAL],
            ['age', 'age', 'bail|required|Integer', Constants::IS_OPTIONAL],
        ];
    }

}