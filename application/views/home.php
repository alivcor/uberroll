<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>UberRoll | Dashboard</title>
<?php include('includes/header.php')?>

</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php if($urole==1){
        include('includes/aside_admin.php');
      } else{
        include('includes/aside_emp.php');
      }
       ?>
    <?php if($urole==1){
        include('includes/home_main_admin.php');
      } else{
        include('includes/home_main_emp.php');
      }
       ?>
 <?php include('includes/footer.php')?>
</body>
</html>