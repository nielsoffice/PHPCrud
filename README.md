# PHPCrud
PHPCrud is a CRUD System designed to extend PHPWine functionality crud features.
<br >
<h3>Downloading PHPCrud Plugin:</h3>
 
```PHP
// Download Plugin latest version 
 $ git clone https://github.com/nielsofficeofficial/PHPCrud

// Download specified version ( --branch tag ) --branch  v1.2.0.0 
 $ git clone https://github.com/nielsofficeofficial/PHPCrud --branch  v1.2.0.4
```
<h3>Plugin PHPCrud Installation:</h3>

```PHP

| - root folder
    | - Library folder // create Library folder if not yet exist !
      | - PHPWine
          | - Plugins
             |- PHPCrud
          | - Wine
            | - src
            | - PHPWine.php
            | - prop.php
            | - LICENSE
            | - README.md
            | - composer.json
                    
```
<h3>Dependency Installation:</h3>

```PHP
# Namespace / Dependency
use \PHPWine\VanillaFlavour\Plugins\PHPCrud\Crud\Vanilla;
```
```PHP
# FLAG [ CRUD ] : (  Optional ) 
// Create       // Read          // Update      // Delete 
Vanilla::MAKE | Vanilla::FETCH | Vanilla::PUT | Vanilla::DELETE
```
```PHP
 // Database Configuration
 $path > ./plugins/Crud/DBWine.php
  
 # HOST OR SERVER NAME
 const DB_HOST     = 'localhost';
 # HOST USER NAME
 const DB_USERNAME = 'root';
 # HOST PASSWORD
 const DB_PASSWORD = '';
 # DATBASE NAME
 const DB_NAME     = '';

-----------------------------------

 // New instance, Incase request to Join in single database connection
 $wineVanill = new Vanilla();
 // Establish public connection 
 $wine_db    = $new->wine_db();
```

```PHP
# Create or Insert Data to Database

 if( $wine_db === false ) { die("ERROR: Could not connect. " . $wine_db->connect_error); }

 // Create incase insert bulk & join w/request last ID : 
 $wine = $wineVanilla->wine_creates( 'tbl_name' , [ 
     
    'col_name_1'  => '?', // !must be like : [ '?' ][ $debug : true ] " INSERT INTO tbl_name (col1, col2) VALUES ( ?,? ) ";
    'col_name_2'  => '?'

 ] , "ss" , array(
        
    $value_col_name_1,
    $value_col_name_2 
    
 ));
 
 echo ( !empty($wine) ) ? "Last_id : {$wine} Added new record! " : ''; 

 // OR Create single data
 $c = new Vanilla( Vanilla::MAKE, 'tbl_name', [ 
     
     'col_name_1'  => 'col_name_1_val',
     'col_name_2'  => 'col_name_2_val'
  
 ] , 'callBack' );

 function callBack( $new_record ) { if( $new_record ) { echo  " Added new record! "; }  }

 $wine_db->close();
```
```PHP
# Read Data from Database

if( $wine_db === false ) { die("ERROR: Could not connect. " . $wine_db->connect_error); }

// Execution
function callBack( $read_datas ) { if( $read_datas ) { foreach( $read_datas as  $val ) { echo $val["col_name"]; }  } }

// Query
$wineVanilla->wine_fetch(  'tbl_name', [ 'name' ], 'callBack' );

// OR
$wine  = NEW Vanilla( Vanilla::FETCH, 'tbl_name',  [
     
    'col_name',
     
] , 'callBack' );

$wine_db->close();
```
```PHP
# Update data from Database

if( $wine_db === false ) { die("ERROR: Could not connect. " . $wine_db->connect_error); }

function callBack( $updated ) { if( $updated ) { echo  " Updated record! "; } }

 // Update 
 $wineVanilla->wine_update( 'tbl_info', [
  
     'col_name'  => 'col_name_val',
     'condition' => [" WHERE id  = 107 "] 

 ] , 'callBack' );

 // OR
 $wine = new Vanilla( Vanilla::PUT, 'table_name', [

     'col_name'  => 'Value_1',
     'condition' => [" WHERE tabel_id  = 1 "] 
    
 ] , 'callBack' );

$wine_db->close();
```
```PHP
# Delete data from Database
if( $wine_db === false ) { die("ERROR: Could not connect. " . $wine_db->connect_error); }

function callBack( $deleted ) { if( $deleted ) { echo  " Deleted record! "; } }

// col_name OR ( * ) if selected all data
// empty table run with [ 'mixed' ]
$wineVanilla->wine_delete( '', [
  
     'table_name',
     'condition' => [" WHERE id  = 107 "] 

 ] , 'callBack' );

// OR
$useWine = new Vanilla( Vanilla::DELETE, '', [

    'table_name',
    'condition' => [" WHERE id  = 1 "] 
    
] , 'callBack' );

$wine_db->close();
```

```php
// Query incase of mixed 
$query = [ 'mixed' => [" DELETE FROM `tbl_name` WHERE `col_id` = 179; "] ] 

$useWine->wine_delete( null, $query , 'callBack' );

// Incase of Query debugging set $debug = true | last @param
$useWine->wine_delete( 'tbl_name', $query , 'callBack',  true );

# Registered array keys 
[ 'condition' ] && [ 'mixed' ]

# PHPCrud Flags
// Create
$wineCrud = new Vanilla(Vanilla::MAKE,   string $tbl_name = null , array $query = [] , mixed $callback = null, bool $debug = false );
// Read
$wineCrud = new Vanilla(Vanilla::FETCH,  string $tbl_name = null , array $query = [] , mixed $callback = null, bool $debug = false );
// Update
$wineCrud = new Vanilla(Vanilla::PUT,    string $tbl_name = null , array $query = [] , mixed $callback = null, bool $debug = false );
// Delete
$wineCrud = new Vanilla(Vanilla::DELETE, string $tbl_name = null , array $query = [] , mixed $callback = null, bool $debug = false );
```
<a href="https://github.com/nielsofficeofficial/PHPCrud-sample-data"> Click here Sample data > </a>  
<hr /> 

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHPWine plugin Vanilla Flavour to repository<br /> 
php.net : To oppurtunity Develop web application using corePHP - PHPFrameworks<br />
</h5>

__LICENSE BY MIT__

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
<br />

<hr />
Would you like me to treat a cake and coffee ? <br />
Become a donor, Because with you! We can build more... 

Donate: <br />
GCash : +639650332900 <br /> 
Paypal account: syncdevprojects@gmail.com
<hr />
<br />
Thanks and good luck! 
