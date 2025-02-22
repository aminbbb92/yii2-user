<?php

namespace aminbbb92\user\traits;

use aminbbb92\user\Module;

/**
 * Trait ModuleTrait
 *
 * @property-read Module $module
 * @package aminbbb92\user\traits
 */
trait ModuleTrait
{
    /**
     * @return Module
     */
    public function getModule()
    {
        return \Yii::$app->getModule('user');
    }

    /**
     * @return string
     */
    public static function getDb()
    {
        return \Yii::$app->getModule('user')->getDb();
    }
}
