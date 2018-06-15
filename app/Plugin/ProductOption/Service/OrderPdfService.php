<?php
/*
* Plugin Name : ProductOption
*
* Copyright (C) 2015 BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\ProductOption\Service;

use Eccube\Application;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\Help;
use Eccube\Entity\Order;
use Eccube\Entity\OrderDetail;

/**
 * Class OrderPdfService.
 * Do export pdf function.
 */
class OrderPdfService extends \Plugin\OrderPdf\Service\OrderPdfService
{

    /**
     * 購入商品詳細情報を設定する.
     *
     * @param Order $Order
     */
    protected function renderOrderDetailData(Order $Order)
    {
        $labelCell[] = '商品名 / 商品コード / [ 規格 ] / [オプション]';
        $labelCell[] = '数量';
        $labelCell[] = '単価';
        $labelCell[] = '金額(税込)';
        $widthCell = array(110.3, 12, 21.7, 24.5);

        $arrOrder = array();
        // テーブルの微調整を行うための購入商品詳細情報をarrayに変換する

        // =========================================
        // 受注詳細情報
        // =========================================
        $i = 0;
        /* @var OrderDetail $OrderDetail */
        foreach ($Order->getOrderDetails() as $OrderDetail) {
            // class categoryの生成
            $classCategory = '';
            if ($OrderDetail->getClassCategoryName1()) {
                $classCategory .= ' [ '.$OrderDetail->getClassCategoryName1();
                if ($OrderDetail->getClassCategoryName2() == '') {
                    $classCategory .= ' ]';
                } else {
                    $classCategory .= ' * '.$OrderDetail->getClassCategoryName2().' ]';
                }
            }
            $option = '';
            $plgOrderDetail = $this->app['eccube.productoption.repository.order_detail']->findOneBy(array('order_detail_id' => $OrderDetail->getId()));
            if($plgOrderDetail){
                $options = $plgOrderDetail->getOrderOption()->getLabel();
                if(count($options) > 0){
                    $option .= '[' .implode(', ', $options) .']';
                }
            }
            // 税
            $tax = $this->app['eccube.service.tax_rule']->calcTax($OrderDetail->getPrice(), $OrderDetail->getTaxRate(), $OrderDetail->getTaxRule());
            $OrderDetail->setPriceIncTax($OrderDetail->getPrice() + $tax);

            // product
            $arrOrder[$i][0] = sprintf('%s / %s / %s / %s', $OrderDetail->getProductName(), $OrderDetail->getProductCode(), $classCategory, $option);
            // 購入数量
            $arrOrder[$i][1] = number_format($OrderDetail->getQuantity());
            // 税込金額（単価）
            $arrOrder[$i][2] = number_format($OrderDetail->getPriceIncTax()).self::MONETARY_UNIT;
            // 小計（商品毎）
            $arrOrder[$i][3] = number_format($OrderDetail->getTotalPrice()).self::MONETARY_UNIT;

            ++$i;
        }

        // =========================================
        // 小計
        // =========================================
        $arrOrder[$i][0] = '';
        $arrOrder[$i][1] = '';
        $arrOrder[$i][2] = '';
        $arrOrder[$i][3] = '';

        ++$i;
        $arrOrder[$i][0] = '';
        $arrOrder[$i][1] = '';
        $arrOrder[$i][2] = '商品合計';
        $arrOrder[$i][3] = number_format($Order->getSubtotal()).self::MONETARY_UNIT;

        ++$i;
        $arrOrder[$i][0] = '';
        $arrOrder[$i][1] = '';
        $arrOrder[$i][2] = '送料';
        $arrOrder[$i][3] = number_format($Order->getDeliveryFeeTotal()).self::MONETARY_UNIT;

        ++$i;
        $arrOrder[$i][0] = '';
        $arrOrder[$i][1] = '';
        $arrOrder[$i][2] = '手数料';
        $arrOrder[$i][3] = number_format($Order->getCharge()).self::MONETARY_UNIT;

        ++$i;
        $arrOrder[$i][0] = '';
        $arrOrder[$i][1] = '';
        $arrOrder[$i][2] = '値引き';
        $arrOrder[$i][3] = '- '.number_format($Order->getDiscount()).self::MONETARY_UNIT;

        ++$i;
        $arrOrder[$i][0] = '';
        $arrOrder[$i][1] = '';
        $arrOrder[$i][2] = '請求金額';
        $arrOrder[$i][3] = number_format($Order->getPaymentTotal()).self::MONETARY_UNIT;

        // PDFに設定する
        $this->setFancyTable($labelCell, $arrOrder, $widthCell);
    }

}
