<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Setup\UpgradeSchema;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class ReplPrice
{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $table_name = $setup->getTable( 'ls_replication_repl_price' ); 
        if ( ! $setup->tableExists( $table_name ) ) {
        
        	$table = $setup->getConnection()->newTable( $table_name );
        
        	$table->addColumn( 'repl_price_id', Table::TYPE_INTEGER, NULL, 
        	                    [ 'identity' => TRUE, 'primary' => TRUE,
        	                      'unsigned' => TRUE, 'nullable' => FALSE, 'auto_increment'=> TRUE ] );
        	$table->addColumn( 'scope', Table::TYPE_TEXT, 8);
        	$table->addColumn( 'scope_id', Table::TYPE_INTEGER, 11);
        	$table->addColumn( 'processed', Table::TYPE_BOOLEAN, null, [ 'default' => 0 ],'flag to check if data is already coped into magento 0 means needs to be copied into Magento tables, 1 means already copied' );
        	$table->addColumn( 'is_updated', Table::TYPE_BOOLEAN, null, [ 'default' => 0 ],'flag to check if data is already updated from Omni into magento 0 means already updated, 1 means  needs to be updated into Magento tables' );
        	$table->addColumn( 'CurrencyCode' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'CustomerDiscountGroup' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'EndingDate' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'IsDeleted' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'ItemId' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'LoyaltySchemeCode' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'MinimumQuantity' , Table::TYPE_FLOAT, '' );
        	$table->addColumn( 'ModifyDate' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'PriceInclVat' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'Priority' , Table::TYPE_INTEGER, '' );
        	$table->addColumn( 'QtyPerUnitOfMeasure' , Table::TYPE_FLOAT, '' );
        	$table->addColumn( 'SaleCode' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'SaleType' , Table::TYPE_INTEGER, '' );
        	$table->addColumn( 'StartingDate' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'StoreId' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'UnitOfMeasure' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'UnitPrice' , Table::TYPE_FLOAT, '' );
        	$table->addColumn( 'UnitPriceInclVat' , Table::TYPE_FLOAT, '' );
        	$table->addColumn( 'VATPostGroup' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'VariantId' , Table::TYPE_TEXT, '' );
        
        	$setup->getConnection()->createTable( $table );
        }
    }


}

