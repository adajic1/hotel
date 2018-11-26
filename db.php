<?php

$db_name = "hotel";
$db_host = "localhost"; // localhost
$db_username = "root"; // root
$db_pass = ""; // ''

$db = new Database($db_host, $db_username, $db_pass, $db_name);

$session_timeout = 10;

class Database {
	
	private $db_selected;
	private $link;
	
	public $error;
    public $result;
    
	public function __construct($host, $username, $password, $base_name) {
	  	$this->link = mysqli_connect($host, $username, $password);
	    $db_selected = mysqli_select_db($this->link, $base_name);  	
    }

	public function __destruct() {}
  
    public function runQuery($sqlPrepare, $variables = array(), $errorMsg = "", $withSqlError = 1, $withResult = 1, $autoBrackets = 0) {  
	    if (strlen($errorMsg)==0) $errorMsg = "Running query: ";
	    if ($autoBrackets == 1) {
	    	$sqlPrepare.="(";
	      	for ($i=0; $i<count($variables); $i++)
	        	$sqlPrepare.= ($i!=count($variables)-1)? "?," : "?)";
	    }
	    $this->sqlSafe($sqlPrepare, $errorMsg, $withSqlError, $withResult, $variables);
    }

    protected function getTypeForSQL($var) {
	    $strTip=gettype($var);
	    switch ($strTip) {
	      case "boolean": return 'i';
	      case "integer": return 'i';
	      case "double": return 'd';
	      case "string": return 's';
	    }
    }
  
	public function getResult($Statement, $sqlPrepare){
		$RESULT = array();
		$Statement->store_result();
		for ($i = 0; $i < $Statement->num_rows; $i++) {
			$Metadata = $Statement->result_metadata();
			$PARAMS = array();
			while( $Field = $Metadata->fetch_field() ){
				$PARAMS[] = &$RESULT[ $i ][ $Field->name ];
			}
			call_user_func_array( array( $Statement, 'bind_result' ), $PARAMS );
			$Statement->fetch();			
		}
		return $RESULT;
	}

    public function sqlSafe($sqlPrepare, $errorMsg, $withSqlError, $withResult, $variables) {
	    $n=count($variables);
	    $types='';
	    for ($i=0; $i<$n; $i++)
	        $types.=$this->getTypeForSQL($variables[$i]);
	    
	    if ($n>0) {
	        // PREPARE
	        if (!($stmt = mysqli_prepare($this->link, $sqlPrepare))) {
	            $this->error = "Invalid SQL syntax: ".mysqli_error($this->link);
	        }
	      
	        // BIND
	        if (!$this->ifErrorHappened() && count($variables)>0) {
	            $a_params[] = &$types;
	            for($i = 0; $i < $n; $i++) $a_params[] = &$variables[$i];
	            call_user_func_array(array($stmt, 'bind_param'), $a_params);
	        }
	      
	        // EXECUTE
	        if (!$this->ifErrorHappened()) {
	            if (!$stmt->execute()) {
	            	// Set error to concatenated strings $errorMsg and $stmt->error, or just $errorMsg
	                $this->error = $withSqlError ? $errorMsg.$stmt->error : $errorMsg;
	            }
	        }
	  	
	        // RESULT
	        if (!$this->ifErrorHappened() && $withResult) {      	
	            $this->result=$this->getResult($stmt, $sqlPrepare);        					
	        }	        
	    } else {    	
	        if (!($rezultat = $this->link->query($sqlPrepare))) { // Execute query without variables
	            $this->error = $withSqlError ? $errorMsg.mysqli_error($this->link) : $errorMsg;
	        } else if ($withResult) { // Execution of query succeeded, now fetch result if necessary
		      	// $rezultat se mora konvertovati u niz
		    	$this->result = array();
				while($row = mysqli_fetch_array($rezultat)) {
				    $this->result[] = $row;
				}
	        }    
	    }       
    }

    // Check if the error happened
    public function ifErrorHappened() {
	    return strlen($this->error) ? true : false;
    }  
}

function getVar($var) {
	// Get a variable passed with POST or GET in a safe way
	// Returns NULL if the variable does not exist
	if (isset($_POST[$var])) return get_magic_quotes_gpc() ? stripslashes($_POST[$var]) : $_POST[$var];
	else if (isset($_GET[$var])) return get_magic_quotes_gpc() ? stripslashes($_GET[$var]) : $_GET[$var];
	else return NULL;
}
	
?>