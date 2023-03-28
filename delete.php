<?php
  require "db.php" ;
   
   $id = $_GET["id"] ;
   
  try {
      $stmt = $db->prepare("delete from project where id = :id") ;
      $stmt->execute(["id" => $id]) ;
      echo json_encode(["message" => "$id deleted"]) ;
  } catch(PDOException $ex) {
      echo json_encode(["error" => "$id delete failed"]) ;
  }

  header("Location: ../index.php");