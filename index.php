<?php

include_once __DIR__ . '/Traits/Counter.php';
include_once __DIR__ . '/Traits/Delete.php';
include_once __DIR__ . '/User.php';
include_once __DIR__ . '/Box.php';
include_once __DIR__ . '/CreditCard.php';
include_once __DIR__ . '/Food.php';
include_once __DIR__ . '/Games.php';
include_once __DIR__ . '/Pesticide.php';
include_once __DIR__ . '/Products.php';
include_once __DIR__ . '/db.php';

$creditCard1 = new CreditCard(
    $user1['cc_num'],
    $user1['cc_cvc'],
    $user1['cc_exp'],
);

$creditCard2 = new CreditCard(
    $user2['cc_num'],
    $user2['cc_cvc'],
    $user2['cc_exp'],
);

$creditCard3 = new CreditCard(
    $user3['cc_num'],
    $user3['cc_cvc'],
    $user3['cc_exp'],
);

$user1 = new User(
    $user1['name'],
    $creditCard1,
);

$user2 = new User(
    $user2['name'],
    $creditCard2,
);

$user3 = new User(
    $user3['name'],
    $creditCard3,
);

$product1 = new Box(
    $product1['dimension'],
    $product1['color'],
    $product1['name'],
    $product1['price'],
    $product1['quantity'],
);

$product2 = new Box(
    $product2['dimension'],
    $product2['color'],
    $product2['name'],
    $product2['price'],
    $product2['quantity'],
);

$product3 = new Box(
    $product3['dimension'],
    $product3['color'],
    $product3['name'],
    $product3['price'],
    $product3['quantity'],
);

$product4 = new Food(
    $product4['animal'],
    $product4['expiry'],
    $product4['name'],
    $product4['price'],
    $product4['quantity'],
);

$product5 = new Food(
    $product5['animal'],
    $product5['expiry'],
    $product5['name'],
    $product5['price'],
    $product5['quantity'],
);

$product6 = new Games(
    $product6['animal'],
    $product6['color'],
    $product6['name'],
    $product6['price'],
    $product6['quantity'],
);

$product7 = new Games(
    $product7['animal'],
    $product7['color'],
    $product7['name'],
    $product7['price'],
    $product7['quantity'],
);

$product8 = new Pesticide(
    $product8['animal'],
    $product8['weight'],
    $product8['type'],
    $product8['name'],
    $product8['price'],
    $product8['quantity'],
);

$product9 = new Pesticide(
    $product9['animal'],
    $product9['weight'],
    $product9['type'],
    $product9['name'],
    $product9['price'],
    $product9['quantity'],
);

$arrCreditCard = array($creditCard1, $creditCard2, $creditCard3);
$arrUsers = array($user1, $user2, $user3);
$arrProducts = array($product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8, $product9);

$product5->counter();
$user1->deleteCard();

var_dump($arrUsers);

