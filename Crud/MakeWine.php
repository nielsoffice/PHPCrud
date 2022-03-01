<?php 

namespace PHPWine\VanillaFlavour\Plugins\Crud;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour - PHPCRUD (Plugin) v1.0.0.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.0.0.0 free software: you can redistribute it and/or modify.
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
 * @category   PHPLibrary PHPWine\VanillaFlavour
 * @package    PHPHtml-Optimizer | CodeDesigner/Enhancer | Advance Form Builder | Handling Form Validation | Form Validation v2 | BASIC-Authentication | HtmlMinifier
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   1.0.0.0 support PHPWine v1.2.0.9
 * @since     02.28.2022
 *
 */

interface MakeWine {

    /**
     * Defined: CRUD wine_insert | Create or insert data to database 
     * @param $server   : argument data type: ?mixed    [ server ]   -> Database Connection
     * @param $db_table : argument data type: ?string   [ db_table ] -> Database table
     * @param $query    : argument data type: ?array    [ query ]    -> SQL query 
     * @param $callback : argument data type: ?mixed    [ callback ] -> Call back function 
     * @param $debug    : argument data type: ?bool     [ debug ]    -> set to [ true ] debug SQL Query return as string 
     * 
     * @param Insert_CallBack :
     * function callBack( $msg ,  $test = 456 ) 
     * {
     *  if( $msg ) {
     *     return $test.  " New record created successfully ";
     *   }
     * }
     * $useWine->wine_create(  $wine_db , 'tb_name', $query , 'callBack' );
     * 
     * @param Insert_Join_table :
     * function message( $msg )
     * {
     *    if( $msg ) {
     * 
     *      return  " New record created successfully " .  $useWine->wine_create(  $wine_db , 'tb_name',  [
     *  
     *      'filter_name' => 'Vice2 City'
     *   
     *    ] );
     *   }
     * } 
     *  
     * Would you like me to treat a cake and coffee ?
     * Become a donor, Because with you! We can build more...
     * Donate:
     * GCash : +639650332900
     * Paypal account: syncdevprojects@gmail.com
     * 
     **/

     
    public function wine_create( mixed $MySQLi = null , string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false ) : bool|string; 

    /**
     * Defined: CRUD wine_read | Read data to database 
     * @param $server   : argument data type: ?mixed    [ server ]   -> Database Connection
     * @param $db_table : argument data type: ?string   [ db_table ] -> Database table
     * @param $query    : argument data type: ?array    [ query ]    -> SQL query 
     * @param $callback : argument data type: ?mixed    [ callback ] -> Call back function 
     * @param $debug    : argument data type: ?bool     [ debug ]    -> set to [ true ] debug SQL Query return as string 
     * 
     * @param Read_CallBack :
     * function callBack( $inserted ) 
     * {
     *
     *  if( $inserted ) 
     *  {
     *
     *   foreach($inserted as  $val ) { echo $val["filter_name"]; } 
     *
     *  } 
     *
     * }
     * $useWine->wine_fetch( $wine_db , 'tb_name', $query , 'callBack' );
     * 
     * @param Read_Join_table :
     * @param Read_Custom_Query :
     * if( $wine_db === false ) { die("ERROR: Could not connect. " . $wine_db->connect_error); }
     *
     * function success( $inserted ) 
     * {
     *
     *  if( $inserted ) 
     *  {
     *
     *   foreach($inserted as  $val ) { echo $val["filter_name"]; } 
     *
     *  } 
     *
     * }
     *
     * $useWine  = NEW UseWine( UseWine::FETCH, $wine_db , 'tb_name',  [
     *
     *  'col_name',
     *
     * ]  , 'success' );
     *
     * $wine_db->close();
     * 
     * Would you like me to treat a cake and coffee ?
     * Become a donor, Because with you! We can build more...
     * Donate:
     * GCash : +639650332900
     * Paypal account: syncdevprojects@gmail.com
     * 
     **/
    public function wine_fetch( mixed $MySQLi = null , string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false ) : array ;
 
    /**
     * Defined: CRUD wine_update | Update data to database 
     * @param $server   : argument data type: ?mixed    [ server ]   -> Database Connection
     * @param $db_table : argument data type: ?string   [ db_table ] -> Database table
     * @param $query    : argument data type: ?array    [ query ]    -> SQL query 
     * @param $callback : argument data type: ?mixed    [ callback ] -> Call back function 
     * @param $debug    : argument data type: ?bool     [ debug ]    -> set to [ true ] debug SQL Query return as string 
     * 
     * @param Update_CallBack :
     * function callBack( $msg ,  $test = 456 ) 
     * {
     *  if( $msg ) {
     *     return $test.  " Updated successfully ";
     *   }
     * }
     * $useWine->update( $wine_db , 'tb_name', $query , 'callBack' );
     * 
     * @param Update_Join_table :
     * @param Update_Custom_Query :
     * function message( $msg )
     * {
     *    if( $msg ) {
     * 
     *      return  " New record created successfully " .  $useWine->update(  $wine_db , 'tb_name',  [
     *  
     *       mixed => [ 'Custom SQL Query goes here' ] 
     *   
     *    ] );
     *   }
     * } 
     * 
     * Would you like me to treat a cake and coffee ?
     * Become a donor, Because with you! We can build more...
     * Donate:
     * GCash : +639650332900
     * Paypal account: syncdevprojects@gmail.com
     * 
     **/
    public function wine_update( mixed $MySQLi = null , string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false ) : bool|string; 

    /**
     * Defined: CRUD wine_delete | Delete data to database 
     * @param $server   : argument data type: ?mixed    [ server ]   -> Database Connection
     * @param $db_table : argument data type: ?string   [ db_table ] -> Database table
     * @param $query    : argument data type: ?array    [ query ]    -> SQL query 
     * @param $callback : argument data type: ?mixed    [ callback ] -> Call back function 
     * @param $debug    : argument data type: ?bool     [ debug ]    -> set to [ true ] debug SQL Query return as string 
     * 
     * @param Delete_CallBack :
     * function callBack( $msg ,  $test = 456 ) 
     * {
     *  if( $msg ) {
     *     return $test.  " Delete successfully ";
     *   }
     * }
     * $useWine->wine_delete( $wine_db , 'tb_name', $query , 'callBack' );
     * 
     * @param Delete_Join_table :
     * @param Delete_Custom_Query :
     * if( $wine_db === false ) { die("ERROR: Could not connect. " . $con->connect_error); }
     *
     * function success( $inserted ) {
     *
     * if( $inserted  ) {
     *
     * echo "New data Deleted! ";
     *
     *  } 
     *
     * } 
     *
     * $useWine  = NEW UseWine( UseWine::DELETE, $wine_db , '',  [
     *
     * # 'tb_name',
     * # 'condition' => ['WHERE fltr_id = 177']
     *
     * # If use   [ mixed ] 
     * 'mixed' => [" DELETE FROM `tb_name` WHERE `fltr_id` = 179; "]
     *
     * ]  , 'success'  );
     *
     * $wine_db->close();
     * 
     * Would you like me to treat a cake and coffee ?
     * Become a donor, Because with you! We can build more...
     * Donate:
     * GCash : +639650332900
     * Paypal account: syncdevprojects@gmail.com
     * 
     **/
    public function wine_delete( mixed $MySQLi = null , string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false ) : bool|string; 
 
}


