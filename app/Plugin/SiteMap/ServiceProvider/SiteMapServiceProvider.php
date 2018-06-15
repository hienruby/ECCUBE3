<?php
/*
* Plugin Name : SiteMap
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\SiteMap\ServiceProvider;

use Eccube\Application;
use Eccube\Common\Constant;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class SiteMapServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {
        // Routingを追加
        $admin = $app['controllers_factory'];
        $front = $app['controllers_factory'];
        // 強制SSL
        if ($app['config']['force_ssl'] == Constant::ENABLED) {
            $admin->requireHttps();
            $front->requireHttps();
        }

        $admin->match('/sitemap',
          '\Plugin\SiteMap\Controller\Admin\ConfigController::xml'
        )->bind('admin_sitemap');

        $admin->match('/sitemap/view',
          '\Plugin\SiteMap\Controller\Admin\ConfigController::view'
        )->bind('sitemap_view');

        $admin->match('/sitemap/setting',
          '\Plugin\SiteMap\Controller\Admin\ConfigController::setting'
        )->bind('sitemap_setting');

        $admin->match('/sitemap/setting/change',
          '\Plugin\SiteMap\Controller\Admin\ConfigController::change'
        )->bind('sitemap_change');

        $front->match('/sitemap',
          '\Plugin\SiteMap\Controller\SiteMapController::xml'
        )->bind('sitemap');

        $app->mount('/'.trim($app['config']['admin_route'], '/').'/', $admin);
        $app->mount('', $front);

        // Formの定義
        $app['form.types'] = $app->share($app->extend('form.types', function ($types) use ($app) {
            $types[] = new \Plugin\SiteMap\Form\Type\ConfigType();

            return $types;
        }));

        // Repositoy
        $app['eccube.sitemap.repository.config'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('Plugin\SiteMap\Entity\Config');
        });

        // サブナビの拡張
        $app['config'] = $app->share($app->extend('config', function ($config) {
            $nav = array(
                'id' => 'admin_sitemap',
                'name' => 'サイトマップ',
                'has_child' => 'true',
                'icon' => 'cb-chart',
                'child' => array(
                    array(
                        'id' => 'admin_sitemap_view',
                        'url' => 'sitemap_view',
                        'name' => 'サイト閲覧',
                    ),
                    array(
                        'id' => 'admin_sitemap_setting',
                        'url' => 'sitemap_setting',
                        'name' => '設定',
                    )
                ),
            );

            $config['nav'][] = $nav;

            return $config;
        }));
    }

    public function boot(BaseApplication $app)
    {
    }
}
