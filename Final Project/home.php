<?php
require('connection.php');
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;  
        }
        body{
            background-image: url(background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100vh;
        }
        h1{
            color:#fff;
        }
        .home{
            font-weight: 900 !important;
        }
        .logout{
            text-decoration: none !important;
            color: #fff !important;
            background-color: #3200a0 !important;
            padding: 10px;
            border: 2px solid transparent;
            border-radius: 14px;
            top:-180px;
            position: relative;
        }   
        .logout:hover{
            background-color: rgb(243, 134, 95) !important;
            box-shadow: 8px 8px 10px 0px rgba(0, 0, 0, 0.5);
        }          
        button{
            border: none;
            float: right;
            background: none;
        }
        nav{
            background: #2196f3;
            height: 80px;
            width: 100%;
        }
        .cont{
            color: white;
            font-size: 35px;
            line-height: 80px;
            padding: 0px;
            font-weight: bold;
        }
        ul{
            float: right;
            margin-right: 100px;
            margin-top: -10px; 
        }
        li{
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
            
        }
        li a{
            color: white;
            font-size: 16px;
            padding: 7px 13px;
            border-radius: 4px;
            text-transform: uppercase;
            border-bottom: 4px solid coral;
        }
        .active{
            text-decoration: none;
            background: transparent;
            transition: 0.5s;
        }
        .active:hover{
            background: coral;
            box-shadow: 8px 8px 10px 0px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <nav>
        <label class="cont">Aadesh-Website</label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a class="active" href="#">About</a></li>
            <li><a class="active" href="#">Service</a></li>
            
        </ul>
    </nav>
    <div class="home">
    <button><a class="logout" href="logout.php"> LOGOUT </a></button>
    <?php 
    if(isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true)
    {
        echo"<h1 style='text-align: center; margin-top: 200px;'>Welcome - $_SESSION[username]</h1>";
    }
?>
</div>


</body>
</html>