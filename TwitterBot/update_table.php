<?php

require_once 'db_include.php';

$conn = OpenCon();

if($conn)
{
    echo "hurray\n"; 

   $topic = $conn->real_escape_string($_POST['topic']);
   $tweet = $conn->real_escape_string($_POST['tweet']); 
   $priority = $conn->real_escape_string($_POST['priority']); 
   $author = $conn->real_escape_string($_POST['author']);
   $flag = $conn->real_escape_string($_POST['counter_flag']);   


   $query = "INSERT INTO tweet_topic (topic,priority,counter_flag,tweet,author) 
   VALUES ('{$topic}','{$priority}','{$flag}','{$tweet}','{$author}')";

   echo "$query";

   $conn->query($query);

   CloseCon($conn);
}


?>