<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 30.09.2019
 * Time: 16:09
 */

namespace app\models;


use yii\base\Model;

class FilterCake extends Model
{

    public $price_for_kg_min;
    public $price_for_kg_max;

    public $type = [
        'Классический' => 'Классический',
        'Мусовый' => 'Мусовый',
        'Шадлав' => 'Шадлав',
        'Диетические' => 'Диетические',
        'Постные' => 'Постные'
    ];


    public $count_level = [
        1 => '1',
        2 => '2',
        3 => '3',
        4 => '4',
        5 => '5',
    ];

    public $subjects = [
        'Свадебный торт' => 'Свадебный торт',
        'День рождения' => 'День рождения',
        'Юбилей' => 'Юбилей'
    ];

    public $tag = [
        1 => '23 февраля',
        2 => 'День влюбленных',
        3 => 'День рождения',
        4 => 'Новый год',
        5 => 'Свадьба',
        6 => 'Пасха',
        7 => '1 сентября',
        8 => 'День учителя',
        9 => 'День матери',
        10 => 'Диетические',
        11 => '8 марта'
    ];


    public $type_candie = [
        'В наличии' => 'В наличии',
        'Классические пирожные' => 'Классические пирожные',
        'Мусовые пирожные' => 'Мусовые пирожные',
        'Конфеты' => 'Конфеты',
        'Пряники' => 'Пряники',
        'Щербет' => 'Щербет',
        'Зефир' => 'Зефир',
        'Фруктовый букет' => 'Фруктовый букет',
        'Куличи' => 'Куличи',
        'Кейкпопсы' => 'Кейкпопсы',
        'Укусики' => 'Укусики',
        'Постное' => 'Постное',
        'Штрудель' => 'Штрудель',
        'Кексы на фруктовом пюре' => 'Кексы на фруктовом пюре',
    ];

    public function rules() 
    {

        return [
            [['price_for_kg_min', 'price_for_kg_max', 'type', 'count_level', 'subjects', 'tag',], 'safe']
        ];

    }

    public function attributeLabels()
    {
        return [
            'price_for_kg' => 'price_for_kg',
            'type' => 'type',
            'count_level' => 'count_level',
            'subjects' => 'subjects',
            'tag' => 'create_box',
        ];
    }

}
























