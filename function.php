<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "user_data");
if (isset($_POST["decide"])) {
    if ($_POST["decide"] == "register") {
        register();
    } else if ($_POST["decide"] == "login") {
        login();
    }
}
function register()
{
    global $conn;
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
        echo "Please fill out the Empty fields";
        exit;
    }

    $user = mysqli_query($conn, "SELECT * FROM register WHERE name = '$name'");
    if (mysqli_num_rows($user) > 0) {
        echo "Username Has Already Taken";
        exit;
    }

    $sameEmail = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email'");
    if (mysqli_num_rows($sameEmail) > 0) {
        echo "email already registered";
        exit;
    }

    $query = "INSERT INTO register VALUES('','$name','$email','$password1','$repassword','$DOB','$age','$contactno','$country','$state','$jobrole')";
    mysqli_query($conn, $query);
    echo "registration successful";
}

function login()
{   
    global $conn;
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
}
//code completed
