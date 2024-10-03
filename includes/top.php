<?php
include_once('includes/config.php');
include_once('functions/database.php');
include_once('functions/functions.php');

$connection = db_connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$aSite['url']?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$aSite['url']?>css/style.css">
    <title><?=$aSite['title']?></title>
</head>
<body>
    <?/*php include_once('includes/header.php'); */?>