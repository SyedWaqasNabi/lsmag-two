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

class ReplDiscountValidation
{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $table_name = $setup->getTable( 'ls_replication_repl_discount_validation' ); 
        if ( ! $setup->tableExists( $table_name ) ) {
        
        	$table = $setup->getConnection()->newTable( $table_name );
        
        	$table->addColumn( 'repl_discount_validation_id', Table::TYPE_INTEGER, NULL, 
        	                    [ 'identity' => TRUE, 'primary' => TRUE,
        	                      'unsigned' => TRUE, 'nullable' => FALSE, 'auto_increment'=> TRUE ] );
        	$table->addColumn( 'scope', Table::TYPE_TEXT, 8);
        	$table->addColumn( 'scope_id', Table::TYPE_INTEGER, 11);
        	$table->addColumn( 'processed', Table::TYPE_BOOLEAN, null, [ 'default' => 0 ],'flag to check if data is already coped into magento 0 means needs to be copied into Magento tables, 1 means already copied' );
        	$table->addColumn( 'is_updated', Table::TYPE_BOOLEAN, null, [ 'default' => 0 ],'flag to check if data is already updated from Omni into magento 0 means already updated, 1 means  needs to be updated into Magento tables' );
        	$table->addColumn( 'Description' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'EndAfterMidnight' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'EndDate' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'EndTime' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'FridayEnd' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'FridayEndAfterMidnight' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'FridayStart' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'FridayWithinBounds' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'nav_id' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'IsDeleted' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'MondayEnd' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'MondayEndAfterMidnight' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'MondayStart' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'MondayWithinBounds' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'SaturdayEnd' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'SaturdayEndAfterMidnight' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'SaturdayStart' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'SaturdayWithinBounds' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'StartDate' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'StartTime' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'SundayEnd' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'SundayEndAfterMidnight' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'SundayStart' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'SundayWithinBounds' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'ThursdayEnd' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'ThursdayEndAfterMidnight' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'ThursdayStart' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'ThursdayWithinBounds' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'TimeWithinBounds' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'TuesdayEnd' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'TuesdayEndAfterMidnight' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'TuesdayStart' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'TuesdayWithinBounds' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'WednesdayEnd' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'WednesdayEndAfterMidnight' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'WednesdayStart' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'WednesdayWithinBounds' , Table::TYPE_BOOLEAN, '' );
        
        	$setup->getConnection()->createTable( $table );
        }
    }


}

