<?php
die('This file is used for development purposes only.');
/**
 * PhpStorm Code Completion to CodeIgniter + HMVC
 *
 * @package       CodeIgniter
 * @subpackage    PhpStorm
 * @category      Code Completion
 * @version       3.1.0
 * @author        Natan Felles
 * @link          http://github.com/natanfelles/codeigniter-phpstorm

 * @author        src modified Oleg Muraveyko (aka Antson)
 */

/**
 * Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @link		https://codeigniter.com/user_guide/general/controllers.html
 * @link        https://github.com/bcit-ci/CodeIgniter/blob/develop/system/core/Controller.php
 *
 *
 * @property CI_Benchmark        $benchmark                           This class enables you to mark points and calculate the time difference between them. Memory consumption can also be displayed.
 * @property CI_Calendar         $calendar                            This class enables the creation of calendars
 * @property CI_Cache            $cache                               Caching Class
 * @property CI_Cart             $cart                                Shopping Cart Class
 * @property CI_Config           $config                              This class contains functions that enable config files to be managed
 * @property CI_Controller       $controller                          This class object is the super class that every library in CodeIgniter will be assigned to
 * @property CI_DB_forge         $dbforge                             Database Forge Class
 * @property CI_DB_query_builder $db                                  This is the platform-independent base Query Builder implementation class
 * @property CI_DB_utility       $dbutil                              Database Utility Class
 * @property CI_Driver_Library   $driver                              Driver Library Class
 * @property CI_Email            $email                               Permits email to be sent using Mail, Sendmail, or SMTP
 * @property CI_Encrypt          $encrypt                             Provides two-way keyed encoding using Mcrypt
 * @property CI_Encryption       $encryption                          Provides two-way keyed encryption via PHP's MCrypt and/or OpenSSL extensions
 * @property CI_Exceptions       $exceptions                          Exceptions Class
 * @property CI_Form_validation  $form_validation                     Form Validation Class
 * @property CI_FTP              $ftp                                 FTP Class
 * @property CI_Hooks            $hooks                               Provides a mechanism to extend the base system without hacking
 * @property CI_Image_lib        $image_lib                           Image Manipulation class
 * @property CI_Input            $input                               Pre-processes global input data for security
 * @property CI_Javascript       $javascript                          Javascript Class
 * @property CI_Jquery           $jquery                              Jquery Class
 * @property CI_Lang             $lang                                Language Class
 * @property CI_Loader           $load                                Loads framework components
 * @property CI_Log              $log                                 Logging Class
 * @property CI_Migration        $migration                           All migrations should implement this, forces up() and down() and gives access to the CI super-global
 * @property MY_Model            $model                               CodeIgniter Model Class
 * @property CI_Output           $output                              Responsible for sending final output to the browser
 * @property CI_Pagination       $pagination                          Pagination Class
 * @property MY_Parser           $parser                              Parser Class
 * @property CI_Profiler         $profiler                            This class enables you to display benchmark, query, and other data in order to help with debugging and optimization.
 * @property MY_Router           $router                              Parses URIs and determines routing
 * @property CI_Security         $security                            Security Class
 * @property CI_Session          $session                             Session Class
 * @property CI_Table            $table                               Lets you create tables manually or from database result objects, or arrays
 * @property CI_Trackback        $trackback                           Trackback Sending/Receiving Class
 * @property CI_Typography       $typography                          Typography Class
 * @property CI_Unit_test        $unit                                Simple testing class
 * @property CI_Upload           $upload                              File Uploading Class
 * @property CI_URI              $uri                                 Parses URIs and determines routing
 * @property CI_User_agent       $agent                               Identifies the platform, browser, robot, or mobile device of the browsing agent
 * @property CI_Xmlrpc           $xmlrpc                              XML-RPC request handler class
 * @property CI_Xmlrpcs          $xmlrpcs                             XML-RPC server class
 * @property CI_Zip              $zip                                 Zip Compression Class
 * @property CI_Utf8             $utf8                                Provides support for UTF-8 environments
 *
 */
class CI_Controller {


    /**
     * свои зависимости добавлять после вызова родительского конструктора
     *
     * @link https://www.codeigniter.com/userguide3/general/controllers.html#class-constructors
     */
     public function __construct(){}

