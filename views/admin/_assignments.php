<?php

/*
 * This file is part of the Amin project
 *
 * (c) Amin project <http://github.com/aminbbb92>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use aminbbb92\rbac\widgets\Assignments;

/**
 * @var yii\web\View $this
 * @var aminbbb92\user\models\User $user
 */
?>

<?php $this->beginContent('@aminbbb92/user/views/admin/update.php', ['user' => $user]) ?>

<?= yii\bootstrap5\Alert::widget([
    'options' => [
        'class' => 'alert-info alert-dismissible',
    ],
    'body' => Yii::t('user', 'You can assign multiple roles or permissions to user by using the form below'),
]) ?>

<?= Assignments::widget(['userId' => $user->id]) ?>

<?php $this->endContent() ?>
