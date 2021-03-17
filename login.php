<?php
 // Starting Session
session_start();
require("mail.php");
if(isset($_POST['submit'])){
    include('db.php');
    //$mysqli = new mysqli("http://192.168.56.1/",$user,$pwd,$dbName);
    $host        = "host = ec2-34-195-233-155.compute-1.amazonaws.com";
    $port        = "port = 5432";
    $dbname      = "dbname = d7uanuiosmq0is";
    $credentials = "user = lfkblfepuqflgr password=8d2d611f0f5075077857b68fb7042f8aa830966c060975783a6bd06fb4892804";
    $mysqli = pg_connect( "$host $port $dbname $credentials"  );
    //$mysqli = mysqli_connect("ec2-34-195-233-155.compute-1.amazonaws.com",$user,$pwd,$dbName);
    switch($_POST['submit']){
        case "Register":
        $fname = $mysqli->real_escape_string($_POST['fname']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $college = $mysqli->real_escape_string($_POST['college']);
        $phone = $mysqli->real_escape_string($_POST['phone']);
        $pwd = bin2hex(openssl_random_pseudo_bytes(4));
        $query = "INSERT INTO user_details (u_name, u_email, u_college, u_contact, u_pwd) VALUES ('".$fname."', '".$email."', '".$college."',".$phone.", '".$pwd."')";
        // echo $query;
        $result = $mysqli->query($query);
        if($result){
            sendPwd($pwd,$email);
        }
        break;
        case "Login":
        $result = pg_prepare($mysqli, "my_query", "select * from user_details where u_pwd = $2 AND u_email = $1");
        $result = pg_execute($mysqli, "my_query", array($_POST['email'],$_POST['pwd']));
        //$email = $mysqli->pg_escape_string($_POST['email']);
        //$pwd = $mysqli->real_escape_string($_POST['pwd']);
        //$query = "select * from user_details where u_pwd='$pwd' AND u_email='$email'";
       // $result = $mysqli->query($query);
        if(pg_num_rows($result)>0){
            $_SESSION['login_user_email']=$email;
               while ($obj = pg_fetch_object($result)) {
                    $_SESSION['login_user_name']=$obj->u_name;
                    $_SESSION['login_user_college']=$obj->u_college;
                    $_SESSION['login_user_lvl']=$obj->u_lvl;
                    $_SESSION['last_lvl_time']=date("Y-M-d H:i:s", strtotime($obj->time)+5.5*3600);
                }
            }
        else{
            echo "Incorrect Password or Not Registered";
        }
        break;
    }
    pg_close($mysqli);
}
?>
