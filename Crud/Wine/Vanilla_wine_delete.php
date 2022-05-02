<?php 

use \PHPWineVanillaFlavour\Plugins\PHPCrud\Crud\Vanilla;
 
new Class extends Vanilla { function __construct() { function wine_delete(

    ?string $col_name = null
  , array   $query    = []
  , mixed   $callback = null
  , bool    $debug    = false

    ) {

     return method_exists((new Vanilla), 'wine_delete' ) ? 
   
      (new Vanilla)->wine_delete( $col_name, $query, $callback, $debug )  : false;
   
    }
 
  }

};
   