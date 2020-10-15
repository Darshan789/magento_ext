<?php
namespace Harsh\HelloWorld\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface {

    public function install( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable( 'sample_customer' )
        )->addColumn(
            'id',
            Table::TYPE_SMALLINT,
            null,
            [ 'identity' => true, 'nullable' => false, 'primary' => true ],
            'Post ID'
        )->addColumn(
            'client_id',
            Table::TYPE_TEXT,
            255,
            [ 'nullable' => false ],
            'Client ID'
        )->addColumn(
            'merchant_id',
            Table::TYPE_TEXT,
            '2M',
            [ ],
            'Merchant ID'
        )->setComment(
            'Sample Customer Table'
        );

        $installer->getConnection()->createTable( $table );

        $installer->endSetup();
    }
}