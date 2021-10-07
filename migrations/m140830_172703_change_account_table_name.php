<?php

/*
 * This file is part of the Amin project.
 *
 * (c) Amin project <http://github.com/aminbbb92/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use aminbbb92\user\migrations\Migration;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class m140830_172703_change_account_table_name extends Migration
{
    public function up()
    {
        $this->renameTable('{{%account}}', '{{%social_account}}');
    }

    public function down()
    {
        $this->renameTable('{{%social_account}}', '{{%account}}');
    }
}
