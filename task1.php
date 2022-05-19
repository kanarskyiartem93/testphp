<?php
function insurance($things, $coastInsurance)
{
    foreach ($things as $key => $thing) {
        if (($coastInsurance - $thing) >= 0) {
            $coastInsurance -= $thing;
            unset($things[$key]);
        }
    }
    if (empty($things)) {
        echo 'Ваша страхова покриє все' . '<br>';
    } else {
        echo 'Ваша страхова покриє все, крім: ' . '<br>';
        foreach ($things as $key => $thing) {
            echo $key . '<br>';
        }
    }

}

insurance(['bag' => 200, 'coat' => 200, 'boots' => 1, 'scarf'=> 55], 400);
