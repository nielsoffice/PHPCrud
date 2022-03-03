<?php 

namespace PHPWine\VanillaFlavour\Plugins\PHPCrud\Crud;

trait ErrorHandler {
  
 /**
  * @var 
  * @property String 
  * Defined Error Handler Msg
  * @since v1.0.0.0
  * @since 03.03.2022
  **/
  public static $COULD_NOT_CONNECT  = "ERROR: Could not connect.";
  public static $ERROR_MSG          = "// Request Database Connection";
  public static $PHPCRUD_DB_CONFIG  = "path > ../plugins/Crud/DBWine.php";

 /**
  * @var 
  * @property String 
  * Defined Error Handler Msg
  * @since v1.0.0.0
  * @since 03.03.2022
  **/
  public static function DB_ERROR_HANDLER($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME){

    return "     
  
      # HOST OR SERVER NAME
      const DB_HOST     = '".$DB_HOST."' "    . SELF::checkConst( $DB_HOST ,    " <i> [ ! cannot be empty ] </i>" ) . "

      # HOST USER NAME
      const DB_USERNAME = '".$DB_USERNAME."' ". SELF::checkConst( $DB_USERNAME , " <i> [ ! cannot be empty ] </i>" ) . "
  
      # HOST PASSWORD
      const DB_PASSWORD = '".$DB_PASSWORD."' ". SELF::checkConst( $DB_PASSWORD , " <i> [ ! Optional ] </i>" )        . " 
  
      # DATBASE NAME
      const DB_NAME     = '".$DB_NAME."' "    . SELF::checkConst( $DB_NAME ,     " <i> [ ! cannot be empty ] </i>" ) . " 
  
    ";

  } 

 /**
  * @var 
  * @property String 
  * Defined Error Handler Msg Disconnected database request processing CRUD !
  * @since v1.0.0.0
  * @since 03.03.2022
  **/
  protected static function callBackRequestErrorHandler( $callback ){

    return   '
  
    Third argument [ $callback ] is not null ! [ Require call back function named '.$callback.'() ] | [ function '.$callback.'( $request ) { if($request) { ... } } ] 
             
    <span>Expect:</span> 
  
    $wineCrud = new Vanilla(Vanilla::FLAG, "tbl_name" , [
     
     "mixed" => [ SQL_QUERY_GOES_HERE ]
      
    ] , "'.$callback.'" );
     
    <i> // *Required call back function</i>
    function '.$callback.'( $'.$callback.' ) { if( $'.$callback.' ) { ... } }
  
    <hr />
    
    ';

  } 

  private static function checkConst( $DBWineDB_HOST, $ERR_MSG )
  {
    return ( empty( $DBWineDB_HOST) ) ? $ERR_MSG : null ; 
  }
  
 


}