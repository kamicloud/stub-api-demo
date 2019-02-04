<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\BaseModel;
use YetAnotherGenerator\Utils\Constants;
use App\Generated\V1\Enums\TeacherCatalogEnum;
use YetAnotherGenerator\ValueHelper;

class TeacherModel extends BaseModel
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

    public function getTeacherId()
    {
        return $this->teacherId;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getPic()
    {
        return $this->pic;
    }

    public function getMarks()
    {
        return $this->marks;
    }

    public function getCatalog()
    {
        return $this->catalog;
    }

    public function getTeachers()
    {
        return $this->teachers;
    }

    /**
     * 好评率，以1为单位
     */
    public function getGoodCmtRate()
    {
        return $this->goodCmtRate;
    }

    public function isIsMyFave()
    {
        return $this->isMyFave;
    }

    public function getOpenClass()
    {
        return $this->openClass;
    }

    public function getOkClass()
    {
        return $this->okClass;
    }

    public function getClassNum()
    {
        return $this->classNum;
    }

    public function getSortTchTime()
    {
        return $this->sortTchTime;
    }

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
            ['teacherId', 'teacher_id', 'bail|required|int', Constants::IS_OPTIONAL],
            ['nickname', 'nickname', 'bail|required|String', Constants::IS_OPTIONAL],
            ['pic', 'pic', 'bail|required|String', Constants::IS_OPTIONAL],
            ['marks', 'marks', 'bail|required|int', Constants::IS_OPTIONAL | Constants::IS_ARRAY],
            ['catalog', 'catalog', TeacherCatalogEnum::class, Constants::IS_ENUM],
            ['teachers', 'teachers', TeacherModel::class, Constants::IS_MODEL | Constants::IS_ARRAY],
            ['goodCmtRate', 'good_cmt_rate', 'bail|required|numeric', Constants::IS_OPTIONAL],
            ['isMyFave', 'is_my_fave', 'bail|required|boolean', Constants::IS_OPTIONAL],
            ['openClass', 'open_class', 'bail|required|int', Constants::IS_OPTIONAL | Constants::IS_ARRAY],
            ['okClass', 'ok_class', 'bail|required|int', Constants::IS_OPTIONAL],
            ['classNum', 'class_num', 'bail|required|int', Constants::IS_OPTIONAL],
            ['sortTchTime', 'sort_tch_time', 'Date', null],
            ['isRecommended', 'is_recommended', 'bail|required|boolean', Constants::IS_OPTIONAL],
        ];
    }

}
