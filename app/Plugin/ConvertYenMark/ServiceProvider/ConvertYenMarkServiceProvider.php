<?php

/*
 * This file is part of the ConvertYenMark
 *
 * Copyright (C) 2017 ConvertYenMark
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ConvertYenMark\ServiceProvider;

use Eccube\Application;
use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossedHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Plugin\ConvertYenMark\Form\Type\ConvertYenMarkConfigType;
use Plugin\ConvertYenMark\Service\TwigService;
use Plugin\ConvertYenMark\Twig\Extension\EccubeExtension;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;
use Symfony\Component\Yaml\Yaml;

class ConvertYenMarkServiceProvider implements ServiceProviderInterface
{

    public function register(BaseApplication $app)
    {

        $app['twig'] = $app->share($app->extend('twig', function(\Twig_Environment $twig, \Silex\Application $app) {
            $twig->addExtension(new EccubeExtension($app));
            return $twig;
        }));

        //Service
        $app['plugin.convert_yen_mark.service.twig'] = $app->share(function () use ($app) {
            return new TwigService($app);
        });
    }

    public function boot(BaseApplication $app)
    {
    }
}
