<?php

class db {
  const DB_ERR = 'DB ERROR: ';

  private static $conn;

  function __construct($address, $username, $password, $db) {
    self::$conn = new mysqli($address, $username, $password, $db);
  }
  
  private function logErr($msg) {
    error_log($msg . '\r\n', 3, 'app.db.log');
  }

  private function logIfError($stmt, $msg) {
    if ($stmt->errno) {
      $this->logErr(self::DB_ERR . $msg);
      $this->logErr($stmt->errno . ": " . $stmt->error);
    }
  }

  private function executeQuery($stmt, $params) {

    foreach($params as $param) {
      if(gettype($param) === "integer") {
        $stmt->bind_param("i", $param);
      }
      else if (gettype($param) === "string") {
        $stmt->bind_param("s", $param);
      }

    }

    $this->logIfError($stmt, "Parameter binding failure.");

    $stmt->execute();

    $this->logIfError($stmt, "Query execution failed.");

    $res = $stmt->get_result();

    return $res;
  }

  public function queryAll($preparedStr) {
    $returnArray = array();

    $params = array_slice(func_get_args(), 1);

    $statement = self::$conn->prepare($preparedStr);

    if(self::$conn->errno) 
      $this->logErr(self::$conn->errno . ": " . self::$conn->error);

    $res = $this->executeQuery($statement, $params);

    if(!$res) return self::DB_ERR . "no results!";

    while ($row = $res->fetch_assoc()) {
      array_push($returnArray, $row);
    }

    return $returnArray;
  }

  public function queryOne($preparedStr) {
    $params = array_slice(func_get_args(), 1);

    $statement = self::$conn->prepare($preparedStr);

    if(self::$conn->errno) 
      $this->logErr(self::$conn->errno . ": " . self::$conn->error);

    $res = $this->executeQuery($statement, $params);

    if(!$res) return self::DB_ERR . "no results!";
    else return $res->fetch_assoc();
  }
}

?>
