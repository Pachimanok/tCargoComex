<?php

include("../db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM carga WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  echo "<script>
    location.href='../views/view_user_basic.php'; 
    alert('Se elimino Carga correctamente');
    
  </script>";

 // $_SESSION['message'] = 'Task Removed Successfully';
  //$_SESSION['message_type'] = 'danger';
  // header('Location: index.php');
}

?>
