<!DOCTYPE html>
<html lang="en">
<head>

    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/dash.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <!-- thumbnail -->
    <link rel="icon" type ="image/svg" href="images/icon.svg">

</head>
<body>

    <a href="index.html"><img class="logo" src="images/logo_final.png"  alt=""></a>

    <?php
    error_reporting(0);
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', 'Off');
    session_start();
    $UID = $_SESSION['UID'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    
    $con = mysqli_connect('localhost:3307', 'root', '','littlepaws');
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "SELECT Name from credentials WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($con, $sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        $Name = $row["Name"]; 

        }
     else {
        echo "0 results";
     }
    $sql1 = "SELECT BName from credentials WHERE email = '".$email."' and password = '".$password."'";
    $result1 = mysqli_query($con, $sql1);

    if ($result1->num_rows > 0) {
        // output data of each row
        while($row = $result1->fetch_assoc()) 
        $BName = $row["BName"];
 
        }
     else {
        echo "0 results";
    }

    $sql0 = "SELECT MStatus from membership WHERE email = '".$email."'";
    $result0 = mysqli_query($con, $sql0);

    if ($result0->num_rows > 0) {
        // output data of each row
        while($row = $result0->fetch_assoc()) 
        $MStatus = $row["MStatus"];
        echo " ";
 
        }
     else {
        echo "";
    }

    if ($MStatus == "a") {
        $sql2 = "SELECT MType from membership WHERE email = '".$email."'";
        $result2 = mysqli_query($con, $sql2);

        if ($result2->num_rows > 0) {
            // output data of each row
            while($row = $result2->fetch_assoc()) 
            $MType = $row["MType"];
 
            }
         else {
            echo "";
        }

        $sql3 = "SELECT MonthsRemaining from membership WHERE email = '".$email."'";
        $result3 = mysqli_query($con, $sql3);

        if ($result3->num_rows > 0) {
            // output data of each row
            while($row = $result3->fetch_assoc()) 
            $MonthsRemaining = $row["MonthsRemaining"];
 
            }
         else {
            $MStatus = "";
            echo "";
        }

        $sql4 = "SELECT NextCheckup from membership WHERE email = '".$email."'";
        $result4 = mysqli_query($con, $sql4);

        if ($result4->num_rows > 0) {
            // output data of each row
            while($row = $result4->fetch_assoc()) 
            $NextCheckup = $row["NextCheckup"];
 
            }
         else {
            echo "";
        }
    
    }
    else {
        $MStatus = "";
        $MType = "Membership Inactive";
        $MonthsRemaining = "";
        $NextCheckup= "";
    }
    

    
    mysqli_close($con); 


    ?>

    <br>
    <img class="profilepic" style = "margin-left: 7%;" src="images/pp.png" alt="profile">
    <div class="custname">
          Hello, <?= $Name; ?>
       </div>

    <form  class = "text" action="login.php" method="post">
        <p class = "heading" style="text-align: center; margin-top: -0px; padding-bottom: 20px;">Profile Details</p>
        <p class = "heading">Email ID : <?= $email; ?></p>
        <p class = "heading">Pet Name : <?= $BName; ?> </p>
        <p class = "heading"></p>
       </form>
    
    <form class="two text" action="login.php" method="post">
        <p class = "heading" style="text-align: center; margin-top: -0px; padding-bottom: 20px;"">Membership Details</p>
        <p class = "heading">Membership Type :  <?= $MType; ?> </p>
        <p class = "heading">Months Left : <?= $MonthsRemaining; ?></p>
        <p class = "heading">Next Checkup : <?= $NextCheckup; ?></p>
        </form>
    <button class = "button" style = "margin-top: 60px;
    position: absolute;
    right: 100px;
    text-align: center;
    width: 10%;
    background-color: #7D5A50;
    color: #ffffff;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    border-color: #7D5A50;"onclick="location.href = 'delete.php';">Delete Account</button>
</body>
</html>