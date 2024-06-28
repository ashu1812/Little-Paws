<?php 

session_start();

    include("config.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {

            //read from database
            $query = "select * from credentials where email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
					
                    if($user_data['password'] === $password)
                    {
                        header("Location: dash.php");
                        $_SESSION['UID'] = $UID;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;

                        die;
                    }
                }
            }
			
            echo "wrong username or password!";
        }else
        {
            echo "wrong username or password!";
        }
    }

?>