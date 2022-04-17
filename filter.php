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
    if(isset($_POST['submit'])){
    $startSalary = $_POST['startsalary'];
    $endSalary = $_POST['endsalary'];
    $department = $_POST['empdept'];
    $host="localhost";
    $db="assignment7";
    $dsn="mysql:host=".$host.";dbname=".$db;
    $pdo=new PDO($dsn,"root","");
   
    
    
    $query= $pdo->prepare("SELECT * FROM company where  emp_dept = '$department' and  emp_salary between '$startSalary' and'$endSalary' ");
    
    $query->execute();
        while($row=$query->fetch())
        {
             echo"<tr>";
             echo"<td>$row[0]</td>";
             echo"<td>$row[1]</td>";
             echo"<td>$row[2]</td>";
             echo"<td>$row[3]</td>";
             echo"<td>$row[4]</td>";
             echo"</tr>";
        }
        
    
        if($query->rowCount() == 0)
        {
             echo 'Data does not exist.';
        }
        else
        {
             echo ' Data found';
        }
      
    }

   
?>
</table>
</body>
</html>