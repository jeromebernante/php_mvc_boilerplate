<?php
class Database
{
  private $timezone_query = "SET time_zone = '+08:00'";
  private $db;

  public function __construct()
  {
    $this->db = $this->db_connect();
  }

  public function db_connect()
  {
    try
    {
      $string = $_ENV['DB_TYPE'].":host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'].";";
      $db = new PDO($string, $_ENV['DB_USER'], $_ENV['DB_PASS']);
      
      $db->exec($this->timezone_query);

      return $db;
    }
    catch(PDOException $e)
    {
      die($e->getMessage());
    }
  }

  public function getLastInsertId()
  {
    return $this->db->lastInsertId();
  }

  public function read($query, $data = [])
  {
    $stm = $this->db->prepare($query);

    if(count($data) == 0)
    {
      $stm = $this->db->query($query);
      $check = 0;
      if($stm)
      {
        $check = 1;
      }
    }
    else
    {
      $check = $stm->execute($data);
    }

    if($check)
    {
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    else
    {
      return false;
    }
  }

  public function write($query, $data = [])
  {
    $stm = $this->db->prepare($query);
    if(count($data) == 0)
    {
      $stm = $this->db->query($query);
      $check = 0;
      if($stm)
      {
        $check = 1;
      }
    }
    else
    {
      $check = $stm->execute($data);
    }
    if($check)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
  public function getError()
  {
      $errorInfo = $this->db->errorInfo();
      return isset($errorInfo[2]) ? $errorInfo[2] : null;  // Return the error message if exists
  }
}
?>