    /**
     * Вы можете прекрыть стандартное echo $output от кодеигнитора
     * @param  string $output               Содержимое CI_Output
     * @return void
     */
	public function _output($output){}

	/**
     * Remapping Method
     * CodeIgniter позволяет переопределить стандартное поведение по определению какой метод класса должен быть вызван.
     *
     * @var string $method the second segment of the URI typically determines which method in the controller gets called.
     * @var array $params
     *
	 * @link https://www.codeigniter.com/userguide3/general/controllers.html#remapping-method-calls
	 */
    public function _remap($method, $params = array()){}

    /**
     * Returns current CI instance object
     *
     * @return CI_Controller
     */
    public static function get_instance(){return null;}
}

/**
 * @property CI_Benchmark        $benchmark                           This class enables you to mark points and calculate the time difference between them. Memory consumption can also be displayed.
 * @property CI_Calendar         $calendar                            This class enables the creation of calendars
 * @property CI_Cache            $cache                               Caching Class
 * @property CI_Cart             $cart                                Shopping Cart Class
 * @property CI_Config           $config                              This class contains functions that enable config files to be managed
 * @property CI_Controller       $controller                          This class object is the super class that every library in CodeIgniter will be assigned to
 * @property CI_DB_forge         $dbforge                             Database Forge Class
 * @property CI_DB_query_builder $db                                  This is the platform-independent base Query Builder implementation class
 * @property CI_DB_utility       $dbutil                              Database Utility Class
 * @property CI_Driver_Library   $driver                              Driver Library Class
 * @property CI_Email            $email                               Permits email to be sent using Mail, Sendmail, or SMTP
 * @property CI_Encrypt          $encrypt                             Provides two-way keyed encoding using Mcrypt
 * @property CI_Encryption       $encryption                          Provides two-way keyed encryption via PHP's MCrypt and/or OpenSSL extensions
 * @property CI_Exceptions       $exceptions                          Exceptions Class
 * @property CI_Form_validation  $form_validation                     Form Validation Class
 * @property CI_FTP              $ftp                                 FTP Class
 * @property CI_Hooks            $hooks                               Provides a mechanism to extend the base system without hacking
 * @property CI_Image_lib        $image_lib                           Image Manipulation class
 * @property CI_Input            $input                               Pre-processes global input data for security
 * @property CI_Javascript       $javascript                          Javascript Class
 * @property CI_Jquery           $jquery                              Jquery Class
 * @property CI_Lang             $lang                                Language Class
 * @property CI_Loader           $load                                Loads framework components
 * @property CI_Log              $log                                 Logging Class
 * @property CI_Migration        $migration                           All migrations should implement this, forces up() and down() and gives access to the CI super-global
 * @property CI_Model            $model                               CodeIgniter Model Class
 * @property CI_Output           $output                              Responsible for sending final output to the browser
 * @property CI_Pagination       $pagination                          Pagination Class
 * @property CI_Parser           $parser                              Parser Class
 * @property CI_Profiler         $profiler                            This class enables you to display benchmark, query, and other data in order to help with debugging and optimization.
 * @property CI_Router           $router                              Parses URIs and determines routing
 * @property CI_Security         $security                            Security Class
 * @property CI_Session          $session                             Session Class
 * @property CI_Table            $table                               Lets you create tables manually or from database result objects, or arrays
 * @property CI_Trackback        $trackback                           Trackback Sending/Receiving Class
 * @property CI_Typography       $typography                          Typography Class
 * @property CI_Unit_test        $unit                                Simple testing class
 * @property CI_Upload           $upload                              File Uploading Class
 * @property CI_URI              $uri                                 Parses URIs and determines routing
 * @property CI_User_agent       $agent                               Identifies the platform, browser, robot, or mobile device of the browsing agent
 * @property CI_Xmlrpc           $xmlrpc                              XML-RPC request handler class
 * @property CI_Xmlrpcs          $xmlrpcs                             XML-RPC server class
 * @property CI_Zip              $zip                                 Zip Compression Class
 * @property CI_Utf8             $utf8                                Provides support for UTF-8 environments
 */
class CI_Model {

	public function __construct()
	{
	}
}

