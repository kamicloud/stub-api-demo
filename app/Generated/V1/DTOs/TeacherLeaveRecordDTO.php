<?php

namespace App\Generated\V1\DTOs;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\DTOs\DTO;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\Enums\TeacherLeaveReason;

class TeacherLeaveRecordDTO extends DTO
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
            ['id', 'id', 'bail|Integer', Constants::IS_MUTABLE],
            ['tname', 'tname', 'bail|String', null],
            ['reason', 'reason', TeacherLeaveReason::class, Constants::IS_ENUM],
        ];
    }

}
