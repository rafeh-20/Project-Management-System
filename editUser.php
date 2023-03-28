<?php
   require "db.php" ;
  
   
    if( isset($_POST['editUser'])) {

            if(isset($_POST["password"]) && $_POST["password"] != "") 
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT) ;
            else 
                $password = $_SESSION["user"]["password"];
            
     try {
          $id = $_POST["id"] ;
          $name = $_POST["name"] ;
          $email = $_POST["email"] ;
          $firm = $_POST["firm"] ;
          $city = $_POST["city"] ;
          $district = $_POST["district"] ;
          $address = $_POST["address"] ;
          
          $name = filter_var($name, FILTER_SANITIZE_STRING);
          $email = filter_var($email, FILTER_SANITIZE_EMAIL);
          $firm = filter_var($firm, FILTER_SANITIZE_STRING);
          $city = filter_var($city, FILTER_SANITIZE_STRING);
          $district = filter_var($district, FILTER_SANITIZE_STRING);
          $address = filter_var($address, FILTER_SANITIZE_STRING);
          
          $sql = "update user set email=?, username=?, password=?, firm=?, city=?, district=?, address=? where id = ?" ;
          $stmt = $db->prepare($sql) ;
          $stmt->execute([$email, $name, $password, $firm, $city, $district, $address, $id]);
        
          $user = [  "id" => $id, "name" => $name, "email" => $email, "password" => $password, "firm" => $firm, 
          "city" => $city, "district" => $district, "address" => $address];
      
        $_SESSION["user"] = $user ;
        addMessage("User information is updated!") ;
        header("Location: index.php");
        exit ;
     
     } catch(PDOException $ex) {
        addMessage("Error!") ;
     }

  } 
  
?>
<head>

  <style>
    h1.card-panel { margin-bottom: 1em ; }
    #toast-container {
      top: auto !important ;
      bottom: 10% !important ;
      left: 40% !important ;
      right: auto !important ;
    }

    .mt-4 {margin-top: 4em ;}
    .circle { width: 100px; height: 100px;}
    .container{ width: 40%;  height: 40%; }
 
  </style>
</head>
<body>
  <div class="container" style="margin-top:2em;">
    <form method="post" enctype="multipart/form-data">

    
     <div class="input-field">
        <input id="user_id" type="text" name="id" value="<?= $_SESSION["user"]["id"] ?>" readonly>
        <label for="user_id">ID</label>
      </div>
     
      <div class="input-field">
        <input id="user_name" type="text" name="name" value="<?= $_SESSION["user"]["name"] ?>">
        <label for="user_name">Username</label>
      </div>

      <div class="input-field">
        <input id="user_email" type="text" name="email" value="<?= $_SESSION["user"]["email"] ?>">
        <label for="user_email">Email</label>
      </div>

     <div class="input-field">
        <input placeholder="Enter a new password" id="newPassword" type="text" name="password" >
        <label for="newPassword">New Password</label>
      </div>

      <div class="input-field">
        <input id="firm_name" type="text" name="firm" value="<?= $_SESSION["user"]["firm"] ?>">
        <label for="firm_name">Firm</label>
      </div>

      <div class="input-field">
        <input id="firm_city" type="text" name="city" value="<?= $_SESSION["user"]["city"] ?>">
        <label for="firm_city">City</label>
      </div>

      <div class="input-field">
        <input id="firm_district" type="text" name="district" value="<?= $_SESSION["user"]["district"] ?>">
        <label for="firm_district">District</label>
      </div>

      <div class="input-field">
        <input id="firm_address" type="text" name="address" value="<?= $_SESSION["user"]["address"] ?>">
        <label for="firm_address">Address</label>
      </div>


      <div class="input-field">
        <button class="btn waves-effect waves-light right" type="submit" name="editUser">Update
          <i class="material-icons right">send</i>
        </button>
      </div>


    </form>
    <div class="mt-4">
        <a href="index.php"><i class="material-icons left">arrow_left</i>Main Page</a>
      </div>

  </div>
</body>
</html>
 