<?php

namespace App\Generated\V1\Enums;

use YetAnotherGenerator\BaseEnum;

class TeacherLeaveReasonEnum extends BaseEnum
{
    public const RELAX = 1;

    public const EVENT = 0;

    public const ACTIVITY = 2;

    public const _MAP = [
        self::RELAX => 'RELAX',
        self::EVENT => 'EVENT',
        self::ACTIVITY => 'ACTIVITY',
    ];

}
