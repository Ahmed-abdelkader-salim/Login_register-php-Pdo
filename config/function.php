<?php
session_start();
require_once 'config/conn.php';



function validate($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}


function redirect($msg_type, $msg, $url){
    $_SESSION[$msg_type] = $msg;
    header('Location:'.$url);
    exit(0);
}

function emailExists($table,$input){
    global $conn;
     // check if email exists or not
     try{
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT COUNT(*) FROM $table WHERE email = :email");
         // Bind the email parameter
        $stmt->bindParam(':email', $input);

        $stmt->execute();
        // Fetch the result
        $count = $stmt->fetchColumn();

        return $count;

    }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }
}

function insertData($name, $email, $password){
    global $conn;

    try{
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
       
        $result =  $conn->exec($sql);
        return $result;

    }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }
}


function Login($Email, $Password){
    global $conn;
    try{
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM users WHERE email=:email";
    $stmt = $conn->prepare($sql);

    $stmt->bindValue(':email',$Email);
    
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $storedPwd = $user['password'];

   

    if($user === false) {
         die($storedPwd);
        return redirect('error','In Correct username or password ','login.php');
    }else{
        if(password_verify($Password, $storedPwd)){
            return redirect('success','Login successfully','login.php');

        }else{

            return redirect('error','In Correct username or password ','login.php');

        }
    }

    }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }

}


?>