<?php 

namespace PHPWine\VanillaFlavour\Plugins\PHPCrud\Crud;

 use \PHPWine\VanillaFlavour\Plugins\PHPCrud\Crud\CRUDWine;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour - PHPCRUD (Plugin) v1.0.0.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour - PHPCRUD (Plugin) v1.0.0.0 free software: you can redistribute it and/or modify.
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
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   1.0.0.0 support PHPWine v1.2.0.9
 * @since     03.02.2022
 * 
 * @method wine_creates();
 * @method wine_fetch();
 * @method wine_update();
 * @method wine_delete();
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
  * @var 
  * @property Connection
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

  private function do_delete( $MySQLi, $col_name, $query , $callback , $debug )
  {

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
           * @param return if the process would be a CUD [ CREATE ] [ UPDATE ] [ DELETE ]
          **/       
          case 'make_update_delete':
           return (bool)(string)(CRUDWine::wine_request_call_back( $MySQLi, $wine_query , $callback ) . true);
           break; 

          /**
           * @param return if the process would be a Read [ FETCH ]
          **/  
          case 'fetch':
           return (array)(CRUDWine::wine_request_call_back_fetch( $MySQLi , $this->wine_fetch, $callback, $debug));
           break;
          
          /**
           * @param such, everything is false then !
          **/
          default:
           return false . 'CRUD request __construct() not accessable !' ;
           exit();
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