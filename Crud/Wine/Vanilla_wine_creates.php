<?php 

use \PHPWineVanillaFlavour\Plugins\PHPCrud\Crud\Vanilla;
 
new Class extends Vanilla { function __construct() { function wine_creates(

     string $db_table  
   , array  $query     = []
   , string $dataType  = null 
   , array  $values    = null
   , bool   $debug     = false

    ) {

     return method_exists((new Vanilla), 'wine_creates' ) ? 
   
      (new Vanilla)->wine_creates( $db_table, $query, $dataType, $values, $debug )  : false;
   
    }
 
  }

};
   