/**
 * @property CI_Benchmark        $benchmark                           This class enables you to mark points and calculate the time difference between them. Memory consumption can also be displayed.
 * @property CI_Calendar         $calendar                            This class enables the creation of calendars
 * @property CI_Cache            $cache                               Caching Class
 * @property CI_Cart             $cart                                Shopping Cart Class
 * @property CI_Config           $config                              This class contains functions that enable config files to be managed
 * @property CI_Controller       $controller                          This class object is the super class that every library in CodeIgniter will be assigned to
 * @property CI_DB_forge         $dbforge                             Database Forge Class
 * @property CI_DB_query_builder $db                                  This is the platform-independent base Query Builder implementation class
 * @property CI_DB_utility       $dbutil                              Database Utility Class
 * @property CI_Driver_Library   $driver                              Driver Library Class
 * @property CI_Email            $email                               Permits email to be sent using Mail, Sendmail, or SMTP
 * @property CI_Encrypt          $encrypt                             Provides two-way keyed encoding using Mcrypt
 * @property CI_Encryption       $encryption                          Provides two-way keyed encryption via PHP's MCrypt and/or OpenSSL extensions
 * @property CI_Exceptions       $exceptions                          Exceptions Class
 * @property CI_Form_validation  $form_validation                     Form Validation Class
 * @property CI_FTP              $ftp                                 FTP Class
 * @property CI_Hooks            $hooks                               Provides a mechanism to extend the base system without hacking
 * @property CI_Image_lib        $image_lib                           Image Manipulation class
 * @property CI_Input            $input                               Pre-processes global input data for security
 * @property CI_Javascript       $javascript                          Javascript Class
 * @property CI_Jquery           $jquery                              Jquery Class
 * @property CI_Lang             $lang                                Language Class
 * @property CI_Loader           $load                                Loads framework components
 * @property CI_Log              $log                                 Logging Class
 * @property CI_Migration        $migration                           All migrations should implement this, forces up() and down() and gives access to the CI super-global
 * @property CI_Model            $model                               CodeIgniter Model Class
 * @property CI_Output           $output                              Responsible for sending final output to the browser
 * @property CI_Pagination       $pagination                          Pagination Class
 * @property CI_Parser           $parser                              Parser Class
 * @property CI_Profiler         $profiler                            This class enables you to display benchmark, query, and other data in order to help with debugging and optimization.
 * @property CI_Router           $router                              Parses URIs and determines routing
 * @property CI_Security         $security                            Security Class
 * @property CI_Session          $session                             Session Class
 * @property CI_Table            $table                               Lets you create tables manually or from database result objects, or arrays
 * @property CI_Trackback        $trackback                           Trackback Sending/Receiving Class
 * @property CI_Typography       $typography                          Typography Class
 * @property CI_Unit_test        $unit                                Simple testing class
 * @property CI_Upload           $upload                              File Uploading Class
 * @property CI_URI              $uri                                 Parses URIs and determines routing
 * @property CI_User_agent       $agent                               Identifies the platform, browser, robot, or mobile device of the browsing agent
 * @property CI_Xmlrpc           $xmlrpc                              XML-RPC request handler class
 * @property CI_Xmlrpcs          $xmlrpcs                             XML-RPC server class
 * @property CI_Zip              $zip                                 Zip Compression Class
 * @property CI_Utf8             $utf8                                Provides support for UTF-8 environments
 */
class MX_Controller {

	public function __construct()
	{
	}
}

/**
 * Database Driver Class
 *
 * This is the platform-independent base DB implementation class.
 * This class will not be called directly. Rather, the adapter
 * class for the specific database will extend and instantiate it.
 *
 * @link		https://codeigniter.com/user_guide/database/
 */
abstract class CI_DB_driver {

    /**
     * Data Source Name / Connect string
     *
     * @var	string
     */
    public $dsn;

    /**
     * Username
     *
     * @var	string
     */
    public $username;

    /**
     * Password
     *
     * @var	string
     */
    public $password;

    /**
     * Hostname
     *
     * @var	string
     */
    public $hostname;

    /**
     * Database name
     *
     * @var	string
     */
    public $database;

    /**
     * Database driver
     *
     * @var	string
     */
    public $dbdriver		= 'mysqli';

    /**
     * Sub-driver
     *
     * @used-by	CI_DB_pdo_driver
     * @var	string
     */
    public $subdriver;

    /**
     * Table prefix
     *
     * @var	string
     */
    public $dbprefix		= '';

    /**
     * Character set
     *
     * @var	string
     */
    public $char_set		= 'utf8';

