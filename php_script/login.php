<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "user_data");

    header('Content-Type: application/json; charset=utf-8');
    $name = $_POST["name"];
    $password1 = $_POST["password1"];
    $user = mysqli_query($conn, "SELECT * FROM register WHERE name = '$name'");
    if (mysqli_num_rows($user) > 0) {
        $row = mysqli_fetch_assoc($user);
        if ($password1 == $row['password1']) {
            echo json_encode([
                'status' => 200,
                'message' => 'Login Successful. You\'e now redirecting to profile page'
            ]);
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
        } else {
            echo json_encode([
                'status' => 210,
                'message' => 'Wrong password. Please try again'
            ]);
            exit;
        }
    } else {
        echo json_encode([
            'status' => 220,
            "message"=>"User not registered"]);
        exit;
    }
//code completed