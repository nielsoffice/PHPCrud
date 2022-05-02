<?php 

namespace PHPWineVanillaFlavour\Plugins\PHPCrud\Crud;

 use \PHPWineVanillaFlavour\Plugins\PHPCrud\Crud\CRUDWine;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour - PHPCRUD (Plugin) v1.1.0.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.1.0.0 free software: you can redistribute it and/or modify.
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
 * @version   v1.1.0.0 support PHPWine v1.2.0.9
 * @since     04.13.2022
 * 
 * @method wine_creates();
 * @method wine_fetch();
 * @method wine_update();
 * @method wine_delete();
 * @method wine_multi_server();
 * @method api_wine_multi_server();
 * @method wine_extract();
 *
 */

 Class Vanilla extends CRUDWine implements MakeWine  {  
       
 /**
  * @var 
  * @property Connection
  * Defined Private Property Connection 
  * @since v1.0.0.0
  * @since 03.02.2022
  **/
  protected $db_wine;
 
 /**
  * @var 
  * @property SQL Query
  * Defined $sql_query : table property string type
  * @since v1.2.0.9
  * @since 02.28.2022
  **/
  private array|null  $sql_query;

/**
  * @var 
  * @property Initialized
  * Defined initialize_insert_data : table property string type
  * @since v1.2.0.9
  * @since 02.28.2022
  **/
  private string|null $wine_insert;

/**
  * @var 
  * @property Initialized
  * Defined initialize_update_data : table property string type
  * @since v1.2.0.9
  * @since 02.28.2022
  **/
  private string|null $wine_update;

/**
  * @var 
  * @property Initialized
  * Defined initialize_update_data : table property string type
  * @since v1.2.0.9
  * @since 02.28.2022
  **/
  private string|null $wine_fetch;

/**
  * @var 
  * @property DatabaseTable
  * Defined $db_table : table property string type
  * @since v1.2.0.9
  * @since 02.28.2022
  **/
  private string|null $db_table;

/**
  * @var 
  * @property Table Column name
  * Defined $col_name : table property string type
  * @since v1.2.0.9
  * @since 03.1.2022
  **/
  private string|null $col_name;
  
/**
  * @var 
  * @property FLAG Flag multi server identifier name
  * Defined $query_wine_multi_server : table property string type
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private string $query_wine_multi_server;

/**
  * @var 
  * @property Object DB identifier name
  * Defined $server_wine_multi : object property type
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private object $server_wine_multi;
     
/**
  * @var 
  * @property Callable callback identifier name
  * Defined $callback : object property type
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private bool $callback = true;

/**
  * @var 
  * @property Create new data to database object
  * Defined initialize_update_data : table property string type
  * @since v1.2.0.9
  * @since 01.01.2022
  **/
  public Const MAKE = 'CREATE_NEW_DATA';

  /**
  * @var 
  * @property Update selected data to database object
  * Defined initialize_update_data : table property string type
  * @since v1.2.0.9
  * @since 01.01.2022
  **/
  public Const PUT = 'UPDATE_SELECTED_DATA';

  /**
  * @var 
  * @property Read data to database object
  * Defined initialize_update_data : table property string type
  * @since v1.2.0.9
  * @since 01.01.2022
  **/
  public Const FETCH = 'READ_DB_DATA';

  /**
  * @var 
  * @property Read data to database object
  * Defined initialize_update_data : table property string type
  * @since v1.2.0.9
  * @since 01.01.2022
  **/
  public Const DELETE = 'REMOVE_DB_DATA';
 
  /**
  * @var 
  * @property Initialized_mixed
  * Defined initialize_update_data : table property string type
  * @since v1.2.0.9
  * @since 02.28.2022
  **/
  private Const FILTER_MIXED = 'mixed';

 /**
  * @var 
  * @property Initialized_condition
  * Defined initialize_update_data : table property string type
  * @since v1.2.0.9
  * @since 02.28.2022
  **/
  private Const QUERY_CONDITION = 'condition'; 

 /**
  * @var 
  * @property Initialized_query
  * Defined initialize_query_data : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private Const MULTI_SERVER_QUERY = 'query';

 /**
  * @var 
  * @property Initialized_values
  * Defined initialize_values_data : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private Const MULTI_SERVER_VALUES = 'values';

/**
  * @var 
  * @property Initialized_dataType
  * Defined initialize_dataType_data : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private Const MULTI_SERVER_DATATYPE = 'dataType';

/**
  * @var 
  * @property Initialized_debug
  * Defined initialize_debug_data : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private Const MULTI_SERVER_DEBUG = 'debug';

/**
  * @var 
  * @property Initialized_fetch_request
  * Defined initialize_fetch_request_data : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private Const MULTI_SERVER_CALLABLE = 'fetch_request';

/**
  * @var 
  * @property Initialized_put_request_request
  * Defined initialize_put_request_data : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private Const MULTI_SERVER_PUT = 'put_request';

/**
  * @var 
  * @property Initialized_delete_request_request
  * Defined initialize_delete_request_data : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 30.04.2022
  **/
  private Const MULTI_SERVER_DEL = 'delete_request';

/**
  * @var 
  * @property Initialized_api_wine_makes_request
  * Defined api_wine_makes : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 01.05.2022
  **/
  private Const API_MAKES_WINE = 'api_wine_makes';

/**
  * @var 
  * @property Initialized_api_wine_fetch
  * Defined api_wine_makes : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 01.05.2022
  **/
  private Const API_FETCH_WINE = 'api_wine_fetch';

/**
  * @var 
  * @property Initialized_api_wine_put
  * Defined api_wine_makes : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 01.05.2022
  **/
  private Const API_PUT_WINE = 'api_wine_put';

/**
  * @var 
  * @property Initialized_api_wine_delete
  * Defined api_wine_makes : 
  * @since wine v1.3.1.1
  * @since Vanilla 1.3.0.0
  * @since 01.05.2022
  **/
  private Const API_DELETE_WINE = 'api_wine_delete';

  /**
   * Defined: CRUD Request   [ CREATE ] [ READ ] [ UPDATE ] [ DELETE ]
   * @var|@property   : $crud
   * @var|@property   : $MySQLi
   * @var|@property   : $db_table
   * @var|@property   : $query
   * @var|@property   : $callback 
   * @var|@property   : $debug  
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 02.28.2022
   **/
  public function __construct(string $flag = null, ?string $db_table = null, array $query = [], mixed $callback = null, bool $debug = false ) 
  {

 if( !is_null($flag) ) 
 {
  
  # Determine which curretn request are hitting!
  switch ( $flag ) 
   {
    
     /**
     * @param CREATE incase of Insert data to database
     * @since 1.0.0.0 supprt PHPWine v1.2.0.9
     * @since 02.28.2022 
     **/
     case SELF::MAKE :
      return $this->do_make( $this->requestConnection(), $db_table, $query , $callback , $debug );
      break;

     /**
     * @param READ incase of Read data to database
     * @since 1.0.0.0 supprt PHPWine v1.2.0.9
     * @since 02.28.2022
     **/
      case SELF::FETCH :
      return $this->do_fetch( $this->requestConnection(), $db_table, $query , $callback , $debug );
      break;

     /**
     * @param UPDATE incase of Update data to database
     * @since 1.0.0.0 supprt PHPWine v1.2.0.9
     * @since 02.28.2022
     **/
     case SELF::PUT :
      return $this->do_update( $this->requestConnection(), $db_table, $query , $callback , $debug );
      break;

     /**
     * @param DELETE incase of Delete data to database
     * @since 1.0.0.0 supprt PHPWine v1.2.0.9
     * @since 02.28.2022
     **/
      case SELF::DELETE :
        return $this->do_delete( $this->requestConnection(), $db_table, $query , $callback , $debug );
        break;

     default:
      
     /**
     * @param BAD_REQUEST incase of foo request !
     * @since 1.0.0.0 supprt PHPWine v1.2.0.9
     * @since 02.28.2022
     **/
      $this->wine_crud_error_handler('Require a valid Argument #FLAG : [ Vanilla::MAKE ] | [ Vanilla::FETCH ] | [ Vanilla::PUT ] | [ Vanilla::DELETE ]'
      . '<br />' 
      . '<br/>$useWine  = NEW Vanilla( Vanill::MAKE , ?string $db_table = null, array $query = [], mixed $callback = null, bool $debug = false ); '
      );

     break;

    } 

    }

    $this->db_wine = $this->requestConnection();
    
  }  
  
   /**
   * @var|@property   : $api_wine_multi_server
   * @var|@property   : $methods
   * @since 1.1.0.0 supprt PHPWine v1.2.0.9
   * @since wine >=+ v1.3.1.1 
   * @since 04.29.2022
   **/
  public function api_wine_multi_server( object $multi_server = null, array|string $method = [], mixed $callback = null )  {

      // check if the nethod is callable 
      $validate_request_api_vanilla_wine = function ( callable|string $data ) : mixed {
        if (is_callable($data)) {  return $data($this->callback); } 
         else { return (array)  $data; }
      };

      /**
      * @param set filter if api_wine_makes exist ?? then validate !
      **/  
     if( $this->wine_check_arrays_key_mandatory(SELF::API_MAKES_WINE, $method)) 
     {

      $api_wine_multi_server_request = SELF::API_MAKES_WINE; 
      $wine_api_request = $validate_request_api_vanilla_wine($method[SELF::API_MAKES_WINE]);

     } 
     
      /**
      * @param set filter if api_wine_fetch exist ?? then validate !
      **/ 
      elseif($this->wine_check_arrays_key_mandatory(SELF::API_FETCH_WINE, $method)) {

      $api_wine_multi_server_request = SELF::API_FETCH_WINE;
      $wine_api_request = $validate_request_api_vanilla_wine($method[SELF::API_FETCH_WINE]);

     } 
    
    /**
     * @param set filter if api_wine_put exist ?? then validate !
     **/     
     elseif($this->wine_check_arrays_key_mandatory(SELF::API_PUT_WINE, $method)) {
  
      $api_wine_multi_server_request = SELF::API_PUT_WINE;
      $wine_api_request = $validate_request_api_vanilla_wine($method[SELF::API_PUT_WINE]);

     } 
     
    /**
     * @param set filter if api_wine_delete exist ?? then validate !
     **/
     elseif($this->wine_check_arrays_key_mandatory(SELF::API_DELETE_WINE, $method)) {
  
      $api_wine_multi_server_request = SELF::API_DELETE_WINE;
      $wine_api_request = $validate_request_api_vanilla_wine($method[SELF::API_DELETE_WINE]);

     }
      
     # Determine which curretn request are hitting!
     switch ( $api_wine_multi_server_request ) 
      {
       
        /**
        * @param CREATE incase of Insert data to database
        * @since Vanilla 1.3.0.0 support PHPWine v1.3.1.1
        * @since 01.04.2022
        **/
        case SELF::API_MAKES_WINE :
         return $this->do_make( $multi_server, null, $wine_api_request[SELF::MULTI_SERVER_QUERY], 
                
         $callback, 
         $wine_api_request[SELF::MULTI_SERVER_DEBUG]
        
         );
         break;

        /**
        * @param FETCH incase of read data to database
        * @since Vanilla 1.3.0.0 support PHPWine v1.3.1.1
        * @since 01.04.2022
        **/
        case SELF::API_FETCH_WINE :
          return $this->do_fetch( $multi_server, null, $wine_api_request[SELF::MULTI_SERVER_QUERY], 
          
          $callback, 
          $wine_api_request[SELF::MULTI_SERVER_DEBUG]
         
          );
          break;
   
        /**
        * @param UPDATE incase of update data to database
        * @since Vanilla 1.3.0.0 support PHPWine v1.3.1.1
        * @since 01.04.2022
        **/
        case SELF::API_PUT_WINE :
          return $this->do_update( $multi_server, null, $wine_api_request[SELF::MULTI_SERVER_QUERY], 
          
           $callback, 
           $wine_api_request[SELF::MULTI_SERVER_DEBUG] 
          
          );
          break;

        /**
        * @param DELETE incase of delete data to database
        * @since Vanilla 1.3.0.0 support PHPWine v1.3.1.1
        * @since 01.04.2022
        **/
        case SELF::API_DELETE_WINE :
          return $this->do_delete( $multi_server, null, $wine_api_request[SELF::MULTI_SERVER_QUERY], 
          
          $callback, 
          $wine_api_request[SELF::MULTI_SERVER_DEBUG] 
        
          );
          break;

        /**
        * @param BAD_REQUEST incase of foo request !
        * @since 1.0.0.0 supprt PHPWine v1.2.0.9
        * @since 02.28.2022
        **/
        default:
         $this->wine_crud_error_handler('Require a valid Argument #FLAG : [ api_wine_makes ] | [ api_wine_fetch ] | [ api_wine_put ] | [ api_wine_delete ]'
         . '<br />' 
         . '<br/>  api_wine_multi_server( new mysqli("localhost","root","","multiserver"), [ "api_wine_makes" => function() {
      
          return [
      
            "debug" => false,
            "query" => ["mixed" => [ "SQL goes here" ] ] 
            
          ];
      
          }], function() { ...  

              // callback function goes here 
              
          }); "

          
          ');
   
        break;
   
       } 
   
   
  }
  /**
   * @var|@property   : $multi_server
   * @var|@property   : $methods
   * @since 1.1.0.0 supprt PHPWine v1.2.0.9
   * @since wine >=+ v1.3.1.1 
   * @since 04.29.2022
   **/
    public function wine_multi_server( object $multi_server = null, vanilla|string $flag = null, array $method = [] )  {

      /**
      * @param set object db connection multi switcher
      **/
      $this->server_wine_multi = $multi_server;

      /**
      * @param set check if the flag is create ??
      **/
      if(!is_null($flag) ) {

        switch( $flag ) {

        /**
         * @param CREATE incase of Insert data to database
         * @since 1.3.0.0 supprt PHPWine v1.3.1.1
         * @since 01.05.2022
         **/
        case SELF::MAKE :
         /**
          * @param set checkif mandatory key are exist [ query | datatype | values | debug ]
         **/
           if(
              
              $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_QUERY,$method)  
           && $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_DATATYPE,$method) 
           && $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_VALUES,$method) 
           && $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_DEBUG,$method)
           
            ) {

            /**
            * @param set check if that is true ?? then validate !
            **/  
            if( $this->wine_check_arrays_key_mandatory( SELF::MULTI_SERVER_QUERY,$method ) ) {
              if( $this->wine_check_arrays_key_mandatory( SELF::FILTER_MIXED,$method[SELF::MULTI_SERVER_QUERY]) ) {

                /**
                 * @param set check if extract query array into string !
                **/ 
                $this->query_wine_multi_server = $this->wine_extract($method[SELF::MULTI_SERVER_QUERY][SELF::FILTER_MIXED]);

                /**
                 * @param set check if  debug is set and true then process debug output 
                **/ 
                if( $method[SELF::MULTI_SERVER_DEBUG] ) {

                  $this->wine_crud_error_handler( (array) $method[SELF::MULTI_SERVER_VALUES]  );
                  $this->wine_crud_error_handler( (string) $this->query_wine_multi_server  );
                  exit();

                }
        
                /**
                 * @param set insert data to database or multi server
                **/ 
                $stmt = $this->server_wine_multi->prepare( $this->query_wine_multi_server  );
                $this->bind_data_type_params( $stmt, $method[SELF::MULTI_SERVER_DATATYPE], $method[SELF::MULTI_SERVER_VALUES] );
        
                /**
                 * @param set return last id
                **/ 
                $stmt->execute();
                $request_data_id = $stmt->insert_id;
                return $request_data_id;
          
              }
            }
            
        } else {
      
          /**
           * @param set if foo request return error handler! 
          **/ 
          ErrorHandler::wine_multi_server_create();
      
        }
          break;

        /**
         * @param FETCH incase of read data from database
         * @since 1.3.0.0 supprt PHPWine v1.3.1.1
         * @since 01.05.2022
         **/
        case SELF::FETCH : // if flag is equal to read ?? 

          if( 

            /**
            * @param set checkif mandatory key are exist [ query | callback | debug ]
            **/
               $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_QUERY,$method) 
            && $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_CALLABLE,$method) 
            && $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_DEBUG,$method)
            
           ) {
     
            /**
             * @param set check if that is true ?? then validate !
            **/ 
           if( $this->wine_check_arrays_key_mandatory( SELF::MULTI_SERVER_QUERY,$method)) {
              if( $this->wine_check_arrays_key_mandatory( SELF::FILTER_MIXED,$method[SELF::MULTI_SERVER_QUERY])) {
     
                 /**
                  * @param set check if extract query array into string !
                 **/ 
                 $this->query_wine_multi_server = $this->wine_extract($method[SELF::MULTI_SERVER_QUERY][SELF::FILTER_MIXED]);
     
                  /**
                  * @param set process data display through foreach loop and exlpode using wine_extract() method !
                  **/ 
                 return $this->debug_true_process( 
                  
                 $this->server_wine_multi, // fresh multi db object 
                 $this->query_wine_multi_server, // imploded or extracted query from mixed !
                  
                 $method[SELF::MULTI_SERVER_CALLABLE], // execute callable function !
                 $method[SELF::MULTI_SERVER_DEBUG],  //  set to TRUE to enable dubug query 
                  
                 'fetch' );  //  end of do process fetch !
             }
           }
         } else {
            
           /**
            * @param set if foo request return error handler! 
           **/ 
            ErrorHandler::wine_multi_server_read();
       
         }

          break; 

        /**
         * @param UPDATE incase of put data to database
         * @since 1.3.0.0 supprt PHPWine v1.3.1.1
         * @since 01.05.2022
         **/
        case SELF::PUT : // if flag is equal to update ?? 

          if( 
        
            /**
            * @param set checkif mandatory key are exist [ query | callback | debug ]
            **/
           $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_QUERY,$method) 
        && $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_PUT,$method) 
        && $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_DEBUG,$method)
        
         ) {
     
         /**
          * @param set check if that is true ?? then validate !
          **/ 
         if( $this->wine_check_arrays_key_mandatory( SELF::MULTI_SERVER_QUERY,$method)) {
           if( $this->wine_check_arrays_key_mandatory( SELF::FILTER_MIXED,$method[SELF::MULTI_SERVER_QUERY])) {
     
             /**
             * @param set check if extract query array into string !
             **/ 
              $this->query_wine_multi_server = $this->wine_extract($method[SELF::MULTI_SERVER_QUERY][SELF::FILTER_MIXED]);
     
               /**
                * @param set process data display through foreach loop and exlpode using wine_extract() method !
               **/
              return $this->debug_true_process( 
               
              $this->server_wine_multi, // fresh multi db object 
              $this->query_wine_multi_server, // imploded or extracted query from mixed !
                 
              $method[SELF::MULTI_SERVER_PUT], // execute callable function !
              $method[SELF::MULTI_SERVER_DEBUG], //  set to TRUE to enable dubug query 
               
              'make_update_delete' );  //  end of do process update !
           }
          }
        } else {
            
         /**
          * @param set if foo request return error handler! 
         **/ 
          ErrorHandler::wine_multi_server_update();
     
       }

          break; 

        /**
         * @param DELETE incase of delete data to database
         * @since 1.3.0.0 supprt PHPWine v1.3.1.1
         * @since 01.05.2022
         **/
        case SELF::DELETE : // if flag is equal to delete ?? 

          if( 

            /**
            * @param set checkif mandatory key are exist [ query | callback | debug ]
            **/
            $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_QUERY,$method) 
         && $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_DEL,$method) 
         && $this->wine_check_arrays_key_mandatory(SELF::MULTI_SERVER_DEBUG,$method)
         
          ) {
      
          /**
           * @param set check if that is true ?? then validate !
           **/ 
          if( $this->wine_check_arrays_key_mandatory( SELF::MULTI_SERVER_QUERY,$method)) {
            if( $this->wine_check_arrays_key_mandatory( SELF::FILTER_MIXED,$method[SELF::MULTI_SERVER_QUERY])) {
      
                /**
                 * @param set process data display through foreach loop and exlpode using wine_extract() method !
                **/
               $this->query_wine_multi_server = $this->wine_extract($method[SELF::MULTI_SERVER_QUERY][SELF::FILTER_MIXED]);
      
                /**
                 * @param set process data display through foreach loop and exlpode using wine_extract() method !
                **/
                return $this->debug_true_process( 
                
                $this->server_wine_multi, // fresh multi db object
                $this->query_wine_multi_server, // imploded or extracted query from mixed !
                  
                $method[SELF::MULTI_SERVER_DEL], // execute callable function !
                $method[SELF::MULTI_SERVER_DEBUG], //  set to TRUE to enable dubug query 
                
               'make_update_delete' ); //  end of do process delete !
            }
          }
         } else {
             
          /**
           * @param set if foo request return error handler! 
          **/ 
           ErrorHandler::wine_multi_server_delete();
      
        }

          break;

          default:
          /**
            * @param BAD_REQUEST incase of foo request !
            * @since 1.0.0.0 supprt PHPWine v1.2.0.9
            * @since 04.29.2022
            **/
          print $this->wine_crud_error_handler('Require a valid Argument #FLAG : [ Vanilla::MAKE ] | [ Vanilla::FETCH ] | [ Vanilla::PUT ] | [ Vanilla::DELETE ]'
          . '<br />' 
          . '<br/>$useWine  = NEW Vanilla( Vanill::MAKE , ?string $db_table = null, array $query = [], mixed $callback = null, bool $debug = false ); '
          );

          break;

        }
    }
        
}

  /**
  * Defined request public connection 
  * @since v1.0.0.0
  * @since 03.02.2022
  **/
  public function wine_db() : object
  {
     # Establish request connection 
     return $this->requestConnection();
  }

 /**
   * Incase request dynamic last _id  
   * @var|@property   : $server
   * @var|@property   : $db_table
   * @var|@property   : $query
   * @var|@property   : $callback
   * @var|@property   : $debug 
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 03.02.2022
   **/
  public function wine_creates( string $db_table  , array $query = [], string $dataType = null , array $values = null, bool $debug = false) : mixed
  {
    
      // # If condition gets [ TRUE ] set that custom query as the main query return only string type
     if( $this->wine_check_arrays_key_mandatory( SELF::FILTER_MIXED , $this->sql_query = $query ) ) { $this->wine_insert = implode("", $query[SELF::FILTER_MIXED] );
    
        # ELSE obviously return as string as well the prapared handy insert statements
        } else {
        
       /**
        * @param _insert statement
       **/
       $this->wine_insert = (string) " INSERT INTO " 
    
                  /**
                  * @param select database table
                  **/
                 . (string) $this->db_table = $db_table  
                 . (string) " (  "
                  /**
                  * @param return array keys as column database table
                  **/
                 . (string) implode(" , ",  array_keys( (array) $this->sql_query = $query ) )
                 . (string) "  ) " 
                  /**
                  * @param VAlUE statements
                  **/
                 . (string) " VALUES "
                 . (string) " ( "
                  /**
                  * @param return array values as column database table data
                  **/
                 . (string) implode(",",  array_values( (array) $this->sql_query = $query ) )
                 . (string) " )"
                 . (string) ";";
       }                 
         
     
        if(  $debug  ) {

          $this->wine_crud_error_handler( (array) $values );
          $this->wine_crud_error_handler( $this->wine_insert  );
          exit();
        }

        $stmt = $this->db_wine->prepare( $this->wine_insert );
        $this->bind_data_type_params( $stmt, $dataType, $values );

        $stmt->execute();
        $request_data_id = $stmt->insert_id;
        return $request_data_id; 
 
   }
   

 /** Defined :Private execute for __construct() ;
   * @var|@property   : $server
   * @var|@property   : $db_table
   * @var|@property   : $query
   * @var|@property   : $callback
   * @var|@property   : $debug 
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 03.02.2022
   **/
  private function do_make( $MySQLi, ?string $db_table = null, array $query = [], mixed $callback = null, bool $debug = false) : bool|string
  {

      # If condition gets [ TRUE ] set that custom query as the main query return only string type
      if( $this->wine_check_arrays_key_mandatory( SELF::FILTER_MIXED , $this->sql_query = $query ) ) { $this->wine_insert = implode("", $query[SELF::FILTER_MIXED] );
    
        # ELSE obviously return as string as well the prapared handy insert statements
        } else {
    
       /**
        * @param _insert statement
       **/
       $this->wine_insert = (string) " INSERT INTO " 
    
                 /**
                 * @param select database table
                 **/
                . (string) $this->db_table = $db_table  
                . (string) " (  "
                 /**
                 * @param return array keys as column database table
                 **/
                . (string) implode(" , ",  array_keys( (array) $this->sql_query = $query ) )
                . (string) "  ) " 
                 /**
                 * @param VAlUE statements
                 **/
                . (string) " VALUES "
                . (string) " ( '"
                 /**
                 * @param return array values as column database table data
                 **/
                . (string) implode("','",  array_values( (array) $this->sql_query = $query ) )
                . (string) "' )"
                . (string) ";";
       }                 
         
       /**
        * @param debug or processing request !
        **/
        return $this->debug_true_process( $MySQLi, $this->wine_insert, $callback, $debug , 'make_update_delete' );
      
       }

 /** Defined :Private execute for __construct() ;
   * @var|@property   : $server
   * @var|@property   : $db_table
   * @var|@property   : $query
   * @var|@property   : $callback
   * @var|@property   : $debug 
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 03.02.2022
   **/
  private function do_fetch( $MySQLi, ?string $db_table = null, array $query = [], mixed $callback = null, bool $debug = false) : array
  {
    
   # If condition gets [ TRUE ] set that custom query as the main query return only string type
   if( $this->wine_check_arrays_key_mandatory( SELF::FILTER_MIXED , $this->sql_query = $query ) ) {  $this->wine_fetch = implode("", $query[ SELF::FILTER_MIXED ] );
   } else {
             
   /**
   * @param FETCH statement 
   **/
   $this->wine_fetch = (string) " SELECT " 
        
   /**
   * @param select column from table
   **/
   . (string) implode("", $this->sql_query )   
   . (string) " FROM "               /**
   * @param databse table 
   **/
   . (string) $this->db_table = $db_table
   . (string) ";";
           
   }
        
   /**
   * @param debug or processing request !
   **/
  return  $this->debug_true_process( $MySQLi, $this->wine_fetch, $callback, $debug, 'fetch' ); 

  }

 /** Defined :Private execute for __construct() ;
   * @var|@property   : $server
   * @var|@property   : $db_table
   * @var|@property   : $query
   * @var|@property   : $callback
   * @var|@property   : $debug 
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 03.02.2022
   **/
  private function do_update( $MySQLi, ?string $db_table = null, array $query = [], mixed $callback = null, bool $debug = false ) : bool|string
  {

    # Check if the array has ?[ condition ] and if true unset it and return appropriate
    $do_update_request = [

      # Get ony these keys and value and return as string | function array named [ only_keys_values ]
      'only_keys_values' => function( array $query) : string {  $update = array(); // Initialized empty array
       
       # Validate array if not empty! 
       if( count($query) !== 0  ) :
               
           # unset array key [ 'condition' ] 
           unset($query[SELF::QUERY_CONDITION]);

           # Loop these array of data keys and values 
           foreach ($query as $key => $value) {

             /**
             * @param set Update mepty array
             **/
            $update[] = "`". 
             /**
             * @param assigned proper separator for keys and value | return also key
             **/
            $key ."`". '='."'" . 
             /**
             * @param assigned proper separator for keys and value | return also value
             **/
            $value ."'".""; }
           
           # Everything must be string to return the array into database table pairs
           # required sanitized into ?string data type      
           return (string) implode(" , ", $update );
   
       endif;
      
       },

       # Get ony these keys and value and return as string | function array named [ condition ]
       'condition' => function( array $query) : string { 
         
         # Get key if exist the [ 'condition' ] return value from array as custom query condition
         if( $this->wine_check_arrays_key_mandatory( SELF::QUERY_CONDITION , $this->sql_query = $query )  ) : return $this->wine_update =  implode("", $query[SELF::QUERY_CONDITION] ) ; 
        else : 
          
          print "<pre>";
          /**
           * @param Required [ 'condition' ] if update in order to process database update
           * Implement [ condtion ] error handler !
           **/
          print_r( " Required [ 'condition' ] array key process database update : [ condition => [ ' WHERE id = ? ' ] ] <br />" );
          print "<hr />";
          print_r( " OR use : [ 'mixed' => [ ' YOUR_SQL_QUERY ' ] ] " );
          print "</pre>";
        die();   

      endif; 
        
       }      

    ];

    # If condition gets [ TRUE ] set that custom query as the main query return only string type
    if( $this->wine_check_arrays_key_mandatory( SELF::FILTER_MIXED , $this->sql_query = $query ) ) {  $this->wine_update = implode("", $query[ SELF::FILTER_MIXED ] );
     } else {
  
      /**
      * @param UPDATE statement 
      **/
      $this->wine_update = (string) " UPDATE " 

           /**
           * @param select database table
           **/
           . (string) $this->db_table = $db_table 
           . (string) " SET " 
           /**
           * @param do_update_request only_keys_values 
           **/
           . (string) $do_update_request['only_keys_values']( $this->sql_query = $query )  . " " 
           /**
           * @param do_update_request condition 
           **/
           . (string) $do_update_request['condition']( $this->sql_query = $query )
           . (string) ";";

      }

   /**
    * @param debug or processing request !
    **/
     return $this->debug_true_process( $MySQLi, $this->wine_update, $callback, $debug, 'make_update_delete' );
    
  }

 /** Defined :Private execute do_delete() ;
   * @var|@property   : $server
   * @var|@property   : $db_table
   * @var|@property   : $query
   * @var|@property   : $callback
   * @var|@property   : $debug 
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9 ++
   * @since 03.02.2022
   **/
  private function do_delete( $MySQLi, $col_name, $query , $callback , $debug )
  {

   # Initial Prepare empty SQL Query base on dev-mode cases
   # Check if the array has ?[ condition ] and if true unset it and return appropriate
   $do_delete_request = [

    # Get ony these keys and value and return as string | function array named [ only_keys_values ]
    'delete_only_values' => function( array $query) : string {  $delete = array(); // Initialized empty array
     
     # Validate array if not empty! 
     if( count($query) !== 0  ) :
             
         # unset array key [ 'condition' ] 
         unset($query[SELF::QUERY_CONDITION]);

         # Loop these array of data keys and values 
         foreach ($query as $key => $value) {

           /**
           * @param set Update mepty array
           **/
          $delete[] = $value ; 
         
          }
         
         # Everything must be string to return the array into database table pairs
         # required sanitized into ?string data type      
         return (string) implode(" , ", $delete );
 
     endif;
    
     },

     # Get ony these keys and value and return as string | function array named [ condition ]
     'condition' => function( array $query) : string { 
       
       # Get key if exist the [ 'condition' ] return value from array as custom query condition
       if( $this->wine_check_arrays_key_mandatory( SELF::QUERY_CONDITION , $this->sql_query = $query )  ) : return $this->wine_delete =  implode("", $query[SELF::QUERY_CONDITION] ) ; 
      else : 
        
        print "<pre>";
        /**
         * @param Required [ 'condition' ] if update in order to process database update
         * Implement [ condtion ] error handler !
         **/
        print_r( " Required [ 'condition' ] array key process database delete : [ condition => [ ' WHERE id = ? ' ] ] <br />" );
        print "<hr />";
        print_r( " OR use : [ 'mixed' => [ ' YOUR_SQL_QUERY ' ] ] " );
        print "</pre>";
      die();   

    endif; 
      
     }      

  ];

  # If condition gets [ TRUE ] set that custom query as the main query return only string type
  if( $this->wine_check_arrays_key_mandatory( SELF::FILTER_MIXED , $this->sql_query = $query ) ) {  $this->wine_delete = implode("", $query[ SELF::FILTER_MIXED ] );
   } else {

    /**
    * @param DELETE statement 
    **/
    $this->wine_delete = (string) " DELETE " 

         /**
         * @param select database table
         **/
         . (string) $this->col_name = $col_name 
         . (string) " FROM "
         /**
         * @param do_delete_request only_keys_values 
         **/
         . (string) $do_delete_request['delete_only_values']( $this->sql_query = $query )  . " " 
         /**
         * @param do_update_request condition 
         **/
         . (string) $do_delete_request['condition']( $this->sql_query = $query )
         . (string) ";";

    }

  /**
   * @param debug or processing request !
   **/
   return $this->debug_true_process( $MySQLi, $this->wine_delete, $callback, $debug, 'make_update_delete' );
    
  }

  /**
   * @method : wine_fetch as method ();
   * @method : wine_update as method ();
   * @method : wine_delete as method ();
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 03.02.2022
   **/
  public function wine_fetch(  ?string $db_table = null, array $query = [], mixed $callback = null, bool $debug = false)  : array       { return  $this->do_fetch(  $this->db_wine, $db_table, $query , $callback , $debug ); }
  public function wine_update( ?string $db_table = null, array $query = [], mixed $callback = null, bool $debug = false ) : bool|string { return  $this->do_update( $this->db_wine, $db_table, $query , $callback , $debug ); }
  public function wine_delete( ?string $col_name = null, array $query = [], mixed $callback = null, bool $debug = false ) : bool|string { return  $this->do_delete( $this->db_wine, $col_name, $query , $callback , $debug ); }

  /**
   * Define : extract as implode wine vanilla
   * @var|@property   : $separator
   * @var|@property   : $extracting
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 03.04.2022
   **/
  static public function wine_extract( array $extracting = [] ) : string
  {
    return implode( $separator = '', $extracting );
  }
    
 /**
   * @var|@property   : $server
   * @var|@property   : $db_table
   * @var|@property   : $query
   * @var|@property   : $callback
   * @var|@property   : $debug 
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 02.28.2022
   **/
   private function debug_true_process( $MySQLi, string $wine_query = null , $callback = null , bool $debug , string $action_type = 'default') : mixed 
   {
          # Set [ TRUE ] return debug to access custom query
          if( $debug == true ) :

            print "<pre>";
            /**
             * @param return current value 
             **/
            print_r( $wine_query );
            print "</pre>";
            print "<hr />";
            print "<pre>";
            /**
             * @param return current value and data type
             **/
            var_dump( $wine_query );
            print "</pre>";
            die();
          
          else :
              
        /**
        * @param process return appropriate process base on request on __constructor [ CREATE ] [ READ ] [ UPDATE ] [ DELETE ]
        **/ 
        switch ( $action_type ) 
        {
          
          /**
           * @param return if the process would be a CRU [ CREATE ] [ UDPATE ] [ DELETE ]
          **/       
          case 'make_update_delete':
           return (bool)(string)(CRUDWine::wine_request_call_back( $MySQLi, $wine_query , $callback ) . true );
           break; 

          /**
           * @param return if the process would be a Read [ FETCH ]
          **/  
          case 'fetch':
           return (array)(CRUDWine::wine_request_call_back_fetch( $MySQLi , $wine_query, $callback, $debug));
           break;
          
          /**
           * @param such, everything is false then !
          **/
          default:
           return false . 'CRUD request __construct() not accessable !' ;
    
           break;

        }        
    
        endif;
   }

 }

/**
 * 
 * Would you like me to treat a cake and coffee ?
 * Become a donor, Because with you! We can build more...
 * Donate:
 * GCash : +639650332900
 * Paypal account: syncdevprojects@gmail.com
 * 
 **/
