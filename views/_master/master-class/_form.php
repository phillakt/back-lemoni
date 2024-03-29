<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\MasterClass */
/* @var $form yii\widgets\ActiveForm */


//debug($model);die;
?>

<div class="master-class-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-6">

            <?//= $form->field($model, 'lm_essence')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_essence')->dropDownList([
                'Взрослый' => 'Взрослый',
                'Детский' => 'Детский',
            ]) ?>

            <?= $form->field($model, 'lm_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_img')->textInput(['maxlength' => true])->widget(InputFile::class, [
                'options'       => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-primary mt-15'],
                'buttonName' => 'Загрузить',
            ]) ?>

            <div>
                <?= Html::img($model->lm_img, ['class' => 'img-responsive']) ?>
            </div>

        </div>

        <div class="col-lg-6">

            <?= $form->field($model, 'lm_date')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_publicate')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_prioritet')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_price')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-12 mt-35">
            <?= $form->field($model, 'lm_description')->textarea(['rows' => 6])->widget(CKEditor::class, [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ]) ?>

            <?= $form->field($model, 'lm_content')->textarea(['rows' => 20])->widget(CKEditor::class, [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

<!--    --><?php //$form = ActiveForm::begin(); ?>
<!---->
<!--    --><?//= $form->field($model, 'lm_essence')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'lm_title')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?//= $form->field($model, 'lm_img')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'lm_description')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?//= $form->field($model, 'lm_content')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?//= $form->field($model, 'lm_price')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'lm_date')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'lm_publicate')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'lm_prioritet')->textInput(['maxlength' => true]) ?>
<!---->
<!--    <div class="form-group">-->
<!--        --><?//= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
<!--    </div>-->
<!---->
<!--    --><?php //ActiveForm::end(); ?>

</div>
