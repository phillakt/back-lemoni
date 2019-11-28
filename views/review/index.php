<?php


use app\widgets\sidebar\Sidebar;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;


//debug($model);

?>


<section class="revievs mt-90">
    <div class="container">
        <div class="row flex-reverse">
            <div class="col-lg-2">

                <!-- Sidebar -->
                <?=  Sidebar::widget(); ?>

            </div>

            <div class="col-lg-9 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">Оставьте отзыв</h1>

                <div class="row mt-60">

                    <?php Pjax::begin(); ?>

                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'id' => 'revievs-id',
                            "data-pjax" => "0"
                        ]
                    ]); ?>

                    <div class="col-lg-12">
                        <div class="delivery-box global-form">

                            <div class="row">

                                <div class="col-lg-5">

                                    <p class="mt-35">
                                        <!-- <label>Ваше имя</label> -->
<!--                                        <input type="text" class="global-form__input" placeholder="Ваше имя">-->

                                        <?= $form->field($model, 'name')->input('', ['class' => 'global-form__input', 'placeholder' => 'Введите имя'])?>
                                    </p>

                                    <p class="mt-35">
                                        <!-- <label>Контактный телефон</label> -->
<!--                                        <input type="text" class="global-form__input" placeholder="Ваш Телефон">-->

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

                                    <p class="mt-35">
                                        <!-- <label>Комментарий</label> -->
                                    <div class="revievs__textarea">
<!--                                                <textarea type="textarea" rows="7" class="global-form__input"-->
<!--                                                          placeholder="Оставьте свой комментарий"></textarea>-->

                                        <?= $form->field($model, 'comment')->textarea([
                                            'rows' => '6',
                                            'class' => 'global-form__input', 'placeholder' => 'Введите комментарий',
                                        ]) ?>

                                    </div>

                                    </p>

                                </div>

                            </div>

                            <div class="row mt-35">

                                <div class="col-lg-8">
                                    <div class="filter-sidebar-catalog__box_ul global-form ">

                                            <span for="global-form__input_el1"><span
                                                    class="shadow-checkbox mr-15"></span>
                                                <input type="checkbox" id="global-form__input_el1"
                                                       class="global-form__checkbox mt-35">
                                                <div>
                                                    Я соглашаюсь на передачу персональных данных согласно
                                                    <a href="#!" class="">политике конфиденциальности</a>
<!--                                                    и <a href="#!" class="">пользовательском у соглашению</a>-->
                                                </div>
                                            </span>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="revievs__wrapp-btn">

                                        <div>
                                            <?= $form->field($model, 'file')->fileInput(['class' => 'file-opacity'])->label('') ?>

                                            <a href="#!" class="link link__a">Добавить файлы</a>
                                        </div>

                                        <input type="submit" class="button button__rectangle mt-15"
                                               value="Отправить">
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                    <?php $form = ActiveForm::end(); ?>

                    <?php Pjax::end(); ?>

                </div>

                <!-- Доделать слайдер  и вывод отзывов-->
                <div class="row mt-45">

<!--                    <div class="col-lg-6">-->
<!---->
<!--                        <div class="mt-45">-->
<!--                            <div class="revievs__box">-->
<!--                                <div class="revievs__box_img mr-15">-->
<!--                                    <img src="./img/icons/Ava.svg" alt="ava">-->
<!--                                </div>-->
<!---->
<!--                                <div class="revievs__box_desc">-->
<!--                                    <h4 class="title title__h4">Светлана</h4>-->
<!---->
<!--                                    <div class="mt-15">-->
<!--                                        <p class="desc desc__sm">-->
<!--                                            Торт очень вкусный! Доставили быстро-->
<!--                                            и оперативно (это радует)-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="mt-45">-->
<!--                            <div class="revievs__box">-->
<!--                                <div class="revievs__box_img mr-15">-->
<!--                                    <img src="./img/icons/Ava.svg" alt="ava">-->
<!--                                </div>-->
<!---->
<!--                                <div class="revievs__box_desc">-->
<!--                                    <h4 class="title title__h4">Светлана</h4>-->
<!---->
<!--                                    <div class="mt-15">-->
<!--                                        <p class="desc desc__sm">-->
<!--                                            Торт очень вкусный! Доставили быстро-->
<!--                                            и оперативно (это радует)-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="mt-90">-->
<!--                            <a href="#!" class="button button__rectangle">Загрузить еще</a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->

                    <!-- <div class="col-lg-6">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">Slide 1</div>
                                <div class="swiper-slide">Slide 2</div>
                                <div class="swiper-slide">Slide 3</div>
                                <div class="swiper-slide">Slide 4</div>
                                <div class="swiper-slide">Slide 5</div>
                                <div class="swiper-slide">Slide 6</div>
                                <div class="swiper-slide">Slide 7</div>
                                <div class="swiper-slide">Slide 8</div>
                                <div class="swiper-slide">Slide 9</div>
                                <div class="swiper-slide">Slide 10</div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div> -->

                </div>

            </div>
        </div>
    </div>
</section>
