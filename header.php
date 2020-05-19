<?php
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
    <script>
        $(function() {
            $(".imgDisplay").click(function() {
                $(this).hide();
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
                    <li><a href="">Maze</a></li>
                    <li><a href="">Hướng dẫn chơi game</a></li>
                </ul>
            </div>
        </nav>
    </div>