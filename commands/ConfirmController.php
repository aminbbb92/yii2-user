<?php

/*
 * This file is part of the Amin project.
 *
 * (c) Amin project <http://github.com/aminbbb92/>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace aminbbb92\user\commands;

use aminbbb92\user\Finder;
use Yii;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Confirms a user.
 *
 * @property \aminbbb92\user\Module $module
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class ConfirmController extends Controller
{
    /** @var Finder */
    protected $finder;

    /**
     * @param string           $id
     * @param \yii\base\Module $module
     * @param Finder           $finder
     * @param array            $config
     */
    public function __construct($id, $module, Finder $finder, $config = [])
    {
        $this->finder = $finder;
        parent::__construct($id, $module, $config);
    }

    /**
     * Confirms a user by setting confirmed_at field to current time.
     *
     * @param string $search Email or username
     */
    public function actionIndex($search)
    {
        $user = $this->finder->findUserByUsernameOrEmail($search);
        if ($user === null) {
            $this->stdout(Yii::t('user', 'User is not found') . "\n", Console::FG_RED);
        } else {
            if ($user->confirm()) {
                $this->stdout(Yii::t('user', 'User has been confirmed') . "\n", Console::FG_GREEN);
            } else {
                $this->stdout(Yii::t('user', 'Error occurred while confirming user') . "\n", Console::FG_RED);
            }
        }
    }
}
