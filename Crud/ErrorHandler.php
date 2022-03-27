<?php 

namespace PHPWineVanillaFlavour\Plugins\PHPCrud\Crud;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour - PHPCRUD (Plugin) v1.0.0.1 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.0.0.1 free software: you can redistribute it and/or modify.
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHPCrud Vanilla
 * @package    PHPCrud Vanilla Plugin of PHP Wine extend optimizer to crud features
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   1.0.0.1 support PHPWine v1.2.0.9
 * @since     02.28.2022
 *
 */

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
  public static function callBackRequestErrorHandler( $callback ){

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