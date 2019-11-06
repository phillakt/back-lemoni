<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:49
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\CakeGoods;
use Yii;


//Страница "Доставка"
class DeliveryController extends Controller
{
    public function actionIndex()
    {

        $elements = yii::$app->cart->elements;

        $modelCake = new CakeGoods();

        $data = '';

        foreach ($elements as $key => $value) {

//          Вытаскиваю доп данные для отправки по id из корзины
            $query = $modelCake::findOne($value->item_id);

//          debug($query);
//
            $json_decode = json_decode($value['options']);

            $data .= '<p style="margin-top: 30px;"><strong>Id товара: </strong>' . $value['item_id'] . '<p>';
            $data .= '<p><strong>Название товара: </strong>' . $query->lm_title . '<p>';
            $data .= '<p><strong>Количество: </strong>' . $value['count'] . ' шт <p>';
            $data .= '<p><strong>Сумма: </strong>' . $value['price'] . ' руб <p>';
            $data .= '<p><strong>Вес в кг: </strong>' . $json_decode->optGuests_kg . ' кг <p>';
            $data .= '<p><strong>Тип: </strong>' . $query->lm_type . ' <p>';
            $data .= '<p><strong>Описание товара: </strong>' . $query->lm_description . ' <p>';

            if ($value['options']) {

                foreach ($json_decode as $key => $value) {

                    $explode_str = explode('-', $value);

                    if (!(int)$explode_str[0]) {
                        $data .= '<p><strong>Опция: </strong>' . $explode_str[2] . ' - ' . $explode_str[1] . ' руб' . '<p>';
                    }

                }
            }

        }

        if ($data) {

//            Yii::$app->mailer->compose()
//                ->setFrom('hard-phillakt@mail.ru')
//                ->setTo('hard-phillakt@mail.ru')
//                ->setSubject('Тема сообщения')
//                ->setTextBody('Текст сообщения')
//                ->setHtmlBody('<div>' . $data . '</div>')
//                ->send();

        }


        return $this->render('index');
    }
}