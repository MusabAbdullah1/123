
<?php 
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$DBname = "hotel";



if(!$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$DBname))
{

    die("failed to connect!");
}

session_start();

  

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $email = $_POST['email1'];
        $password = $_POST['password1'];
        

        if(!empty($email) && !empty($password))
        {

            //read from database
            $query = "select * from user where email2 = '$email' limit 1";
            $result = mysqli_query($conn, $query);
            

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                 
                    if($user_data['password2'] === $password)
                    {

                        $_SESSION['email'] = $user_data['email'];
                        header("Location: index.html");
                        die;
                    }
                }
            }
            echo "wrong ";
            
        }else
        {
            echo "wrong username or password!";
        }
    }

?>