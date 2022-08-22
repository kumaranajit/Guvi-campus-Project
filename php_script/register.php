<?php
    session_start();
    header('Content-Type: application/json; charset=utf-8');
    $conn = mysqli_connect("localhost", "root", "", "user_data");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $repassword = $_POST["repassword"];
    $DOB = date('y-m-d', strtotime($_POST["DOB"]));
    $age = $_POST["age"];
    $contactno = $_POST["contactno"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $jobrole = $_POST["jobrole"];

    if (
        empty($name) || empty($email) || empty($password1) || empty($repassword)
        || empty($DOB) || empty($age) || empty($contactno) || empty($country)
        || empty($state) || empty($jobrole))
    {
        echo json_encode([
            'status' => 100,
            'message' => "Please fill out the Empty fields"
        ]);
        exit;
    }

    $user = mysqli_query($conn, "SELECT * FROM register WHERE name = '$name'");
    if (mysqli_num_rows($user) > 0) {
        echo json_encode([
            'status' => 101,
            'message' => "Username Has Already Taken"
        ]);
        exit;
    }

    $sameEmail = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email'");
    if (mysqli_num_rows($sameEmail) > 0) {
        echo json_encode([
            'status' => 102,
            'message' => "email already registered"
        ]);
        exit;
    }

    $query = "INSERT INTO register VALUES('','$name','$email','$password1','$repassword','$DOB','$age','$contactno','$country','$state','$jobrole')";
    mysqli_query($conn, $query);
    echo json_encode([
        'status' => 200,
        'message'=> "registration successful"
    ]);
    exit;

