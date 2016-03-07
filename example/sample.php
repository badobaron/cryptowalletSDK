<?php

    use CryptoWallet\CryptoWallet;
    use CryptoWallet\Methods\Payments\CardGateway;

    require __DIR__ . '/vendor/autoload.php';

    $apiKey = '090909';

    try {
        $cryptowallet = new CryptoWallet($apiKey);
    } catch (\Exception $e) {
        echo($e->getMessage());die;
        //non fatal so do something or die
    }

    try {
        $cryptowallet = new CardGateway($cryptowallet);
    } catch (\Exception $e) {
        echo($e->getMessage());die;
        //non fatal so do something or die
    }

    d($cryptowallet);