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
     * Defined: CRUD wine_insert | Create or insert data to database | in case request dynamic JOIN last id table
     * @param $db_table : argument data type: ?string   [ db_table ] -> Database table
     * @param $query    : argument data type: ?array    [ query ]    -> SQL query 
     * @param $callback : argument data type: ?mixed    [ callback ] -> Call back function 
     * @param $debug    : argument data type: ?bool     [ debug ]    -> set to [ true ] debug SQL Query return as string 
     * 
     * # Create or Insert Data to Database
     * 
     * if( $wine_db === false ) { die("ERROR: Could not connect. " . $wine_db->connect_error); }
     * 
     * function callBack( $inserted ) { if( $inserted ) { echo  " Added new record! "; } }
     * 
     * New instance
     * $wineVanilla = new Vanilla();
     * Create incase request last ID : 
     * $wine = $wineVanilla->wine_creates( 'tb_name' , [ 
     * 
     * 'name'         => '?',
     * 'description'  => '?'
     * 
     * ] , "ss" , array(
     *  
     * $name,
     * $description 
     * 
     * ));
     * 
     * echo ( !empty($wine) ) ? "Last_id : {$wine} Added new record! " : ''; 
     * 
     * function callBack( $new_record ) {
     * 
     * if( $new_record ) { echo  " Added new record! "; } 
     * 
     * }
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

    public function wine_creates(string $db_table  , array $query = [], string $dataType = null , array $values = null, bool $debug = false) : mixed;

    /**
     * Defined: CRUD wine_read | Read data to database 
     * @param $db_table : argument data type: ?string   [ db_table ] -> Database table
     * @param $query    : argument data type: ?array    [ query ]    -> SQL query 
     * @param $callback : argument data type: ?mixed    [ callback ] -> Call back function 
     * @param $debug    : argument data type: ?bool     [ debug ]    -> set to [ true ] debug SQL Query return as string 
     * 
     * # Read Data from Database
     *
     * if( $wine_db === false ) { die("ERROR: Could not connect. " . $wine_db->connect_error); }
     *
     * Execution
     * function callBack( $read_datas ) { if( $read_datas ) { foreach( $read_datas as  $val ) { echo $val["col_name"]; }  } }
     *
     * Query
     * $wineVanilla->wine_fetch(  'tbl_info', [ 'name' ], 'callBack' );
     *
     * OR
     * $wine  = NEW Vanilla( Vanilla::FETCH, $wine_db , 'tb_name',  [
     *
     * 'col_name',
     *
     * ] , 'callBack' );
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
    public function wine_fetch( string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false ) : array ;
 
    /**
     * Defined: CRUD wine_update | Update data to database 
     * @param $db_table : argument data type: ?string   [ db_table ] -> Database table
     * @param $query    : argument data type: ?array    [ query ]    -> SQL query 
     * @param $callback : argument data type: ?mixed    [ callback ] -> Call back function 
     * @param $debug    : argument data type: ?bool     [ debug ]    -> set to [ true ] debug SQL Query return as string 
     * 
     * # Update data from Database
     *
     * if( $wine_db === false ) { die("ERROR: Could not connect. " . $wine_db->connect_error); }
     *
     * function callBack( $updated ) { if( $updated ) { echo  " Updated record! "; } }
     *
     * Update 
     * $wineVanilla->wine_update('tbl_info', [
     *
     * 'name'      => 'Niel Fern',
     * 'condition' => [" WHERE id  = 107 "] 
     *
     * ] , 'update' );
     *
     * OR
     * $wine = new Vanilla( Vanilla::PUT, $wine_db , 'table_name', [
     *
     * 'col_name'  => 'Value_1',
     * 'condition' => [" WHERE tabel_id  = 1 "] 
     *
     * ] , 'callBack' );
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
    public function wine_update( string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false ) : bool|string; 

    /**
     * Defined: CRUD wine_delete | Delete data to database 
     * @param $db_table : argument data type: ?string   [ db_table ] -> Database table
     * @param $query    : argument data type: ?array    [ query ]    -> SQL query 
     * @param $callback : argument data type: ?mixed    [ callback ] -> Call back function 
     * @param $debug    : argument data type: ?bool     [ debug ]    -> set to [ true ] debug SQL Query return as string 
     * 
     * # Delete data from Database
     * if( $wine_db === false ) { die("ERROR: Could not connect. " . $wine_db->connect_error); }
     *
     * function callBack( $deleted ) { if( $deleted ) { echo  " Deleted record! "; } }
     *
     * table_name OR ( * ) if selected all data
     * empty table run with [ 'mixed' ]
     * $wineVanilla->wine_delete('', [
     *
     * 'tbl_info',
     * 'condition' => [" WHERE id  = 107 "] 
     *
     * ] , 'deleted' );
     *
     * OR
     * $useWine = new Vanilla( Vanilla::DELETE , '', [
     *
     *  'table_name',
     *  'condition' => [" WHERE id  = 1 "] 
    
     * ] , 'callBack' );
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
    public function wine_delete( string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false ) : bool|string; 

    /**
     * Query incase of mixed 
     * $query = [ 'mixed' => [" DELETE FROM `tb_name` WHERE `fltr_id` = 179; "] ] 
     * 
     * $useWine->wine_delete( null, $query , 'callBack' );
     * 
     * Query debugging set $debug = true | last @param
     * $useWine->wine_delete( 'tb_name', $query , 'callBack',  true );
     * 
     * # Registered array keys 
     * [ 'condition' ] && [ 'mixed' ]
     * 
     * # PHPCrud Flag 
     * Incase Create
     * $wineCrud = new Vanilla(Vanilla::MAKE,   string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false );
     * Incase Read
     * $wineCrud = new Vanilla(Vanilla::FETCH,  string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false );
     * Incase Update
     * $wineCrud = new Vanilla(Vanilla::PUT,    string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false );
     * Incase Delete
     * $wineCrud = new Vanilla(Vanilla::DELETE, string $db_table = null , array $query = [] , mixed $callback = null, bool $debug = false );
     * 
     **/
   
     
    # $wineCrud = new Vanilla(string $flag = null, ?string $db_table = null, array $query = [], mixed $callback = null, bool $debug = false )  : mixed ;
  
}


