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

use Eccube\Application;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version201711011200 extends AbstractMigration
{

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $app = Application::getInstance();

        if($schema->hasTable('plg_productoption_dtb_order_option_item')){
            $targetTable = $schema->getTable('plg_productoption_dtb_order_option_item');
            if ($this->connection->getDatabasePlatform()->getName() == "mysql"){
                if($targetTable->hasPrimaryKey()){
                    $targetTable->dropPrimaryKey();
                }
                if(!$targetTable->hasColumn('op_item_id')){
                    $targetTable->addColumn('op_item_id', 'integer', array());
                    $targetTable->setPrimaryKey(array('op_item_id'));
                    $targetColumn = $targetTable->getColumn('op_item_id');
                    $targetColumn->setOptions(array('autoincrement' => true));
                }
            }else{
                if(!$targetTable->hasColumn('op_item_id')){
                    $targetTable->addColumn('op_item_id', 'integer', array(
                        'autoincrement' => true,
                        ));
                }
            }
        }

        if($schema->hasTable('plg_productoption_dtb_option')){
            $targetTable = $schema->getTable('plg_productoption_dtb_option');
            if(!$targetTable->hasColumn('require_min')){
                $targetTable->addColumn('require_min', 'integer', array(
                    'notnull' => false,
                    ));
            }
            if(!$targetTable->hasColumn('require_max')){
                $targetTable->addColumn('require_max', 'integer', array(
                    'notnull' => false,
                    ));
            }
        }
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {

    }
}