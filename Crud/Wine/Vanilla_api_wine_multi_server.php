<?php 

use \PHPWineVanillaFlavour\Plugins\PHPCrud\Crud\Vanilla;
 
 new Class extends Vanilla { function __construct() { function api_wine_multi_server(

      object       $multi_server = null
    , array|string $method = []
    , mixed        $callback = null
   
    ) {

     return method_exists((new Vanilla), 'api_wine_multi_server' ) ? 
   
      (new Vanilla)->api_wine_multi_server($multi_server, $method, $callback)  : false;
   
    }
 
  }

};
   