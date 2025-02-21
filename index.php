<?php require "./include/head.php";

$sql = "SELECT * FROM posts;";
 $result = $db_conn->query($sql);
 if($result->num_rows > 0 ){
  $posts = $result;
 }else{
  echo "<h2 class='text-center m-5 display-1'> 
   You do not have any post please add some :)
  </h2>";
 }
 
 if(isset($_GET["delete_id"])){
  $id = $_GET["delete_id"];
  $sql = "DELETE FROM posts WHERE id=$id";
  $result = $db_conn->query($sql);
  if($result){
   header("Location: ./index.php");
  }
 }
 

 if (isset($_GET['delete_id'])) {
 	 $id = ['delete_id'];
 	 $sql = "DELETE FROM posts WHERE id=$id";
 	 $result = $db_conn->query($sql);
 	 if ($result) {
 	 	header("location: ./index.php");
 	 }
 }
$db_conn -> close();
 ?>

 <div class="d-flex p-2 m-2 justify-content-around align-item-center flex-wrap">
   <?php 

   if (isset($posts)) {
    while ($post = $posts->fetch_assoc()) { // Fetch each row as an associative array
?>
    <div class="card m-3" style="width: 18rem; text-align: center;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $post["title"]; ?> 
            </h5>
            <p class="card-text">
                <?php echo $post["text"]; ?> 
            </p>
        </div>
        <hr>
     <a class="btn btn-danger" href="./index.php?delete_id=<?php echo $post['id']; ?>" >
     Delete
    </a>
    </div>
<?php
    } // Close while loop
} 
?>
<?php require "./include/footer.php"; ?>