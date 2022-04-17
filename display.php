<html>
  <head>
    <title>Assignment 6</title>
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
$servername = "localhost";
$username = "root";
$password = "";
//$department  = filter_input(INPUT_POST,' empdept' FILTER_SANITIZE_STRING );
if(isset($_POST['submit']))
{
$department = $_POST['dpt'];
}

try {
  $conn = new PDO("mysql:host=$servername;dbname=assignment7", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully"."<br>";
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
   

  
 
    $sql= $conn->prepare("SELECT* FROM company where emp_dept=? ");
  
     $sql->execute(array($department));
   
        while($row=$sql->fetch())
        {
            
             echo"<tr>";
             echo"<td>$row[0]</td>";
             echo"<td>$row[1]</td>";
             echo"<td>$row[2]</td>";
             echo"<td>$row[3]</td>";
             echo"<td>$row[4]</td>";
             echo"</tr>";
        }
        if($sql->rowCount() == 0)
        {
             echo 'Data does not exist.';
        }
        else
        {
             echo ' Data found';
        }
      
    
        
    
    

   
?>
</table>
</body>
</html>