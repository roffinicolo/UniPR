<?php

  ///Database
  $host = "localhost";
  $user = "nrauto";
  $password = "Cavallopesto98.";
  $db = "my_nrauto";
  $connect = new mysqli($host, $user, $password, $db);

  if ($connect->connect_error) {
    echo "Errore di connessione: " . $connect->connect_error;
  }

  if($connect->select_db($db) == 0) {
    echo("Problema di connessione dal Database");
  }

  function sqlCommandExecute($sql)
  {
  global $connect;
  if (!$result = $connect->query($sql))
  return $connect->error;

  if (stripos($sql, "insert") === 0) //Return inserted id if present
    return (isset($connect->insert_id)) ? $connect->insert_id : false;
  elseif (stripos($sql, "delete") === 0 || stripos($sql, "update") === 0 || stripos($sql, "create") === 0) //Return true if a result is not exepcted
    return true;
  else //Return result if present
  {
    $values = array();
    if ($result->num_rows > 0)
    {
      while($row = $result->fetch_object())
        $values[] = $row;
      
      return $values;
    }
    return false;
  }    
  }

  function sqlCommandExecuteSingle($sql)
  {
    if (($result = sqlCommandExecute($sql)) and $result !== true)
      foreach($result as $row)
        return $row;
    elseif($result === true)
      return true;
    else
      return false;
  }

  function sanitizeQueryOption($string)
  {
    return str_replace("'", "\'", $string);
  }

?>