<?php
error_reporting(0);
include 'connetdb.php';
if($_GET['id']){
    $id = $_GET['id'];
    $sql = "DELETE FROM research_scholar where sid='$id'";
    $result = mysqli_query($data, $sql);
    if($result){
        header("location:view_scholar.php");
    }
}
?>