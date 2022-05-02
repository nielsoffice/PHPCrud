<?php 

namespace PHPWineVanillaFlavour\Plugins\PHPCrud\Crud;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour - PHPCRUD (Plugin) v1.3.0.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.3.0.0 free software: you can redistribute it and/or modify.
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
 * @version   v1.3.0.0 support PHPWine v1.2.0.9
 * @since     04.13.2022
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

      <hr>
      <pre><i><b>  Primary Issue: <b><i> </pre>
      <pre><i> Check your database credentials: [ DB_HOST , DB_HOST , DB_PASSWORD , DB_NAME ] </i></pre>
      <pre><i> Check your tables and column properties must be match on your databases: example inserting data: [ 'mixed' => [' INSERT INTO crud (  multi_name , multi_mobile , multi_email  )  VALUES  ( ?,?,? ); '] ] </i></pre>
  
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
     
    <i> // *Required call back function </i>
    function '.$callback.'( $'.$callback.' ) { if( $'.$callback.' ) { ... } }
  
    <hr />
    
    ';

  } 

 /**
  * @var 
  * @property String 
  * Defined Error Handler check constant if isset !
  * @since v1.0.0.0
  * @since 03.03.2022
  **/
  private static function checkConst( $DBWineDB_HOST, $ERR_MSG )
  {
    return ( empty( $DBWineDB_HOST) ) ? $ERR_MSG : null ; 
  }
  
/**
 * Defined : CREATE incase of create data to database
 * @since 1.3.0.0 supprt PHPWine v1.3.1.1
 * @since 01.05.2022
 **/
 public static function wine_multi_server_create() : void {

  print 'wine_multi_server : required a valid argument for [ Create/Make ] :
    <br /> <pre>["query"=>" ", "dataType"=>" ", "values"=>" ",  "debug"=>false]</pre>
    <i><pre>Expect: wine_multi_server( $db, (new vanilla)::MAKE, ["query"=>" ", "dataType"=>" ", "values"=>" ",  "debug"=>false])
    
    <hr />
    $multiServer->wine_multi_server(  $multi_server, (new vanilla)::MAKE, [ "query" => [ 
       
    "mixed" => [" INSERT INTO crud ( multi_name , multi_mobile , multi_email  )  VALUES  ( ?,?,? ); "]
                         
    ],"dataType" => "sss", "values"=> array(
                           
    "multi_name_value",
    "multi_mobile_value",
    "multi_email_value"
                       
   ),"debug"=>false ]);
                       
   </pre></i>
 
  ';

 }
  
/**
 * Defined : READ incase of fetch data to database
 * @since 1.3.0.0 supprt PHPWine v1.3.1.1
 * @since 01.05.2022
 **/
 public static function wine_multi_server_read() : void {

  print 'wine_multi_server : required a valid argument for [ Read/Fetch ] :

    <br /> <pre>["query"=>" ", "fetch_request"=>" ", "debug"=>false]</pre>
    <i><pre>Expect: wine_multi_server( $db, (new vanilla)::FETCH, [ \'query\' => [ \'mixed\' =>  [ " SQL goes here " ] ], \'fetch_request\' => function()  { ... }, \'debug\' => false ])
    
    <hr />
    $multiServer->wine_multi_server(  $multi_server, (new vanilla)::FETCH, [ \'query\' =>  
    
      [ \'mixed\' =>  [ " SQL goes here " ] 
    
    ], \'fetch_request\' => function()  { ... } , 
    
    \'debug\' => false ]);    
                       
   </pre></i>
 
  ';

 }
  
/**
 * Defined : UPDATE incase of update data to database
 * @since 1.3.0.0 supprt PHPWine v1.3.1.1
 * @since 01.05.2022
 **/
 public static function wine_multi_server_update() : void {

  print 'wine_multi_server : required a valid argument for [ Update/Put ] :

    <br /> <pre>["query"=>" ", "put_request"=>" ", "debug"=>false]</pre>
    <i><pre>Expect: wine_multi_server( $db, (new vanilla)::PUT, [ \'query\' => [ \'mixed\' =>  [ " SQL goes here " ] ], \'put_request\' => function()  { ... }, \'debug\' => false ])
    
    <hr />
    $multiServer->wine_multi_server(  $multi_server, (new vanilla)::PUT, [ \'query\' =>  
    
      [ \'mixed\' =>  [ " SQL goes here " ] 
    
    ], \'put_request\' => function()  { ... } , 
    
    \'debug\' => false ]);    
                       
   </pre></i>
 
  ';

 }

/**
 * Defined : DELETE incase of delete data to database
 * @since 1.3.0.0 supprt PHPWine v1.3.1.1
 * @since 01.05.2022
 **/
 public static function wine_multi_server_delete() : void {

  print 'wine_multi_server : required a valid argument for [ Delete ] :

    <br /> <pre>["query"=>" ", "delete_request"=>" ", "debug"=>false]</pre>
    <i><pre>Expect: wine_multi_server( $db, (new vanilla)::DELETE, [ \'query\' => [ \'mixed\' =>  [ " SQL goes here " ] ], \'delete_request\' => function()  { ... }, \'debug\' => false ])
    
    <hr />
    $multiServer->wine_multi_server(  $multi_server, (new vanilla)::DELETE, [ \'query\' =>  
    
      [ \'mixed\' =>  [ " SQL goes here " ] 
    
    ], \'delete_request\' => function()  { ... } , 
    
    \'debug\' => false ]);    
                       
   </pre></i>
 
  ';

 }

}