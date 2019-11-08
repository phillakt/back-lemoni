<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

//    debug($model);

//    debug($filter);die;

?>


<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#!" class="breadcrumbs-line__active">Главная</a><span> - Candie-bar</span>
            </div>
        </div>
    </div>
</section>


<!-- filter-sidebar-catalog start -->
<section class="filter-sidebar-catalog">
    <div class="container">
        <div class="row">

            <!-- Sidebar Filter -->
            <div class="col-lg-3 mt-35">

                <?php $form = ActiveForm::begin([
                    'options' => ['class' => 'cake-goods'],
                ]); ?>


                <h4 class="title title__h4">Фильтр</h4>

                <div class="filter-sidebar-catalog__box mt-60">

                    <!-- filter kg -->
                    <div class="filter-sidebar-catalog__box">

                        <h5 class="title title__h5 mt-35">
                            Цена за килограм
                        </h5>

                        <?= $form->field($filter, 'price_for_kg')->textInput(['placeholder' => 'Максимум 6000 руб/кг', 'class' => 'global-form__input mt-35'])->label(false) ?>

                        <!--                        <input type="text" class="global-form__input mt-35" placeholder="Максимум 6000 руб/кг">-->

                    </div>


                    <!-- filter type-goods -->
                    <div class="filter-sidebar-catalog__box mt-35">

                        <h5 class="title title__h5 mt-35">
                            Тип продукта
                        </h5>

                        <div class="filter-sidebar-catalog__box_ul global-form mt-35">

                            <? //= $form->field($filter, 'type[]')->checkboxList($filter['type'], ['class' => 'filter-sidebar-catalog__box_ul global-form'])->label('Тип продукта'); ?>

                            <span for="global-form__input_el2"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el2"
                                           class="global-form__checkbox mt-35" value="Классические пирожные">
                                    Классические пирожные
                                </span>

                                <span for="global-form__input_el3"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el3"
                                           class="global-form__checkbox mt-35" value="Мусовые пирожные">
                                    Мусовые пирожные
                                </span>

                                <span for="global-form__input_el4"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el4"
                                           class="global-form__checkbox mt-35" value="Конфеты">
                                    Конфеты
                                </span>

                                <span for="global-form__input_el5"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el5"
                                           class="global-form__checkbox mt-35" value="Пряники">
                                    Пряники
                                </span>

                                <span for="global-form__input_el6"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Щербет">
                                    Щербет
                                </span>

                                <span for="global-form__input_el6"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Зефир">
                                    Зефир
                                </span>

                                <span for="global-form__input_el6"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Фруктовый букет">
                                    Фруктовый букет
                                </span>


                                <span for="global-form__input_el6"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Куличи">
                                    Куличи
                                </span>

                                <span for="global-form__input_el6"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Кейкпопсы">
                                    Кейкпопсы
                                </span>

                                <span for="global-form__input_el6"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Укусики">
                                    Укусики
                                </span>

                                <span for="global-form__input_el6"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Постное">
                                    Постное
                                </span>

                                <span for="global-form__input_el6"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Штрудель">
                                    Штрудель
                                </span>

                                <span for="global-form__input_el6"><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Кексы на фруктовом пюре">
                                    Кексы на фруктовом пюре
                                </span>

                        </div>

                    </div>


                    <!-- filter leavel -->
                    <div class="filter-sidebar-catalog__box mt-35">

                        <h5 class="title title__h5">Колличество уровней</h5>

                        <div class="global-form__select mt-35">

                            <?= $form->field($filter, 'count_level')->dropDownList($filter['count_level'], ['class' => 'global-form__input'])->label(false) ?>

                            <!--                            <select name="" id="">-->
                            <!--                                <option value="1">test</option>-->
                            <!--                            </select>-->
                        </div>

                    </div>


                    <!-- filter subjects -->
                    <div class="filter-sidebar-catalog__box mt-35">

                        <h5 class="title title__h5">Тематическое оформление</h5>

                        <div class="global-form__select mt-35">


                            <?= $form->field($filter, 'subjects')->dropDownList($filter['subjects'], ['class' => 'global-form__input'])->label(false) ?>

                            <!--                            <select name="" id="">-->
                            <!--                                <option value="1">test</option>-->
                            <!--                            </select>-->
                        </div>
                    </div>

                    <?= Html::submitButton('Применить', ['class' => 'button button__rectangle mt-60']) ?>
                </div>

                <?php $form = ActiveForm::end(); ?>

            </div>


            <!-- Goods-cards -->
            <div class="col-lg-8 col-lg-offset-1 title__line_r-53">
                <h2 class="title title__h1 opac__07">Каталог продукции</h2>


                <!-- filter type-goods -->
                <div class="filter-sidebar-catalog__box-compilation mt-60">

                    <div class="row">
                        <div class="col-lg-3">
                            <h5 class="title title__h5">
                                Готовые подборки
                            </h5>
                        </div>

                        <div class="col-lg-9">

                            <!-- filter-sidebar-catalog__box-compilation -->

                            <div class="filter-sidebar-catalog__box-compilation_ul global-form">

                                <?php foreach ($filter['tag'] as $key => $value): ?>

                                    <a href="/cake-goods?compilation=<?= $key; ?>" class="link link__a mr-15 mb-15">
                                        <!--<input type="radio"-->
                                        <!--       name="filter-compilation"-->
                                        <!--       class="global-form__checkbox mt-35">-->
                                        <!--8 марта-->
                                        <?= $value; ?>
                                    </a>

                                <?php endforeach; ?>

                            </div>

                            <!-- filter-sidebar-catalog__box-compilation end -->

                        </div>
                    </div>


                </div>


                <div class="row mt-60">


                    <!-- card-filter -->

                    <?php

                    if (empty($data_cake)): ?>

                        <?php foreach ($model as $key => $value): ?>

                            <!-- cake-card -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                                <div class="glob-module-card mb-35 shadow-card pb-35">

                                    <a href="#!" class="card-img card-img__bg"
                                       style="background: url(../<?= $value['lm_img_one']; ?>)"></a>

                                    <div class="mt-15 pl-15">
                                        <a href="/card/<?= $value['lm_alter_card']; ?>?id=<?= $value['id']; ?>"
                                           class="link link__a mt-15">
                                            <?= $value['lm_title']; ?>
                                        </a>
                                    </div>

                                    <div class="mt-15 mb-30">
                                        <span class="card-price pl-15 opac__07"><?= $value['lm_price_for_kg']; ?>
                                            руб/шт</span>
                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <?php foreach ($data_cake as $key => $value): ?>

                            <!-- cake-card -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                                <div class="glob-module-card mb-35 shadow-card pb-35">

                                    <a href="#!" class="card-img card-img__bg"
                                       style="background: url(../<?= $value['lm_img_one']; ?>)"></a>

                                    <div class="mt-15 pl-15">
                                        <a href="/card/<?php $value['lm_alter_card']; ?>?id=<?php $value['id']; ?>"
                                           class="link link__a mt-15">
                                            <?= $value['lm_title']; ?>
                                        </a>
                                    </div>

                                    <div class="mt-15 mb-30">
                                        <span class="card-price pl-15 opac__07"><?= $value['lm_price_for_kg']; ?>
                                            руб/шт</span>
                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php endif; ?>


                    <!--                    <div class="col-lg-4">-->
                    <!---->
                    <!--                        <div class="glob-module-card mb-35 shadow-card pb-35">-->
                    <!---->
                    <!--                            <a href="#!" class="card-img card-img__bg"-->
                    <!--                               style="background: url(../img/cake/catalog-cake/cake-goods__1.png);"></a>-->
                    <!---->
                    <!--                            <div class="mt-15 pl-15">-->
                    <!--                                <a href="#!" class="link link__a mt-15">Трайфлы</a>-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <div class="mt-15 mb-30">-->
                    <!--                                <span class="card-price pl-15 opac__07">1300 руб/кг</span>-->
                    <!--                            </div>-->
                    <!---->
                    <!--                        </div>-->
                    <!---->
                    <!--                    </div>-->


                </div>
            </div>

        </div>
    </div>
</section>