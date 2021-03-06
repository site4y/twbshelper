<?php

namespace s4y\twbshelper;

use Nette\Utils\Html;

class Glyphicon {
    const calendar = '<i class="glyphicon glyphicon-calendar"></i>';
    const edit = '<i class="glyphicon glyphicon-edit"></i>';
    const globe = '<i class="glyphicon glyphicon-globe"></i>';
    const plus = '<i class="glyphicon glyphicon-plus"></i>';
    const refresh = '<i class="glyphicon glyphicon-refresh"></i>';
    const remove = '<i class="glyphicon glyphicon-remove"></i>';
    const share = '<i class="glyphicon glyphicon-share"></i>';
    const tags = '<i class="glyphicon glyphicon-tags"></i>';


    static function icon($name) {
        return Html::el('i', ['class' => 'glyphicon glyphicon-'.$name]);
    }
}