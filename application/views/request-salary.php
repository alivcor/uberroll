<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>UberRoll | Work</title>
<?php include('includes/header.php')?>

</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php if($urole==0){
        include('includes/aside_emp.php');
      } else{
        include('includes/aside_emp.php');
      }
       ?>
    <?php if($urole==0){
        include('includes/request-salary_main.php');
      } else{
        
      }
       ?>
 <?php include('includes/footer.php')?>
</body>
</html>