<?php 
class dbcon  
{       
  protected $mysqli;
  private  $db_host = DBCON_HOST;
  private  $db_name = DBCON_DB;
  private  $db_username = DBCON_USER;
  private  $db_password = DBCON_PASS;

  public function __construct()
  {
    $this->mysqli=new mysqli($this->db_host,$this->db_username,
    $this->  db_password,$this->db_name) or die($this->mysqli->error);

    return $this->mysqli;
  }
    
	public function getLink()
	{
	    return $this->mysqli;
	}

	public function query($query)  // why i need to creat this function
	{
     $query = str_replace("''", "NULL", $query);
	    return $this->mysqli->query($query);
	}
	
  public function affected_rows()
  {
    return  mysqli_affected_rows($this->mysqli);
  }

  public function escape_string($str)
	 {
	    return $this->mysqli->real_escape_string($str);
	 }

  public function insert_id()
  {
    return mysqli_insert_id($this->mysqli);
  }

   function __destruct(){
     //Close the Connection
     $this->mysqli->close();
    }
}

?>