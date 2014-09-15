<?php
                if(isset($_POST["submit"])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $email=$_POST['email'];


                $con=mysql_connect('localhost','root','root') or die(mysql_error());
                mysql_select_db('global_sound_registration') or die("cannot select DB");

                $query=mysql_query("SELECT * FROM login WHERE username='".$user."'");
                $numrows=mysql_num_rows($query);
                if($numrows==0)
                {
                $sql="INSERT INTO login(username,password,firstname,lastname,email) VALUES('$user','$pass', '$firstname', '$lastname', '$email')";

                $result=mysql_query($sql);


                if($result){
                
                header("Location: home.php");

                } else {
                echo "Failure!";
                }

                } else {
                echo "That username already exists! Please try again with another.";
                }
                }
?>	