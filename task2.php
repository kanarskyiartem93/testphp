<?php

$doorHeight = $_POST['door_height'];
$doorWidth = $_POST['door_width'];
$boxHeight = $_POST['box_height'];
$boxWidth = $_POST['box_width'];
$boxLength = $_POST['box_length'];

$boxSize = [$boxHeight, $boxLength, $boxWidth];
$doorSize = [$doorHeight, $doorWidth];

foreach ($boxSize as $item) {
    if (!empty($doorSize)) {
        foreach ($doorSize as $key => $value) {
            if ($value > $item) {
                unset($doorSize[$key]);
                break;
            }
        }
    }
}
if (empty($doorSize)) {
    echo 'Коробка проходить в двері';
} else {
    echo 'Коробка не проходить в двері';
}