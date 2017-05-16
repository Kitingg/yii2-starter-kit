<?php
/**
 * Created by PhpStorm.
 * User: ignatenkovnikita
 * Web Site: http://IgnatenkovNikita.ru
 */

namespace common;


use common\traits\SiteScopeTraits;
use ReflectionClass;

class ActiveQuery extends \yii\db\ActiveQuery
{

    /**
     * Reset all where conditions
     * @return $this
     */
    public function resetWhere()
    {
        return $this->where('1=1');
    }
}