<?php
require_once __DIR__ . '/vendor/autoload.php';

try {
    $instance = \ExponentPhpSDK\Expo::normalSetup();
    echo 'Sucesso Lucas!';
} catch (Exception $e) {
    echo 'Teste falhou!';
}
