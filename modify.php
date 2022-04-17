<html>
  <head>
    <title>Assignment 6
    </title>
    <link rel="stylesheet" href="Css.css">
</head>
<body>
<form action="main.php" method="POST">
</form>
<table border="2">

	  <tr>
	     <td>Employee ID</td>
		 <td>Employee Name</td>
		 <td>Employee Email</td>
         <td>Employee Deparment</td>
         <td>Employee Salary</td>
	  </tr>
      <?php
      
     
    $host="localhost";
    $db="assignment7";
    $dsn="mysql:host=".$host.";dbname=".$db;
    $pdo=new PDO($dsn,"root","");
    
    try{
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
  

  echo "Connected successfully<br>";
  
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage()."<br>";
 }
 
               if(isset($_POST['submit']))
               {
               $id = $_POST['empid'];
               $dept = $_POST['empdept'];

               }
          
     $query="UPDATE  company  SET  emp_dept=:dept WHERE emp_id = :id";
     $st=$pdo->prepare($query);
     $st->bindParam('dept', $dept);
     $st->bindParam('id', $id);
      $st->execute();
     $result = $st->rowCount();
     if($result>0){
          echo "Data already exist";
     } 

        while($row=$st->fetchAll())
        {
            
             echo"<tr>";
             echo"<td>$row[0]</td>";
             echo"<td>$row[1]</td>";
             echo"<td>$row[2]</td>";
             echo"<td>$row[3]</td>";
             echo"<td>$row[4]</td>";
             echo"</tr>";
        }
     

?>
</table>
</body>
</html>