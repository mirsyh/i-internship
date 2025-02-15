<?php require_once 'db.php'; ?>
<?php

if (!isset($_SESSION['user'])) {
    redirect('index.php');
    exit();
} else {
    $user = $_SESSION['user'];

    if ($user['user_role'] != 'admin') {
        header('Location: index.php');
        exit();
    }

    $userName = $user['user_username'];
    $userRole = $user['user_role'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            font-family: "Times New Roman", Times, serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .header img {
            height: 100px;
            mix-blend-mode: multiply;
        }

        .sidebar {
            float: left;
            width: 15%;
            background-color: #f9f9f9;
            padding: 10px;
            box-sizing: border-box;
            height: 100vh;
        }

        a:link,
        a:visited {
            background-color: transparent;
            color: black;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            border: 2px solid grey;
            border-radius: 5px;
        }

        a:hover,
        a:active {
            background-color: lightgrey;
        }

        .content {
            float: left;
            width: 80%;
            padding: 15px;
            box-sizing: border-box;
            background-color: white;
        }

        .nav-link {
            display: block;
            margin: 10px 0;
            color: #333;
            text-decoration: none;
        }

        .footer {
            font-family: "Times New Roman", Times, serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="uitmlogo.png" alt="UiTM Logo">
        <h2>Internship Management System</h2>
        <div>
            <p>Username: <?= $userName; ?></p>
            <p>Role: <?= $userRole; ?></p>
        </div>
    </div>

    <div class="sidebar">
        <br><br>
        <a href="AHome.php" class="nav-link">Dashboard</a>
        <a href="AViewStu.php" class="nav-link">Students</a>
        <a href="AViewComp.php" class="nav-link">Companies</a>
        <a href="AViewSv.php" class="nav-link">Supervisors</a><br>
        <a href="Logout.php" class="nav-link">Logout</a>
    </div>
    <div class="content">