<?php

    if(isset($_POST['sub'])){
        $name = $_POST['uname'];
        $pswd = $_POST['password'];

        if(strlen($name) < 4){
            echo "<h1>Sorry cant auth... you....</h1>";
        }
        else{
            $connect = mysqli_connect('localhost','root','','loginapp');

            if($connect){
                echo "Connection established....";
                $query = "INSERT INTO users(username,password) VALUE('$name','$pswd')";
                $result = mysqli_query($connect,$query);
                if(!$result){
                    die("Sorry".mysqli_error);
                }
                else{
                    echo "<br><h1>WELCOME</h1>";
                }
            }
            else{
                die("Connection failed....");
            }
        }
    }

?>