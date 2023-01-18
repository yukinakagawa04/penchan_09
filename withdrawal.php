<?php
session_start();
include("functions.php");
check_session_id();
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>確認画面</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="content">
        <img src=".//img/bg.jpg" width="530" height="auto">
        <div class="content">
            <div class="control">
                <a href="delete.php" class="back-btn">解約する</a>
                <div class="clear"></div>
            </div>
        </div>
</body>