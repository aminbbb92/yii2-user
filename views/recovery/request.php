<?php

/*
 * This file is part of the Amin project.
 *
 * (c) Amin project <http://github.com/aminbbb92>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var aminbbb92\user\models\RecoveryForm $model
 */

$this->title = Yii::t('user', 'Recover your password');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin([
                    'id' => 'password-recovery-form',
                    'enableAjaxValidation' => true,
                    'enableClientValidation' => false,
                ]); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <?= Html::submitButton(Yii::t('user', 'Continue'), ['class' => 'btn btn-primary btn-block']) ?><br>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