    /**
     * Collation
     *
     * @var	string
     */
    public $dbcollat		= 'utf8_general_ci';

    /**
     * Encryption flag/data
     *
     * @var	mixed
     */
    public $encrypt			= FALSE;

    /**
     * Swap Prefix
     *
     * @var	string
     */
    public $swap_pre		= '';

    /**
     * Database port
     *
     * @var	int
     */
    public $port			= '';

    /**
     * Persistent connection flag
     *
     * @var	bool
     */
    public $pconnect		= FALSE;

    /**
     * Connection ID
     *
     * @var	object|resource
     */
    public $conn_id			= FALSE;

    /**
     * Result ID
     *
     * @var	object|resource
     */
    public $result_id		= FALSE;

    /**
     * Debug flag
     *
     * Whether to display error messages.
     *
     * @var	bool
     */
    public $db_debug		= FALSE;

    /**
     * Benchmark time
     *
     * @var	int
     */
    public $benchmark		= 0;

    /**
     * Executed queries count
     *
     * @var	int
     */
    public $query_count		= 0;

    /**
     * Bind marker
     *
     * Character used to identify values in a prepared statement.
     *
     * @var	string
     */
    public $bind_marker		= '?';

    /**
     * Save queries flag
     *
     * Whether to keep an in-memory history of queries for debugging purposes.
     *
     * @var	bool
     */
    public $save_queries		= TRUE;

    /**
     * Queries list
     *
     * @see	CI_DB_driver::$save_queries
     * @var	string[]
     */
    public $queries			= array();

    /**
     * Query times
     *
     * A list of times that queries took to execute.
     *
     * @var	array
     */
    public $query_times		= array();

    /**
     * Data cache
     *
     * An internal generic value cache.
     *
     * @var	array
     */
    public $data_cache		= array();

    /**
     * Transaction enabled flag
     *
     * @var	bool
     */
    public $trans_enabled		= TRUE;

    /**
     * Strict transaction mode flag
     *
     * @var	bool
     */
    public $trans_strict		= TRUE;


    /**
     * Cache On flag
     *
     * @var	bool
     */
    public $cache_on		= FALSE;

    /**
     * Cache directory path
     *
     * @var	bool
     */
    public $cachedir		= '';

    /**
     * Cache auto-delete flag
     *
     * @var	bool
     */
    public $cache_autodel		= FALSE;

    /**
     * DB Cache object
     *
     * @see	CI_DB_cache
     * @var	object
     */
    public $CACHE;


// --------------------------------------------------------------------

    /**
     * Class constructor
     *
     * @param	array	$params
     * @return	void
     */
    public function __construct($params){}


    /**
     * Initialize Database Settings
     *
     * @return	bool
     */
    public function initialize()
    {
    }


    /**
     * DB connect
     *
     * This is just a dummy method that all drivers will override.
     * @param boolean $persistent
     *
     * @return	mixed
     */
    public function db_connect($persistent=FALSE)
    {
    }


    /**
     * Persistent database connection
     *
     * @return	mixed
     */
    public function db_pconnect(){}


    /**
     * Reconnect
     *
     * Keep / reestablish the db connection if no queries have been
     * sent for a length of time exceeding the server's idle timeout.
     *
     * This is just a dummy method to allow drivers without such
     * functionality to not declare it, while others will override it.
     *
     * @return	void
     */
    public function reconnect(){}


    /**
     * Select database
     *
     * This is just a dummy method to allow drivers without such
     * functionality to not declare it, while others will override it.
     * @param string $database
     *
     * @return	bool
     */
    public function db_select($database){}


    /**
     * Last error
     *
     * @return	array
     */
    public function error()
    {
        return array('code' => NULL, 'message' => NULL);
    }


    /**
     * Set client character set
     *
     * @param	string
     * @return	bool
     */
    public function db_set_charset($charset){}


    /**
     * The name of the platform in use (mysql, mssql, etc...)
     *
     * @return	string
     */
    public function platform(){}


    /**
     * Database version number
     *
     * Returns a string containing the version of the database being used.
     * Most drivers will override this method.
     *
     * @return	string
     */
    public function version(){}

