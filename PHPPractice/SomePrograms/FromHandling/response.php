<?php
    include("db_connect.php");
    if(isset($_POST['Send'])){



        $fullName=$_POST['full_name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['conform_password'];
        echo strcmp($password,$c_password);

        if($password == $c_password)
        {
            // echo"matched";

            $sql = "insert into user_registration(Name,Address,EMail,Password) 
            values('".$fullName."','".$address."','".$email."','".$password."')";

            $result = mysqli_query($connect , $sql);
            if($result){
                echo "<br> Record Created";
            }
            else{
                echo "<br>Sorry,something went wrong....";
            }
        }
        else{
            echo "Confirm password is not matched";
        }

        echo "Full Name: ".$fullName;
        echo "<br>";
        echo "Address:".$address;
        echo "<br>";
        
        echo "Email: ".$email;
        echo "<br>";

        echo "Password: ".$password;
        echo "<br>";

        echo $c_password;

    }

?>