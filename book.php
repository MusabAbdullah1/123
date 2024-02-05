
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
        $Guest = $_POST['Guest'];
        $checkIn = $_POST['checkIn'];
        $checkOut = $_POST['checkOut'];
        $Room = $_POST['Room'];


        

        if(!empty($Room))
        {

            //save to database

            $query = "insert into ordar (name,Guest,checkIn,checkOut,Room) values ('$$name','$$Guest','$$checkIn','$checkOut','$$Room')";

            mysqli_query($conn, $query);

        }else
        {
            echo "Wrong";
        } 






?>