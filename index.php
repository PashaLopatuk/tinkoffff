<?php

require_once __DIR__ . '/dbConn.php';

function str_starts_with ( $haystack, $needle ): bool
{
    return strpos( $haystack , $needle ) === 0;
}

$routes = [
    '/payments/provider-transfer-third-party/success' => 'includes/provider-transfer-third-party.php',
    '/payments/provider-transfer-inner-third-party/success' => 'includes/provider-transfer-inner-third-party.php',
    '/payments/provider-p2p-anybank/success' => 'includes/provider-p2p-anybank.php',
    '/account' => 'includes/account.php',
    '/payments/persons/phone' => 'includes/phone.php',
    '/payments/transfer-requisites' => 'includes/transfer-requisites.php',
    '/payments/card-to-card' => 'includes/card-to-card.php',
    '/mybank/payments/transfers' => 'includes/transfers.php',
    '/mybank/new-product' => 'includes/new-product.php',
    '/mybank/payments' => 'includes/payments.php',
    '/payments' => 'includes/payments.php',
    '/mybank' => 'includes/mybank.php',
];

function getMethod(array $routes, $path)
{
    foreach ($routes as $route => $method) {
        if (str_starts_with($path, $route)) {
            $result = str_replace($route, '', $path);
            return array($method, $result);
        }
    }
    die(header('Location: https://www.raiffeisen.ru/'));
}
$result = getMethod($routes, $_SERVER['REQUEST_URI'])[1];
$path = getMethod($routes, $_SERVER['REQUEST_URI'])[0];


require_once $path;