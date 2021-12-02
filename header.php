<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/jquery.min.js"></script>
    <script src="JS/popper.min.js"></script>
</head>
<style>
    *{
        font-family: Georgia, 'Times New Roman', Times, serif;
        box-sizing: border-box;
    }
    body{
        background-color: black;
    }
    /* form */
        .bglog{
            background-image: url('image_st/blog.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            width: 100%;
            height: 100%;
            position: fixed;
            padding-top: 50px;
        }
        .form_contain{
            text-align: center;
            width: 500px;
            padding: 20px;
            border-radius: 20px;
            margin: auto;
            background-color: whitesmoke;
        }
    /* form */
    /* body */
        .sticker{
            text-align: center;
            position: sticky;
            top: 5px;
        }
        .apic{
            width: 100%;
            background-color: gray;
            height: 150px;
        }
        .main_content{
            text-indent: 50px;
        }
        .main h3{
            padding-top: 35px;
            text-align: center;
        }
    /* body */
    /* head */
        .jumb{
            margin: 0;
            text-align: center;
            background-image: url('image_st/bgblue.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            text-shadow: black 1px 1px 3px;
        }
        .but{
            display: inline-block;
            background-color: rgba(200, 200, 200, 0.2);
            border: rgb(20, 20, 20) 1px solid;
            line-height: 30px;
            border-radius: 8px;
            color: lightgray;
            padding: 0px 10px;
            margin: 0px 8px 0px 15px;
        }
        .but:hover{
            background-color: rgba(200, 200, 200, 0.5);
            cursor: pointer;
            color: white;
        }
    /* head */
    .foot_img{
        width: 25px;
        margin-right: 10px;
    }
    @media screen and (min-width: 520px){
        .footcon{
            float: right;
        }
    }
</style>

<script>
    function newwin(link){
        window.open(link);
    }
</script>
<body>