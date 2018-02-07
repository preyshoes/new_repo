<?php
session_start();
include 'include/dbconnection.php';

        $title = $_POST['Title'];
        $pages = $_POST['Pages'];
        $author = $_POST['Author'];
        $year  = $_POST['Publish_year'];
    

    $sql = "INSERT INTO `add`(Title, Pages, Author, Publish_year)
    
    VALUES ('$title', '$pages', '$author', '$year')";
    
    $result = mysqli_query($dbconn, $sql);
        
?>