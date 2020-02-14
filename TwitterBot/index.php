<html>
<body>

<?php 
require_once 'db_include.php';

$conn = OpenCon(); 
$query = "SELECT * FROM tweet_topic";

echo '<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>';
 
 
echo '<table class="table"> 
        <thead class="thead-dark">  
      <tr> 
          <th scope="col"> <font face="Arial">ID</font> </th> 
          <th scope="col"> <font face="Arial">topic</font> </th> 
          <th scope="col"> <font face="Arial">priority</font> </th> 
          <th scope="col"> <font face="Arial">counter_flag</font> </th> 
          <th scope="col"> <font face="Arial">tweet</font> </th>
          <th scope="col"> <font face="Arial">author</font> </th> 
      </tr>
      </thead>
      ';

if($conn)
{
    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["ID"];
            $field2name = $row["topic"];
            $field3name = $row["priority"];
            $field4name = $row["counter_flag"];
            $field5name = $row["tweet"]; 
            $field6name = $row["author"]; 
     
            echo '<tr> 
                      <td>'.$field1name.'</td> 
                      <td>'.$field2name.'</td> 
                      <td>'.$field3name.'</td> 
                      <td>'.$field4name.'</td> 
                      <td>'.$field5name.'</td>
                      <td>'.$field6name.'</td> 
                  </tr>';
        }
        $result->free();
    } 
}

else{
    die("something went wrong:". $conn -> error);
}

echo '<form action="update_table.php" method="post">
<div class="form-group">
<label>Topic: </label>
<input type="text" class="form-control" name = "topic" /><br/>
</div>

<div class="form-group">
<label>Tweet: </label>
<input type="text" class="form-control" name = "tweet" ><br/>
</div>

<div class="form-group">
<label>priority: </label>
<input type="text" class="form-control" name = "priority" ><br/>
</div>

<div class="form-group">
<label>counter_flag: </label>
<input type="text" class="form-control" name = "counter_flag" /><br/>
</div>

<div class="form-group">
<label>author: </label>
<input type="text" class="form-control" name = "author" /><br/>
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>'

?>
</body>
</html>