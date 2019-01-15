<?php

namespace App\Generated\V1\Models;

use YetAnotherGenerator\BaseModel;
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
            ['teacherId', 'teacher_id', false, false, 'bail|required|int', false, false, false],
            ['nickname', 'nickname', false, false, 'bail|required|String', false, false, false],
            ['pic', 'pic', false, false, 'bail|required|String', false, false, false],
            ['marks', 'marks', false, true, 'bail|required|int', false, false, false],
            ['catalog', 'catalog', false, false, TeacherCatalogEnum::class, false, false, true],
            ['teachers', 'teachers', true, true, TeacherModel::class, false, false, false],
            ['goodCmtRate', 'good_cmt_rate', false, false, 'bail|required|float', false, false, false],
            ['isMyFave', 'is_my_fave', false, false, 'bail|required|boolean', false, false, false],
            ['openClass', 'open_class', false, true, 'bail|required|int', false, false, false],
            ['okClass', 'ok_class', false, false, 'bail|required|int', false, false, false],
            ['classNum', 'class_num', false, false, 'bail|required|int', false, false, false],
            ['sortTchTime', 'sort_tch_time', false, false, 'Date', false, false, false],
            ['isRecommended', 'is_recommended', false, false, 'bail|required|boolean', false, false, false],
        ];
    }

}
