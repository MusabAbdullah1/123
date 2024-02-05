
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$DBname = "hotel";



if(!$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$DBname))
{

    die("failed to connect!");
}



        //something was posted
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
       

        

        if(!empty($message))
        {

            //save to database

            $query = "insert into Contact (name,email,message) values ('$name','$email','$message')";

            mysqli_query($conn, $query);
            header("Location: index.html");


        }else
        {
            echo "Wrong";
        } 






?>