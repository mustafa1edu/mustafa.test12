<?php 
  $db_host = "localhost";
 $db_user = "root";
 $db_pass = "";
 $db_name = "todo";
 $db_conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
 if($db_conn->connect_error){
  echo "Connection Failed: ".$db_conn->connect_error();
  exit();
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mustafa.Education</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
   <a class="navbar-brand" href="../index.php">Mustafa.Edu</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     <li class="nav-item">
      <a class="nav-link" href="./index.php">Home</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="./addTodo.php">Add Homework</a>
     </li>
    </ul>
   </div>
  </div>
 </nav>