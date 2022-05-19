<?php

function shop(array $items)
{
    $discountPrice = [];
    foreach ($items as $key => $item) {
        if ((($item + 0.01) / round($item)) == 1) {
            $discountPrice[] = $item;
            unset($items[$key]);
        }
    }

    if (count($discountPrice) > 3) {
        echo max($discountPrice) + array_sum($items);
    } else {
        echo array_sum($discountPrice) + array_sum($items);
    }
}

shop([20.99, 30.99, 40.99, 50, 60]);