<?php
session_start();
if(!isset($_SESSION['login_user_email'])){
    ob_start();
    header("Location: index.php");
    ob_end_flush();
    die();
}
require_once("level.php");

$curr_lvl = $_SESSION['login_user_lvl'];
$curr_email = $_SESSION['login_user_email'];

/*$authlvl = 31;
$getlvl = 7;

if($curr_lvl==49){
    header('key: winner winner chicken dinner');
}*/

if(isset($_POST['submit']) || isset($_POST['key'])) /* || (isset($_GET['key'])&&$curr_lvl==$getlvl)) */{
    $key_submitted = isset($_POST['key'])?$_POST['key']:$_GET['key'];
    $key_submitted = strtolower($key_submitted);
    include('db.php');
	$host        = "host = ec2-34-195-233-155.compute-1.amazonaws.com";
    $port        = "port = 5432";
    $dbname      = "dbname = d7uanuiosmq0is";
    $credentials = "user = lfkblfepuqflgr password=8d2d611f0f5075077857b68fb7042f8aa830966c060975783a6bd06fb4892804";
    $mysqli = pg_connect( "$host $port $dbname $credentials"  );
    //$mysqli = new mysqli("localhost",$user,$pwd,$dbName);
	$result1 = pg_prepare($mysqli, "my_query1", "INSERT INTO user_input_log (u_email, u_key) VALUES ($1,$2)";
    $result1 = pg_execute($mysqli, "my_query1", array($curr_email,$key_submitted));
    //$query = "INSERT INTO user_input_log (u_email, u_key) VALUES ('".$curr_email."', '".$key_submitted."')";
    //$mysqli->query($query);
    if($levels[$curr_lvl]->key==$key_submitted){
		
		$result2 = pg_prepare($mysqli, "my_query2", "INSERT INTO user_lvl (u_email, u_lvl) VALUES ($1,$2)";
		$result2 = pg_execute($mysqli, "my_query2", array($curr_email,$curr_lvl));
	
        //$query = "INSERT INTO user_lvl (u_email, u_lvl) VALUES ('".$curr_email."', '".$curr_lvl."')";
        //$mysqli->query($query);

        $_SESSION['login_user_lvl']++;
        $curr_lvl++;
		
		$result3 = pg_prepare($mysqli, "my_query3", "UPDATE user_details set u_lvl= $1 where u_email= $2";
		$result3 = pg_execute($mysqli, "my_query3", array($curr_lvl,$curr_email));
    
        //$query = "UPDATE user_details set u_lvl='".$curr_lvl."'where u_email='".$curr_email."'";
        //$mysqli->query($query);
    }
    /*if($curr_lvl==$authlvl){
        require_once('rfc6238.php');
        $secretkey = 'GEZDGNBVGY3TQOJQGEZDGNBVGY3TQOJQ';
        if (TokenAuth6238::verify($secretkey,$key_submitted)) {
            $query = "INSERT INTO user_lvl (u_email, u_lvl) VALUES ('".$curr_email."', '".$curr_lvl."')";
            $mysqli->query($query);
            $_SESSION['login_user_lvl']++;
            $curr_lvl++;
            $query = "UPDATE user_details set u_lvl='".$curr_lvl."'where u_email='".$curr_email."'";
            $mysqli->query($query);
        } else {
            echo "<div style='position:absolute;'></div>";
        }
    }*/
    pg_close($mysqli);
}
?>
<!DOCTYPE html><html><head><title>Treasure Hunt</title>
<script src="assets/js/jquery.js"></script>
<link href="assets/css/main_v1.css" rel="stylesheet" type="text/css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/style1.css">
</head>
<body style="background-image:url('assets/img/bg.jpg')">
<div class="fonts" id="nav_bar"> <a href="profile.php">Profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="guide.php">Guidelines</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a class="current" href="#">Treasure Hunt</a>&nbsp;&nbsp;|&nbsp;&nbsp; 
<a href="ranking.php">Leader Board</a></div>
<?php
switch($levels[$curr_lvl]->type){
    case "basic":
    include('basic_lvl.php');
    break;
    case "custom":
    include($levels[$curr_lvl]->filename);
    break;
    case "image":
    include('image_lvl.php');
    break;
    case "end":
    include('end.php');
    break;
    case "endFinal":
    include('endFinal.php');
    break;
}
?>
<?php include('footer.php'); include('game_cases.php');?></body></html> 
