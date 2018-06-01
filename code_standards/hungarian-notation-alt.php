<?php

/**
 * Method to let customers buy stuff
 *
 * @param array $products
 * @param int $bankBalance
 *
 * @return Namespace\Basket $basket
 */
function buyStuff(array $products, int $bankBalance): Namespace\Basket {

    $basket = new Namespace\Basket();

    if (!empty($products)) {

        foreach ($products as $item) {

            if ($bankBalance >= $item['price']) {
                $basket->add($item['name']);
                $bankBalance = $fBankBalance - $item['price'];
            }

        }

    }

    return $basket;

}

$products = [
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

$bankBalance = 100.00;

buyStuff($products);
