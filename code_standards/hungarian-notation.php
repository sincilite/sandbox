<?php

function buyStuff($aProducts) {

    $fBankBalance = 100.00;

    $oBasket = new Namespace\Basket();

    if (!empty($aProducts)) {

        foreach ($aProducts as $item) {

            if ($fBankBalance >= $item['price']) {
                $oBasket->add($item['name']);
                $fBankBalance = $fBankBalance - $item['price'];
            }

        }

    }

    return $oBasket;

}

$aProducts = [
    [
        'name' => 'Football Boots',
        'price' => 75.00,
    ],
    [
        'name' => 'Shin Pads',
        'price' => 20.00,
    ],
    [
        'name' => 'Under Armour',
        'price' => 50.00,
    ],
];

buyStuff($aProducts);
