<?php
@include('connect.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>

<html>
<head>
    <title>Countdown Website</title>
    <link rel="icon" href="images/muonline.gif"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.js"></script>
    <style>
        .imgSET{
            opacity: 0.1;
            filter: alpha(opacity=10);
        }
    </style>
    <script>
        $(function() {
            $(".imgDisplay").click(function() {
                $(this).toggleClass("imgSET");
            });
        });

        $(function() {
            $(".refresh").click(function() {
                $(this).show();
            });
        });
    </script>
</head>

<body>

<div class="container">
    <div id="header">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Mu Blue</a>
            </div>

            <div class="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Event</a></li>
                    <li><a href="roomy.php">Roomy event</a></li>
                    <li><a href="maze.php">Maze</a></li>
                    <li><a href="">Hướng dẫn chơi game</a></li>
                </ul>
            </div>
        </nav>
    </div>