<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\BaseModel;
use App\Generated\V1\Enums\TeacherLeaveReasonEnum;
use YetAnotherGenerator\ValueHelper;

class TeacherLeaveRecordModel extends BaseModel
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
            ['id', 'id', false, false, 'bail|required|Integer', false, false, false],
            ['tname', 'tname', false, false, 'bail|required|String', false, false, false],
            ['reason', 'reason', false, false, TeacherLeaveReasonEnum::class, false, false, true],
        ];
    }

}
