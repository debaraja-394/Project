<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $Username_Log=$_POST['Username_Log'];
        $Password_Log=$_POST['Password_Log'];

        $sql="SELECT * FROM `Users` WHERE `Username` like '$Username_Log'";
<<<<<<< HEAD
        $usernameExists=true;
=======

>>>>>>> origin/main
        $result_log=mysqli_query($conn,$sql);

        $rows_log=mysqli_num_rows($result_log);
        echo $rows_log;
        if($rows_log==1){
            while($row=mysqli_fetch_assoc($result_log)){
                echo $row['Password'];
                if(password_verify($Password_Log,$row['Password'])){
                    $login=true;
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$Username_Log;
                    header("location: home_page.php");
                }
                else{
                    echo "Error in submitting the data";
                }
            }
        }
<<<<<<< HEAD
        else{
            $usernameExists=false;
        }
=======
>>>>>>> origin/main
    }

    ?>