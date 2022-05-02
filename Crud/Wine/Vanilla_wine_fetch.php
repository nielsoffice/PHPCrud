<?php 

use \PHPWineVanillaFlavour\Plugins\PHPCrud\Crud\Vanilla;
 
new Class extends Vanilla { function __construct() { function wine_fetch(

    ?string $db_table = null
  , array   $query    = []
  , mixed   $callback = null
  , bool    $debug    = false

    ) {

     return method_exists((new Vanilla), 'wine_fetch' ) ? 
   
      (new Vanilla)->wine_fetch( $db_table, $query, $callback, $debug )  : false;
   
    }
 
  }

};
   