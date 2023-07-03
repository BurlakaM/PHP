<?php
include_once  "config.php";







// create
$success = "";
$result = [];
if(isset( $_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];



    $sql =( "INSERT INTO `categories`( `name`, `description`)  VALUES (?, ?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $description]);

}


// read

$sql = $pdo->prepare("SELECT * FROM `categories`") ;
$sql->execute();
$result = $sql->fetchAll();
//// update


if(isset( $_POST['edit-submit'])) {
    $edit_name = $_POST['edit_name'];
    $edit_description = $_POST['edit_description'];

    $id = $_GET['id'];


    $sqll =("UPDATE `categories` SET `name`=?, `description`=?  WHERE `id`=?");
    $query_update = $pdo->prepare($sqll);
    $query_update->execute([$edit_name, $edit_description,  $id]);
    header('Location: '. $_SERVER['HTTP_REFERER']);


}


// delete



if(isset( $_POST['delete_submit'])) {
    $id = $_GET['id'];
    $sql_d = ("DELETE FROM `categories` WHERE `id`=?");
    $query_d = $pdo->prepare($sql_d);
    $query_d->execute([$id]);
    header('Location: '. $_SERVER['HTTP_REFERER']);



}

