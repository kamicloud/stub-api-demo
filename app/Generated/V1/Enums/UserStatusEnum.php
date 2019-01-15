<?php

namespace App\Generated\V1\Enums;

use YetAnotherGenerator\BaseEnum;

class UserStatusEnum extends BaseEnum
{
    public const DISABLED = 2;

    public const INIT = 0;

    public const IN_CLASS = 4;

    protected const _MAP = [
        self::DISABLED => 'DISABLED',
        self::INIT => 'INIT',
        self::IN_CLASS => 'IN_CLASS',
    ];

}
