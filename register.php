<?php
include 'csrf.class.php';

if ( $_SERVER["REQUEST_METHOD"] == "POST") {
    require "db.php" ;
    
    extract($_POST) ;
    try {
        
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $firm = filter_var($firm, FILTER_SANITIZE_STRING);
        $city = filter_var($city, FILTER_SANITIZE_STRING);
        $district = filter_var($district, FILTER_SANITIZE_STRING);
        $address = filter_var($address, FILTER_SANITIZE_STRING);
        
        if (strlen(trim($_POST["name"])) === 0 OR strlen(trim($_POST["email"])) === 0 OR strlen(trim($_POST["password"])) === 0
        OR strlen(trim($_POST["firm"])) === 0 OR strlen(trim($_POST["city"])) === 0 OR strlen(trim($_POST["district"])) === 0 
        OR strlen(trim($_POST["address"])) === 0)  {
            addMessage("Registration Unsuccessful");
            header("Location: ?page=registerForm") ;
            exit ;
        }

        $sql = "insert into user ( email, username, password, firm, city, district, address) values (?,?,?,?,?,?,?)" ;
        $stmt = $db->prepare($sql);
        $hash_password = password_hash($password, PASSWORD_DEFAULT) ;
        $stmt->execute([$email, $name, $hash_password, $firm, $city, $district, $address]);

        addMessage("Registered successfuly");
        header("Location: ?page=loginForm") ;
        exit ;

    } catch(PDOException $ex) {
       addMessage("Try Again!") ;
       header("Location: ?page=registerForm");
       exit;
    }
}
