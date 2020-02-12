<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tag;

/* @var $this yii\web\View */
/* @var $model app\models\CandyTag */
/* @var $form yii\widgets\ActiveForm */

use app\models\CandieGoods;
use yii\helpers\ArrayHelper;

$candyGoods = CandieGoods::find()->asArray()->all();
$candyTag = Tag::find()->where(['subjects' => 'candy'])->asArray()->all();

$arr_goods = ArrayHelper::map($candyGoods, 'id', 'lm_title');
$arr_tag = ArrayHelper::map($candyTag, 'id', 'title');
?>

<div class="candy-tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'candy_id')->dropDownList($arr_goods) ?>

    <?= $form->field($model, 'tag_id')->dropDownList($arr_tag) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