    /**
     * Execute the query
     *
     * Accepts an SQL string as input and returns a result object upon
     * successful execution of a "read" type query. Returns boolean TRUE
     * upon successful execution of a "write" type query. Returns boolean
     * FALSE upon failure, and if the $db_debug variable is set to TRUE
     * will raise an error.
     *
     * @param	string	$sql
     * @param	array	$binds = FALSE		An array of binding data
     * @param	bool	$return_object = NULL
     * @return	mixed
     */
    public function query($sql, $binds = FALSE, $return_object = NULL)
    {
    }


    /**
     * Load the result drivers
     *
     * @return	string	the name of the result class
     */
    public function load_rdriver()
    {
    }



    /**
     * Simple Query
     * This is a simplified version of the query() function. Internally
     * we only use it when running transaction commands since they do
     * not require all the features of the main query() function.
     *
     * @param	string	the sql query
     * @return	mixed
     */
    public function simple_query($sql)
    {
    }


    /**
     * Disable Transactions
     * This permits transactions to be disabled at run-time.
     *
     * @return	void
     */
    public function trans_off()
    {
    }


    /**
     * Enable/disable Transaction Strict Mode
     *
     * When strict mode is enabled, if you are running multiple groups of
     * transactions, if one group fails all subsequent groups will be
     * rolled back.
     *
     * If strict mode is disabled, each group is treated autonomously,
     * meaning a failure of one group will not affect any others
     *
     * @param	bool	$mode = TRUE
     * @return	void
     */
    public function trans_strict($mode = TRUE)
    {
    }


    /**
     * Start Transaction
     *
     * @param	bool	$test_mode = FALSE
     * @return	bool
     */
    public function trans_start($test_mode = FALSE)
    {
    }


    /**
     * Complete Transaction
     *
     * @return	bool
     */
    public function trans_complete()
    {
    }


    /**
     * Lets you retrieve the transaction flag to determine if it has failed
     *
     * @return	bool
     */
    public function trans_status()
    {
    }



    /**
     * Begin Transaction
     *
     * @param	bool	$test_mode
     * @return	bool
     */
    public function trans_begin($test_mode = FALSE)
    {
    }


    /**
     * Commit Transaction
     *
     * @return	bool
     */
    public function trans_commit()
    {
    }


    /**
     * Rollback Transaction
     *
     * @return	bool
     */
    public function trans_rollback()
    {
    }


    /**
     * Compile Bindings
     *
     * @param	string	the sql statement
     * @param	array	an array of bind data
     * @return	string
     */
    public function compile_binds($sql, $binds)
    {
    }


    /**
     * Determines if a query is a "write" type.
     *
     * @param	string	An SQL query string
     * @return	bool
     */
    public function is_write_type($sql)
    {
    }


    /**
     * Calculate the aggregate query elapsed time
     *
     * @param	int	The number of decimal places
     * @return	string
     */
    public function elapsed_time($decimals = 6)
    {
    }


    /**
     * Returns the total number of queries
     *
     * @return	int
     */
    public function total_queries()
    {
    }


    /**
     * Returns the last query that was executed
     *
     * @return	string
     */
    public function last_query()
    {
    }


    /**
     * "Smart" Escape String
     *
     * Escapes data based on type
     * Sets boolean and null types
     *
     * @param	string
     * @return	mixed
     */
    public function escape($str)
    {
    }


    /**
     * Escape String
     *
     * @param	string|string[]	$str	Input string
     * @param	bool	$like	Whether or not the string will be used in a LIKE condition
     * @return	string
     */
    public function escape_str($str, $like = FALSE)
    {
    }


    /**
     * Escape LIKE String
     *
     * Calls the individual driver for platform
     * specific escaping for LIKE conditions
     *
     * @param	string|string[]
     * @return	mixed
     */
    public function escape_like_str($str)
    {
    }


    /**
     * Platform-dependant string escape
     *
     * @param	string
     * @return	string
     */
    protected function _escape_str($str)
    {
    }


    /**
     * Primary
     *
     * Retrieves the primary key. It assumes that the row in the first
     * position is the primary key
     *
     * @param	string	$table	Table name
     * @return	string
     */
    public function primary($table)
    {
    }


    /**
     * "Count All" query
     *
     * Generates a platform-specific query string that counts all records in
     * the specified database
     *
     * @param	string
     * @return	int
     */
    public function count_all($table = '')
    {
    }

    /**
     * Affected Rows
     *
     * @return	int
     */
    public function affected_rows()
    {
    }


