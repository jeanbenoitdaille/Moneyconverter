<?php
    define('DOLLAR_RATE', 1.08);
    define('YEN_RATE', 120.34);
    define('BITCOIN_RATE', 0.00016);
    $eurosPrice = 3.12;
    $dollarPrice = $eurosPrice * DOLLAR_RATE;
    $yenPrice = $eurosPrice * YEN_RATE;
    $bitcoinPrice = $eurosPrice * BITCOIN_RATE;
    echo $eurosPrice.' euros = '.$dollarPrice.' dollars, '.$yenPrice.' yens et '.$bitcoinPrice.' bitcoins.';
