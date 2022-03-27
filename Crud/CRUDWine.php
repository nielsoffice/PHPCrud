<?php 

namespace PHPWineVanillaFlavour\Plugins\PHPCrud\Crud;

use \PHPWineVanillaFlavour\Plugins\PHPCrud\Crud\DBWine;
use \PHPWineVanillaFlavour\Plugins\PHPCrud\Crud\ErrorHandler;

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

class CRUDWine extends  DBWine {

  use ErrorHandler;

  /**
   * Defined: Database Object
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 02.28.2022
   **/   
  protected function requestConnection() : object {
   
    // Establish Connection 
    $db_wine = new \mysqli( DBWine::DB_HOST, DBWine::DB_USERNAME, DBWine::DB_PASSWORD, DBWine::DB_NAME );
    // Verify connection status
    if( $db_wine  === false ) { die("ERROR: Could not connect. " . $db_wine->connect_error); }
    
    // Then return activated connection
    $db_wine->set_charset("utf8");
    return $db_wine;
  
  }

  /**
   * Defined: execute
   * @var|@property   : $query
   * @var|@property   : $callback 
   * @var|@property   : $debug  
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 02.28.2022
   **/   
  protected function execute(array $query, string $data_type = "", array $data_values = [] ) : void    
  {   
      # CHECK IF HAS QUERY SET 
      $stmt = $this->db_wine->prepare($query);
      
      # IF BIND AND VALUE DATA INSERTED IS NOT EMPTY THEN BIND IT DO INSERT 
      if (! empty($data_type ) && ! empty($data_values)) {
          # RUN BIND PARAM
          $this->bind_data_type_params($stmt, $data_type, $data_values);
      }
      # execute data // means run onsert to database
      $stmt->execute();
  }

  /**
   * Defined: execute
   * @var|@property   : $stmt
   * @var|@property   : $data_type
   * @var|@property   : $data_values
   * @since 1.0.0.0 supprt PHPWine v1.2.0.9
   * @since 02.28.2022
   **/ 
  protected function bind_data_type_params($stmt, string $data_type, array $data_values = [] ) : void
  {    
    if( $stmt )
    {
      # Initialized emoty arrays of data
      $request_data[] = & $data_type;
      # loop through it
      for ($i = 0; $i < count($data_values); $i ++) { $request_data[] = & $data_values[$i]; }
      # set callable then return bind param associated with valid numbers of value !
      call_user_func_array(array( $stmt, 'bind_param' ), $request_data);

    } else {
      
      $this->wine_crud_error_handler( '

      '.ERRORHANDLER::$COULD_NOT_CONNECT.' 
      
      '.ERRORHANDLER::$ERROR_MSG.'
      '.ERRORHANDLER::$PHPCRUD_DB_CONFIG.'
      '.ERRORHANDLER::DB_ERROR_HANDLER( DBWine::DB_HOST, DBWine::DB_USERNAME, DBWine::DB_PASSWORD, DBWine::DB_NAME ).' 
      
      '

      );
      exit();
    }
  }  

  /**
   * @var|@property   : $server
   * @var|@property   : $query
   * @var|@property   : $callback
   * @since v1.2.0.9
   * @since 02.28.2022
   **/                                
    protected function wine_request_call_back( mixed $server = null , string $query = null , mixed $callback = null ) : mixed {
     
      # do insert multiple value from arrays of data
      if ( $server->multi_query( $query ) === TRUE)  : 
        
        return ( !is_null($callback) && !function_exists($callback) ) ? $this->wine_crud_error_handler( 
          
           ERRORHANDLER::callBackRequestErrorHandler( $callback )       
          
        ) :  // return call back if set
        ( ( !is_null($callback) && function_exists($callback) ) ?  $callback(true) : false ) ;  

     # else if error connection server return false disconnected !
     else                                           : return "Error: " . $query . "<br>" . $server->error;

    endif;
   
    # Prepare exit !
    return false;
    exit();

    }

  /**
   * @var|@property   : $server
   * @var|@property   : $query
   * @var|@property   : $callback
   * @since v1.2.0.9
   * @since 02.28.2022
   **/
    protected function wine_request_call_back_fetch( mixed $server = null , string $query = null , mixed $callback = null ) : array {
      
      # Initialized emoty arrays of data  
      $wine_array_of_data = array();
          // Error handler cb 
          if( !is_null($callback) && !function_exists($callback) ) {
           
            $this->wine_crud_error_handler( ERRORHANDLER::callBackRequestErrorHandler( $callback ) );
            exit();

        }
        elseif( !is_null($callback) && function_exists($callback) ) {

         # check if wine is connected to server 
        if ( $wine_result = $server->query( $query )) :
          
                  # then loop data from databse as requested ionto call back function ! 
          if ( $wine_result->num_rows > 0 ) {  while($wine_data = $wine_result->fetch_assoc()) {  $wine_array_of_data[] = $wine_data; }
            
            # check array sould not empty !
            # then return data through call back function !
            if( !empty($wine_array_of_data) ) { return (array) $callback($wine_array_of_data); }

            # else return false !
            } else {  return $callback(false); }
      
      endif;

      }
      
     # Prepare exit !
    return [];
 
     }

  /**
   * @var|@property   : $key
   * @var|@property   : $request
   * @since v1.2.0.9
   * @since 02.28.2022
   **/
    protected function wine_check_arrays_key_mandatory(string $key, array $request)  : bool {
     
     # just check array key is exist ? !
     if( array_key_exists( $key, $request )) : return true; endif;

     # Prepare exit !
     return false;
     exit();
   
    }

  /**
   * @var|@property   : $debug error_handler
   * @since v1.2.0.9
   * @since 02.28.2022
   **/
  protected function wine_crud_error_handler( mixed $debug ) {
 
      print "<pre>";
      /**
      * @param return current value 
      **/
      print_r( $debug );
      print "</pre>";

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
