<?php
require "config.php";
function dbConnect(){
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    if($mysqli->connect_errno != 0){
       return FALSE;
    }else{
       return $mysqli;
    }
 }

 function getCategories(){
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT DISTINCT category FROM store");
    while ($row = $result->fetch_assoc()) {
       $categories[] = $row;
    }
    return $categories;
 }

 function getHomePageProducts($int){
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT * FROM store ORDER BY rand() LIMIT $int");
    while ($row = $result->fetch_assoc()){
       $data[] = $row;
    }
    return $data;
 }

 function getProductsByCategory($category){
    $mysqli = dbConnect();
    $stmt = $mysqli->prepare("SELECT * FROM store WHERE category = ?");
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    if(count($data) == 0){
       header("Location: index.php");
       exit();
    }else{
       return $data;
    }
 }

 function getProductBytitle($title){
    $mysqli = dbConnect();
    $stmt = $mysqli->prepare("SELECT * FROM store WHERE title = ?");
    $stmt->bind_param("s", $title);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    if(count($data) == 0){
       header("Location: index.php");
       exit();
    }else{
       return $data;
    }
 }