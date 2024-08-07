<?php 
require_once './config/function.php';
if(isset($_POST['register'])){
    $name = validate($_POST['name']);
    $filter_name = filter_var($name,FILTER_SANITIZE_STRING);
    $patternName = '/^[a-zA-Z\s]+$/';
    
    $email = validate($_POST['email']);
    $filter_email = filter_var($email,FILTER_SANITIZE_EMAIL);
    $patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    $password = validate($_POST['password']);

    // check if empty Inputs or not
    if(empty($name) || empty($email) || empty($password)){
        redirect('error','please fill all fields','register.php');
    }else{
        if(!preg_match($patternName, $filter_name)){
            redirect('error','this name: '.$filter_name.' not valid','register.php');    
        }
    }
    if(!preg_match($patternEmail, $filter_email)){
        redirect('error','Email not valid','register.php');    
    }
    if(strlen($password) < 8){
        redirect('error','Password Must be 8 character','register.php');    
        
    }

    $count = emailExists('users',$filter_email);

    if($count > 0){
        redirect('error','email alredy Exists','register.php');
    }else{
        
        $hash_password = password_hash($password, PASSWORD_BCRYPT);

        $result = insertData($filter_name, $filter_email,  $hash_password);
        if($result){
            redirect('success','Register successfully','login.php');
        }else{
            redirect('error','something is wrong','register.php');
        }
    }

}




if(isset($_POST['login'])){
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    
      
        $result = Login($email, $password);

        // if($result == false){
        //     redirect('success','Login successfully','login.php');
        // }else{
        //     redirect('error','In Correct username or password ','login.php');
        // }
    
}
?>