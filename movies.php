<?php
  $select = 'SELECT *'; 
  $from = ' FROM movies'; 
  $where = ' WHERE TRUE'; 
  $sql = $select . $from . $where; 
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $results=$statement->fetchAll(PDO::FETCH_ASSOC);
  $json=json_encode($results);
  echo($json);
?>