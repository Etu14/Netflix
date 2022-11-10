<?php
session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Netflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark  d-flex justify-content-start  navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand ms-3 " href="index.php">
                    <img src="img/netflix-logo.png" alt="netflix-logo" width="120" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon  "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link  text-danger" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger " href="index.php#pricing">Pricing</a>
                        </li>
                        <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<li class='nav-item'><a class='nav-link text-danger' href='profile.php'>Profile page</a></li>";
                            echo "<li class='nav-item'><a class='nav-link text-danger' href='includes/logout.inc.php'>Log out</a></li>";
                        } else {
                            echo "<li class='nav-item'><a class='nav-link text-danger' href='signup.php'>Sign up</a></li>";
                            echo "<li class='nav-item'><a class='nav-link text-danger' href='login.php'>Login</a></li>";
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>