    /**
     * Insert ID
     *
     * @param	string	$name
     * @return	int
     */
    public function insert_id($name = NULL)
    {
    }


    /**
     * Returns an array of table names
     *
     * @param	string	$constrain_by_prefix = FALSE
     * @return	array
     */
    public function list_tables($constrain_by_prefix = FALSE)
    {
    }


    /**
     * Determine if a particular table exists
     *
     * @param	string	$table_name
     * @return	bool
     */
    public function table_exists($table_name)
    {
    }


    /**
     * Fetch Field Names
     *
     * @param	string	$table	Table name
     * @return	array
     */
    public function list_fields($table)
    {
    }


    /**
     * Determine if a particular field exists
     *
     * @param	string
     * @param	string
     * @return	bool
     */
    public function field_exists($field_name, $table_name)
    {
    }


    /**
     * Returns an object with field data
     *
     * @param	string	$table	the table name
     * @return	array
     */
    public function field_data($table)
    {
    }


    /**
     * Escape the SQL Identifiers
     *
     * This function escapes column and table names
     *
     * @param	mixed
     * @return	mixed
     */
    public function escape_identifiers($item)
    {
    }


    /**
     * Generate an insert string
     *
     * @param	string	the table upon which the query will be performed
     * @param	array	an associative array data of key/values
     * @return	string
     */
    public function insert_string($table, $data)
    {
    }



    /**
     * Generate an update string
     *
     * @param	string	the table upon which the query will be performed
     * @param	array	an associative array data of key/values
     * @param	mixed	the "where" statement
     * @return	string
     */
    public function update_string($table, $data, $where)
    {
    }





    /**
     * Enables a native PHP function to be run, using a platform agnostic wrapper.
     *
     * @param	string	$function	Function name
     * @return	mixed
     */
    public function call_function($function)
    {
    }


    /**
     * Set Cache Directory Path
     *
     * @param	string	the path to the cache directory
     * @return	void
     */
    public function cache_set_path($path = '')
    {
    }


    /**
     * Enable Query Caching
     *
     * @return	bool	cache_on value
     */
    public function cache_on()
    {
    }


    /**
     * Disable Query Caching
     *
     * @return	bool	cache_on value
     */
    public function cache_off()
    {
    }


    /**
     * Delete the cache files associated with a particular URI
     *
     * @param	string	$segment_one = ''
     * @param	string	$segment_two = ''
     * @return	bool
     */
    public function cache_delete($segment_one = '', $segment_two = '')
    {
    }


    /**
     * Delete All cache files
     *
     * @return	bool
     */
    public function cache_delete_all()
    {
    }


    /**
     * Close DB Connection
     *
     * @return	void
     */
    public function close()
    {
    }


    /**
     * Display an error message
     *
     * @param	string	the error message
     * @param	string	any "swap" values
     * @param	bool	whether to localize the message
     * @return	string	sends the application/views/errors/error_db.php template
     */
    public function display_error($error = '', $swap = '', $native = FALSE)
    {
        exit(8); // EXIT_DATABASE
    }


    /**
     * Protect Identifiers
     *
     * This function is used extensively by the Query Builder class, and by
     * a couple functions in this class.
     * It takes a column or table name (optionally with an alias) and inserts
     * the table prefix onto it. Some logic is necessary in order to deal with
     * column names that include the path. Consider a query like this:
     *
     * SELECT hostname.database.table.column AS c FROM hostname.database.table
     *
     * Or a query with aliasing:
     *
     * SELECT m.member_id, m.member_name FROM members AS m
     *
     * Since the column name can include up to four segments (host, DB, table, column)
     * or also have an alias prefix, we need to do a bit of work to figure this out and
     * insert the table prefix (if it exists) in the proper position, and escape only
     * the correct identifiers.
     *
     * @param	string
     * @param	bool
     * @param	mixed
     * @param	bool
     * @return	string
     */
    public function protect_identifiers($item, $prefix_single = FALSE, $protect_identifiers = NULL, $field_exists = TRUE)
    {
    }

}

/**
 * Reference to the CI_Controller method.
 *
 * Returns current CI instance object
 *
 * ЕСЛИ ВЫ ПЕРЕОПРЕДЕЛЯЕТЕ БАЗОВЫЙ КЛАСС, ТО
 * @return MY_Controller
 */
function &get_instance()
{
}
