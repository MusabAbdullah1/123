
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$DBname = "hotel";



if(!$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$DBname))
{

    die("failed to connect!");
}


//sign UP


        //something was posted
        $user_name = $_POST['user_name2'];
        $password = $_POST['password2'];
        $email = $_POST['email2'];

        if(!empty($user_name) && !empty($password))
        {

            //save to database

            $query = "insert into user (user_name2,email2,password2) values ('$user_name','$email','$password')";

            mysqli_query($conn, $query);

            header("Location: login.html");

        }else
        {
            echo "Wrong";
        } 






?>