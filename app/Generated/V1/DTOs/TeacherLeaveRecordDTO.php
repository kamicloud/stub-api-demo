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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTname()
    {
        return $this->tname;
    }

    /**
     * @return mixed
     */
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
            ['id', 'id', 'bail|integer', Constants::INTEGER | Constants::MUTABLE, null],
            ['tname', 'tname', 'bail|string', Constants::STRING, null],
            ['reason', 'reason', TeacherLeaveReason::class, Constants::ENUM, null],
        ];
    }

}
