<?php
$uid = $_GET["uid"];
$cs = $_GET["changestate"];
if($_GET["changestate"]=="ON"){
    $timestamp = time() ;
    
    $con = mysqli_connect("localhost", "root", "", "uberroll");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = "INSERT INTO ur_logs (uid, logintime, slab) VALUES ('$uid', '$timestamp', '052016')";
    
    if (!mysqli_query($con, $sql))
    {
        die('Error: ' . mysqli_error($con));
    }
    //echo "<br/>1 record added<br/>";

    mysqli_close($con);
     $con = mysqli_connect("localhost", "root", "", "uberroll");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con, "SELECT * FROM ur_logs WHERE uid='$uid' AND logintime='$timestamp' AND slab='052016'");
    $row = mysqli_fetch_array($result);
    mysqli_close($con);
    echo "<input type=\"hidden\" id=\"logid\"  name=\"logid\" value=\"$row[0]\">";
    echo "<h1>START TIMESTAMP : " . $timestamp."</h1>";
} else{
    if($_GET["changestate"]=="OFF"){
        $timestamp = time() ;
        $logouttime=$timestamp;
        $logid = $_GET["logid"];
        
        $con = mysqli_connect("localhost", "root", "", "uberroll");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    
        $result = mysqli_query($con, "SELECT logintime FROM ur_logs WHERE logid=$logid");
        $logintime = mysqli_fetch_array($result);
        mysqli_close($con);
        
        //echo $logintime[0];
       
        $clockedhours = (intval($logouttime) - intval($logintime[0]))/3600;
         $con = mysqli_connect("localhost", "root", "", "uberroll");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    
        $sql = "UPDATE ur_logs SET logouttime='$logouttime' WHERE logid='$logid'";
        
        if (!mysqli_query($con, $sql))
        {
            die('Error: ' . mysqli_error($con));
        }
        //echo "<br/>1 record added<br/>";
        $sql = "UPDATE ur_logs SET clockedhours='$clockedhours' WHERE logid='$logid'";
        
        if (!mysqli_query($con, $sql))
        {
            die('Error: ' . mysqli_error($con));
        }
        //echo "<br/>1 record added<br/>";
    
        mysqli_close($con);
    
        echo "<h1>END TIMESTAMP : " . $timestamp."</h1>";
    }
}




?>