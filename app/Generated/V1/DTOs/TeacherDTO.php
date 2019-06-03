<?php

namespace App\Generated\V1\DTOs;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\DTOs\DTO;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\Enums\TeacherCatalog;

class TeacherDTO extends DTO
{
    use ValueHelper;

    protected $teacherId;
    protected $nickname;
    protected $pic;
    protected $marks;
    protected $catalog;
    protected $teachers;
    protected $goodCmtRate;
    protected $isMyFave;
    protected $openClass;
    protected $okClass;
    protected $classNum;
    protected $sortTchTime;
    protected $isRecommended;

    /**
     * @return int
     */
    public function getTeacherId()
    {
        return $this->teacherId;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * @return int[]
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * @return TeacherCatalog
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * @return TeacherDTO[]
     */
    public function getTeachers()
    {
        return $this->teachers;
    }

    /**
     * 好评率，以1为单位
     * @return float
     */
    public function getGoodCmtRate()
    {
        return $this->goodCmtRate;
    }

    /**
     * @return boolean
     */
    public function getIsMyFave()
    {
        return $this->isMyFave;
    }

    /**
     * @return boolean
     */
    public function isIsMyFave()
    {
        return $this->isMyFave;
    }

    /**
     * @return int[]
     */
    public function getOpenClass()
    {
        return $this->openClass;
    }

    /**
     * @return int
     */
    public function getOkClass()
    {
        return $this->okClass;
    }

    /**
     * @return int
     */
    public function getClassNum()
    {
        return $this->classNum;
    }

    /**
     * @return \Illuminate\Support\Carbon
     */
    public function getSortTchTime()
    {
        return $this->sortTchTime;
    }

    /**
     * @return boolean
     */
    public function getIsRecommended()
    {
        return $this->isRecommended;
    }

    /**
     * @return boolean
     */
    public function isIsRecommended()
    {
        return $this->isRecommended;
    }

    public function setTeacherId($teacherId)
    {
        $this->teacherId = $teacherId;
    }

    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    public function setPic($pic)
    {
        $this->pic = $pic;
    }

    public function setMarks($marks)
    {
        $this->marks = $marks;
    }

    public function setCatalog($catalog)
    {
        $this->catalog = $catalog;
    }

    public function setTeachers($teachers)
    {
        $this->teachers = $teachers;
    }

    public function setGoodCmtRate($goodCmtRate)
    {
        $this->goodCmtRate = $goodCmtRate;
    }

    public function setIsMyFave($isMyFave)
    {
        $this->isMyFave = $isMyFave;
    }

    public function setOpenClass($openClass)
    {
        $this->openClass = $openClass;
    }

    public function setOkClass($okClass)
    {
        $this->okClass = $okClass;
    }

    public function setClassNum($classNum)
    {
        $this->classNum = $classNum;
    }

    public function setSortTchTime($sortTchTime)
    {
        $this->sortTchTime = $sortTchTime;
    }

    public function setIsRecommended($isRecommended)
    {
        $this->isRecommended = $isRecommended;
    }

    public function getAttributeMap()
    {
        return [
            ['teacherId', 'id', 'bail|integer', Constants::INTEGER, null],
            ['nickname', 'nickname', 'bail|string', Constants::STRING, null],
            ['pic', 'pic', 'bail|string', Constants::STRING, null],
            ['marks', 'marks', 'bail|integer', Constants::INTEGER | Constants::ARRAY, null],
            ['catalog', 'catalog', TeacherCatalog::class, Constants::ENUM, null],
            ['teachers', 'teachers', TeacherDTO::class, Constants::MODEL | Constants::ARRAY, null],
            ['goodCmtRate', 'good_cmt_rate', 'bail|numeric', Constants::FLOAT, 'numeric'],
            ['isMyFave', 'is_my_fave', 'bail|null', Constants::BOOLEAN, null],
            ['openClass', 'open_class', 'bail|integer', Constants::INTEGER | Constants::ARRAY, null],
            ['okClass', 'ok_class', 'bail|integer', Constants::INTEGER, null],
            ['classNum', 'class_num', 'bail|integer', Constants::INTEGER, null],
            ['sortTchTime', 'sort_tch_time', 'bail|date_format:Y-m-d H:i:s', Constants::DATE, 'Y-m-d H:i:s'],
            ['isRecommended', 'is_recommended', 'bail|null', Constants::BOOLEAN, null],
        ];
    }

}
