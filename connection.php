<?php
    try{


  $connection=new MongoClient();
  $db=$connection->DbSystem;
  $collection=$db->Members;
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
       session_start();
?>
