<?php

namespace App\Generated\V1\Enums;

use YetAnotherGenerator\BOs\Enum;

class TeacherLeaveReasonEnum extends Enum
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
