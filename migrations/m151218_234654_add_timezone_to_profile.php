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

class m151218_234654_add_timezone_to_profile extends Migration
{
    public function up()
    {
        $this->addColumn('{{%profile}}', 'timezone', $this->string(40)->null());
    }

    public function down()
    {
        $this->dropcolumn('{{%profile}}', 'timezone');
    }
}
