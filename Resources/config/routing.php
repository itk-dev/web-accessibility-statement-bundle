<?php

use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routes) {
    $routes->add('was', '/was')
        ->controller(RedirectController::class)
        ->defaults([
            'path' => $_ENV['WEB_ACCESSIBILITY_STATEMENT_URL'] ?? '/',
            'permanent' => false,
        ])
        ->methods(['GET']);
};
