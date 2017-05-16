<?php

namespace common;

use Yii;
use yii\db\ActiveQuery;

/**
 * {@inheritDoc}
 *
 * @property string status
 * @method ActiveQuery hasMany($class, array $link) see [[BaseActiveRecord::hasMany()]] for more info
 * @method ActiveQuery hasOne($class, array $link) see [[BaseActiveRecord::hasOne()]] for more info
 *
 * Базовая модель для всего приложения
 */
abstract class ActiveRecord extends \yii\db\ActiveRecord
{

    /**
     * События
     */
    const EVENT_AFTER_SOFT_DELETE = 'afterSoftDelete';
    const EVENT_BEFORE_SOFT_DELETE = 'beforeSoftDelete';
    const EVENT_AFTER_RESTORE = 'afterRestore';
}
