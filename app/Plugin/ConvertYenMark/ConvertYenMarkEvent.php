<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
* http://www.lockon.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\ConvertYenMark;

use Eccube\Application;
use Eccube\Common\Constant;
use Eccube\Entity\CartItem;
use Eccube\Entity\Category;
use Eccube\Entity\Order;
use Eccube\Entity\OrderDetail;
use Eccube\Entity\Product;
use Eccube\Entity\ProductClass;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Eccube\Service\CartService;
use Eccube\Util\Str;
use Plugin\ContactMailConfig\Entity\ContactMailConfig;
use Plugin\ExcludeTax\Service\TwigService;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\DomCrawler\Crawler;

class ConvertYenMarkEvent
{
    /**
     * @var \Eccube\Application
     */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }


	public function onCartIndexRender(TemplateEvent $event)
	{
		$service = $this->app['plugin.convert_yen_mark.service.twig'];
		$service->initWithTemplateEvent($event);
		$search = '/[￥\¥\\\\]\s*\{\{([^\}]+)\|number_format\s*\}\}/u';
		$replace = '{{ $1|price }}';
		$service->preg_replace($search, $replace);
		$event->setSource($service->getSource());
	}

	public function onProductDetailRender(TemplateEvent $event)
	{
		$service = $this->app['plugin.convert_yen_mark.service.twig'];
		$service->initWithTemplateEvent($event);
		$snipet = $this->app['twig']->getLoader()->getSource('ConvertYenMark/Resource/template/default/insert_js.twig');
		$service->prependToBlock('javascript', $snipet);
		$event->setSource($service->getSource());
	}
}
