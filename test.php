<?php

require __DIR__ . '/autoload.php';

function buy(\App\Models\HasPrice $item)
{
    var_dump($item);
}

$item = new \App\Models\GiftCard();
buy($item);

