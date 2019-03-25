<?php

namespace App\Generated\V1\Enums;

use YetAnotherGenerator\BOs\Enum;

class TeacherLeaveReason extends Enum
{
    public const EVENT = 0;

    public const RELAX = 1;

    public const ACTIVITY = 2;

    public const _MAP = [
        self::EVENT => 'EVENT',
        self::RELAX => 'RELAX',
        self::ACTIVITY => 'ACTIVITY',
    ];

}
