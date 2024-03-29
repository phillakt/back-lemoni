<?php

use app\widgets\sidebar\Sidebar;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;
use yii\helpers\Html;
use app\assets\OwlAsset;


$this->title = 'Отзывы о кондитерской «Лемони»';
$this->registerMetaTag(['name' => 'description', 'content' => 'Торты и другие десерты на любые мероприятия: Дни Рождения, юбилеи, свадьбы, корпоративы в Белгороде.']);
OwlAsset::register($this);
?>

<section class="revievs mt-90">
    <div class="container">
        <div class="row flex-reverse">
            <div class="col-lg-2">

                <!-- Sidebar -->
                <?= Sidebar::widget(); ?>

            </div>

            <div class="col-lg-9 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">Оставьте отзыв</h1>

                <div class="row mt-60">

                    <?php Pjax::begin(); ?>

                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'id' => 'reviews-id',
                            "data-pjax" => "0",
                        ]
                    ]); ?>

                    <div class="col-lg-12">
                        <div class="delivery-box global-form mb-60">

                            <div class="row">

                                <div class="col-lg-5">

                                    <p class="mt-35">
                                        <?= $form->field($model, 'name')->input('', ['class' => 'global-form__input', 'placeholder' => 'Введите имя']) ?>
                                    </p>

                                    <p class="mt-35">

                                        <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                                            'mask' => '+7 999 999 9999',
                                            'options' => [
                                                'class' => 'global-form__input',
                                                'placeholder' => 'Введите телефон'
                                            ]
                                        ]) ?>
                                    </p>

                                </div>

                                <div class="col-lg-6 col-lg-offset-1">

                                    <div class="mt-35">

                                        <div class="revievs__textarea">

                                            <?= $form->field($model, 'comment')->textarea([
                                                'rows' => '6',
                                                'class' => 'global-form__input', 'placeholder' => 'Введите комментарий',
                                            ]) ?>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row mt-35">

                                <div class="col-lg-8">
                                    <div class="filter-sidebar-catalog__box_ul global-form">

                                            <span for="global-form__input_el1"><span
                                                    class="shadow-checkbox mr-15"></span>
                                                <input type="checkbox" id="global-form__input_el1"
                                                       class="global-form__checkbox mt-35">
                                                <div>
                                                    Я соглашаюсь на передачу персональных данных согласно
                                                    <a href="https://cafelemoni.ru/politics" class="link link__a">политике конфиденциальности</a>
                                                </div>
                                            </span>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="revievs__wrapp-btn">

                                        <div>
                                            <?= $form->field($model, 'file')->fileInput(['class' => 'file-opacity'])->label('') ?>
                                            <a href="#!" class="link link__a">Добавить картинку</a>
                                        </div>

                                        <input type="submit"
                                               class="button button__rectangle button__rectangle_submit mt-15"
                                               value="Отправить">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $form = ActiveForm::end(); ?>

                    <?php Pjax::end(); ?>

                </div>

                <!-- Вывод отзывов-->
                <div class="row mt-45">

                    <?php if (!empty($review)): ?>

                        <?php foreach ($review as $key => $value): ?>

                            <div class="col-lg-10 col-lg-offset-1 dai-lg-c mt-60">

                                <div class="col-lg-8">
                                    <div class="revievs__box">
                                        <div class="revievs__box_img pb-35 mr-30">
                                            <?= Html::img('./img/icons/Ava.svg', ['alt' => 'Avatar']); ?>
                                        </div>

                                        <div class="revievs__box_desc">
                                            <h4 class="title title__h4 mb-35">
                                                <?= $value->name; ?>
                                            </h4>

                                            <div class="mt-15">
                                                <p class="desc desc__sm">
                                                    <?= $value->comment; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php if($value->review_img): ?>

                                    <div class="col-lg-4">
                                        <div class="mt-45 mb-45">
                                            <a href="<?= $value->review_img; ?>" class="light-box reviews__bg"
                                               style="background: url(<?= $value->review_img; ?>) no-repeat;"></a>
                                        </div>
                                    </div>

                                <?php else: ?>


                                <?php endif; ?>

                            </div>

                        <?php endforeach; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="modal-review" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close opac__07" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">

                <div class="mb-35">
                    <h2 class="title title__h3">
                        <p style="color: #8F5541">Спасибо за ваш отзыв!</p>
                    </h2>
                </div>

                <div class="flex-justify-center pb-35">
                    <p class="desc desc__md opac__07">
                        Он будет опубликован на сайте в ближайшее время.
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>