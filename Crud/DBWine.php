<?php 

namespace PHPWine\VanillaFlavour\Plugins\Crud;

/**
 * 
 * Would you like me to treat a cake and coffee ?
 * Become a donor, Because with you! We can build more...
 * Donate:
 * GCash : +639650332900
 * Paypal account: syncdevprojects@gmail.com
 * 
 **/

Abstract Class DBWine {

 /**
  * Defined CONFIGURE database connection
  * @since v1.0.0.1
  * @since 03.02.2022
  **/
  
   # HOST OR SERVER NAME
   const DB_HOST     = 'localhost';
   # HOST USER NAME
   const DB_USERNAME = 'root';
   # HOST PASSWORD
   const DB_PASSWORD = '';
   # DATBASE NAME
   const DB_NAME     = '';
     
 /**
  * @var 
  * @property requestConncetion
  * Defined Private Property Connection 
  * @since v1.0.0.0
  * @since 03.02.2022
  **/
  abstract public function requestConncetion() : object ;

 }
   


 
