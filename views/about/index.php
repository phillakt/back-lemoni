<?php


use app\widgets\sidebar\Sidebar;

$this->title = 'Пара слов о кондитерской «Лемони» | Белгород';
$this->registerMetaTag(['name' => 'description', 'content' => 'Готовим только из натуральных высококачественных ингредиентов. Изделия собственного производства по уникальным рецептам.']);
?>

<section class="contact mt-90">
    <div class="container">
        <div class="row flex-reverse">
            <div class="col-lg-2">

                <!-- Sidebar -->
                <?= Sidebar::widget(); ?>

            </div>

            <div class="col-lg-9 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">О нас</h1>

                <div class="row mt-60">

                    <div class="col-lg-6">
                        <h3 class="title title__h3">О кондитерской</h3>

                        <div class="mt-35">
                            <p>
                                Мы — Светлана и Анатолий, авторы проекта кондитерской
                                «Лемони». Наша миссия: удивить вас и гостей качественно
                                сделанными и красиво украшенными десертами.
                            </p>

                            <p>
                                Дни Рождения, свадьбы, корпоративы и семейные вечера
                                редко обходятся без сладкого. Торт из ближайшего магазина
                                вряд ли запомнится и точно не вызовет приятных эмоций,
                                которых порой так не хватает.
                            </p>

                            <p>
                                Мы стараемся индивидуально подходить к каждому
                                клиенту, ведь вкусовые предпочтения у всех разные.
                                У нас есть безглютеновые и безлактозные линейки
                                продукции, постные десерты, товары для диабетиков
                                и людей, придерживающихся правильного питания.
                                Если у вас аллергия на какой-либо из продуктов,
                                сообщите нам об этом.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact__customer mt-35">
                            <img src="./img/about/customer.png" alt="" class="img-responsive">
                        </div>
                    </div>

                    
                    <div class="col-lg-12 mb-35">

                        <div class="flex-justify-center mt-35">
                            <h2 class="title title__h2 contact-italic contact-title">Почему вы выберете «Лемони»?</h2>
                        </div>

                        <div class="row mt-60">
                            <div class="col-lg-5">
                                <p class="desc desc__md contact-italic contact-italic-r">
                                    Готовим только из высококачественных <br>
                                    натуральных продуктов
                                </p>
                            </div>
                            <div class="col-lg-5 col-lg-offset-2">
                                <p class="desc desc__md contact-italic">
                                    Выбираем шоколад проверенных марок:
                                    Luker, Cacao Barry, Callebaut
                                </p>
                            </div>

                            <div class="col-lg-12 flex-justify-center mt-15">
                                <div class="mb-15">
                                    <img src="./img/about/infograph.png" alt="infograph" class="img-responsive">
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <p class="desc desc__md contact-italic contact-italic-r">
                                    Не используем консерванты и сухие смеси
                                </p>
                            </div>
                            <div class="col-lg-5 col-lg-offset-2">
                                <p class="desc desc__md contact-italic">
                                    Собственное производство и ручная работа
                                    делают десерты уникальными
                                    и такими вкусными.
                                </p>
                            </div>
                        </div>

                    </div>







                    <div class="col-lg-12">
                        <div class="mt-35">
                            <h3 class="title title__h3 contact-title">О нашей продукции</h3>
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="mt-35">
                            <p> У нас вы можете заказать:</p>

                            <p>
                                • эксклюзивные муссовые торты с минимальным
                                количеством коржей и нежной начинкой
                            </p>

                            <p>
                                • классические торты из детства:
                                медовик, наполеон, черепаха
                            </p>

                            <p>
                                • шадлавы — несладкие закусочные торты
                            </p>

                            <p>
                                • имбирные пряники с индивидуальным
                                рисунком по глазури
                            </p>

                            <p>
                                • фруктовые букеты на любой вкус.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="mt-35">
                            В кафе представлен большой выбор пирожных,
                            зефира, меренги, конфет и других сладостей собственного
                            производства, которыми можно побаловать себя и близких.
                            Мы не используем искусственные красители, загустители,
                            подсластители, зато вкладываем любовь в каждое изделие,
                            чтобы оно приносило радость вам и вашим близким.
                            Вы всегда можете выбрать уже имеющийся дизайн десерта
                            или обсудить желаемый. Правильный выбор десерта —
                            залог хорошего настроения и успешного мероприятия!
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


