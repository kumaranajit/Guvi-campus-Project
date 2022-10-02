<?php
   session_start();
    $conn = mysqli_connect("localhost", "test", "123456", "user_data");
    header('Content-Type: application/json; charset=utf-8');
    $name = $_POST["name"];
    $password1 = $_POST["password1"];
    $user = mysqli_query($conn, "SELECT * FROM register WHERE name = '$name'");
    if (mysqli_num_rows($user) > 0) {
        $row = mysqli_fetch_assoc($user);

            $user_data = ['username' => $name];
                
        if ($password1 == $row['password1']) {
        $session_token = bin2hex(openssl_random_pseudo_bytes(16));
        $user_data['token'] = $session_token;
        // expiry set to 1 hour, after the mentioned time() the token cookie get deleted
        setcookie('token', $session_token, time()+3600); 
        // expiry set to 1 hour, after the mentioned time() the  get deleted
        setcookie('username', $user_data['username'], time()+3600);
        //creating redis
        $redis = new Redis();
        //creating connection to redis 
        $redis->connect('127.0.0.1', 6379);                                           
        //password is '123' for authorization
        $redis->auth('123');
        $redis_key =  $user_data['username'];
        //using set we assign a data
        $redis->set($redis_key, serialize($user_data)); 
        //it will be expired after 1 hour from the time of creation
        $redis->expire($redis_key, 3600);                  

            echo json_encode([
                'status' => 200,
                'message' => 'Login Successful. You\'e now redirecting to profile page.'
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