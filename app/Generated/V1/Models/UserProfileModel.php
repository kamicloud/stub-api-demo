<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\Concerns\ValueHelper;
use YetAnotherGenerator\Utils\Constants;
use YetAnotherGenerator\DTOs\DTO;

class UserProfileModel extends DTO
{
    use ValueHelper;

    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAttributeMap()
    {
        return [
            ['name', 'name', 'bail|String', null],
        ];
    }

}
