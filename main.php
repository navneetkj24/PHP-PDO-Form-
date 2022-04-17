<html>
  <head>
    <title>Form
    </title>
    
</head>
<body>
        <!-- display form -->

<form action="display.php" method="post">
      
<div>
        <label for = "name" >Employee Department</label>
        <input type="text" name="dpt" id="department" placeholder ="Department" />
</div>

         <input type="submit" id= "button" name ="submit" value = "Display"/>
    </form>


    </form>
         <!-- Modify form -->
         
     <form action="modify.php" method ="post" >
        <label for = "name" ><u><b>Modifying data in the database</b></u></label><br>
        <label for = "name" >Employee ID</label>
        <input type="number" name="empid"  id="id" value = "<?php echo $id; ?>"  placeholder = "Employee ID" />
     
        <label for = "name" >Employee Department</label>
        <input type="text" name="empdept" id="department" value = "<?php echo $dept; ?>" placeholder ="Department"  />
        <input type = "submit" id = "button" name="submit" value = "MODIFY"/> 

</form>
</form>

             <!-- Filtering form -->
             <form action = "filter.php" method = "post">
             <label for = "name" ><u><b>Filtering data</b></u></label><br>
        <div>
        <label for = "name" ><b>Employee Salary Range</b></label><br>
        <label for = "name" >Starting salary </label>
        <input type="number" name="startsalary" id="salary"  placeholder = "Employee Salary" />
       </div>
       <div>
        <label for = "name" >End Salary</label>
        <input type="number" name="endsalary" id="salary"  placeholder = "Employee Salary" />
       </div>
       <div>
     <label for = "name" >Employee Department</label>
        <input type="text" name="empdept" id="department" placeholder ="Department"  />
</div>
<div>
        <input type = "submit" id = "button" name="submit" value = "FILTER"/> 
</div>
</form>


</body>
</html>