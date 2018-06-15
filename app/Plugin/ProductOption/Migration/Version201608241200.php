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

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version201608241200 extends AbstractMigration
{

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->createIndex($schema, 'plg_productoption_dtb_product_option', array('product_id'), 'plg_productoption_dtb_product_option_product_i');
        $this->createIndex($schema, 'plg_productoption_dtb_optioncategory', array('option_id'), 'plg_productoption_dtb_optioncategory_option_id');
        $this->createIndex($schema, 'plg_productoption_dtb_order_detail', array('order_detail_id'), 'plg_productoption_dtb_order_detail_order_detail_id');
        $this->createIndex($schema, 'plg_productoption_dtb_order_detail', array('order_option_id'), 'plg_productoption_dtb_order_detail_order_option_id');
        $this->createIndex($schema, 'plg_productoption_dtb_shipment_item', array('item_id'), 'plg_productoption_dtb_shipment_item_item_id');
        $this->createIndex($schema, 'plg_productoption_dtb_shipment_item', array('order_option_id'), 'plg_productoption_dtb_shipment_item_order_option_id');
        $this->createIndex($schema, 'plg_productoption_dtb_order_option_item', array('order_option_id'), 'plg_productoption_dtb_order_option_item_order_option_id');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->dropIndex($schema, 'plg_productoption_dtb_product_option', 'plg_productoption_dtb_product_option_product_id');
        $this->dropIndex($schema, 'plg_productoption_dtb_optioncategory', 'plg_productoption_dtb_optioncategory_option_id');
        $this->dropIndex($schema, 'plg_productoption_dtb_order_detail', 'plg_productoption_dtb_order_detail_order_detail_id');
        $this->dropIndex($schema, 'plg_productoption_dtb_order_detail', 'plg_productoption_dtb_order_detail_order_option_id');
        $this->dropIndex($schema, 'plg_productoption_dtb_shipment_item', 'plg_productoption_dtb_shipment_item_item_id');
        $this->dropIndex($schema, 'plg_productoption_dtb_shipment_item', 'plg_productoption_dtb_shipment_item_order_option_id');
        $this->dropIndex($schema, 'plg_productoption_dtb_order_option_item', 'plg_productoption_dtb_order_option_item_order_option_id');
    }

    protected function createIndex(Schema $schema, $tableName, array $columns, $indexName, array $length = array())
    {
        if (!$schema->hasTable($tableName)) {
            return false;
        }

        $table = $schema->getTable($tableName);
        if ($table->hasIndex($indexName)) {
            $this->dropIndex($schema, $tableName, $indexName);
        }
        if (!$table->hasIndex($indexName)) {
            if ($this->connection->getDatabasePlatform()->getName() == "mysql" && !empty($length)) {
                $cols = array();
                foreach ($length as $column => $len) {
                    $cols[] = sprintf('%s(%d)', $column, $len);
                }
                $this->addSql('CREATE INDEX '.$indexName.' ON '.$tableName.'('.implode(', ', $cols).');');
            } else {
                $table->addIndex($columns, $indexName);
            }
        }
        return true;
    }

    protected function dropIndex(Schema $schema, $tableName, $indexName)
    {
        if (!$schema->hasTable($tableName)) {
            return false;
        }
        $table = $schema->getTable($tableName);
        if ($table->hasIndex($indexName)) {
            $table->dropIndex($indexName);
            return true;
        }
        return false;
    }
}