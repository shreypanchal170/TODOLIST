<?php
       $id=$_POST['id'];
       $title=$_POST['title'];
       
    include 'database.php';
    $sql="UPDATE todos SET title='$title' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>