<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\Concerns\ValueHelper;
use YetAnotherGenerator\Utils\Constants;
use App\Generated\V1\Enums\TeacherLeaveReasonEnum;
use YetAnotherGenerator\DTOs\DTO;

class TeacherLeaveRecordModel extends DTO
{
    use ValueHelper;

    protected $id;
    protected $tname;
    protected $reason;

    public function getId()
    {
        return $this->id;
    }

    public function getTname()
    {
        return $this->tname;
    }

    public function getReason()
    {
        return $this->reason;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTname($tname)
    {
        $this->tname = $tname;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    public function getAttributeMap()
    {
        return [
            ['id', 'id', 'bail|required|Integer', Constants::IS_OPTIONAL],
            ['tname', 'tname', 'bail|required|String', Constants::IS_OPTIONAL],
            ['reason', 'reason', TeacherLeaveReasonEnum::class, Constants::IS_ENUM],
        ];
    }

}
