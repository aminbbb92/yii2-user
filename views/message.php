<?php

/*
 * This file is part of the Amin project.
 *
 * (c) Amin project <http://github.com/aminbbb92>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var yii\web\View $this
 * @var aminbbb92\user\Module $module
 */

$this->title = $title;
?>

<?= $this->render('/_alert', ['module' => $module]);
