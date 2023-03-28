<?php
   require "db.php";

    if( isset($_POST['insert'])) {
        extract($_POST) ;
        $sql = "insert into project (name, description, requirements, software, hardware) values (?,?,?,?,?)" ;
        try{
            
          $title = filter_var($title, FILTER_SANITIZE_STRING);
          $des = filter_var($des, FILTER_SANITIZE_STRING);
          $req = filter_var($req, FILTER_SANITIZE_STRING);
          $software = filter_var($software, FILTER_SANITIZE_STRING);
          $hardware = filter_var($hardware, FILTER_SANITIZE_STRING);
          
          $stmt = $db->prepare($sql) ;
          $stmt->execute([$title, $des, $req, $software, $hardware, $_SESSION["user"]["id"]]) ;
          addMessage("Project is added");
        }catch(PDOException $ex) {
           addMessage("Adding failed!");
        }
      }

  if( isset($_POST['edit'])) {
    extract($_POST);
try {
     $title = filter_var($title, FILTER_SANITIZE_STRING);
     $des = filter_var($des, FILTER_SANITIZE_STRING);
     $req = filter_var($req, FILTER_SANITIZE_STRING);
     $software = filter_var($software, FILTER_SANITIZE_STRING);
     $hardware = filter_var($hardware, FILTER_SANITIZE_STRING);
    
     $sql = "update project set name=?, description=?, requirements=?, software=?, hardware=? where id = ?" ;
     $stmt = $db->prepare($sql) ;
     $stmt->execute([$title, $des, $res, $software, $hardware, $id]) ;
     addMessage("Updated!") ;
} catch(PDOException $ex) {
    addMessage("Error!") ;
}
} 

$users = $db->query("select * from user order by username")->fetchAll(PDO::FETCH_ASSOC) ;
   
       $queryStr = "";
       
   if(isset($_POST["search"])) {
       $searchText =  $_POST["searchText"];
       if($searchText != "")
           $queryStr2  = "AND (name LIKE '%".$searchText."%' OR description LIKE '%".$searchText."%')";
       else 
           $queryStr2 = "";
   }
   else{
       $queryStr2 = "";
   }
   $userID = $_SESSION["user"]["id"];
$project = $db->query("select project.id name, description, software, hardware
                   from project
                   where $userID = owner $queryStr $queryStr2")->fetchAll(PDO::FETCH_ASSOC);

///////////////////////////////////////////////DATA FROM DATABASE//////////////////////////////////////////////////////////////
    
?>
    
<div class="fixed-action-btn">
  <a class="btn-floating btn-large red modal-trigger z-depth-2" href="#add_form">
    <i class="large material-icons">add</i>
  </a>
</div>

<?php include "insert.php"; //insert?>
<?php include "edit.php"; //edit?>


<script>
    var instances ;

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    instances = M.Modal.init(elems);

    elems = document.querySelectorAll('select');
    instances = M.FormSelect.init(elems);
    
     var options = {
            alignment: 'right',
            constrainWidth: false
        };
    elems = document.querySelectorAll('.dropdown-trigger');
    instances = M.Dropdown.init(elems,options);
   });
</script>