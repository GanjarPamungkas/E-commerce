<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
<style>
   body{
       margin: 0;
       padding: 0;
       font-family: sans-serif;
       background: url(https://wallpaperaccess.com/full/84248.png); 
       background-repeat: no-repeat;
       background-size: cover;
    }

    .box{
        border-radius: 20px;
        width: 300px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #191919;
        text-align: center;
    }

    .box h1{
        color: white;
        text-transform: uppercase;
        font-weight: 500;
    }

    .box input[type = "text"], .box input[type = "password"]{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }

    .box input[type = "text"]:focus,.box input[type = "password"]:focus{
        width: 280px;
        border-color: #2ecc71;
    }

    .box input[type = "submit"]{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }

    .box input[type = "submit"]:hover{
        background: #2ecc71;
    }

    .btn{
            background-color: white;
            border-radius: 10px;
            line-height: 10px;
            font-size: 16px;
            font-family: sans-serif;
            border: 10px;
            border-radius: 8px;
            color: black;
            padding: 8px 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            margin: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: green;
            color: white;
        }
    </style>
    <meta chatset="UTF-8">
</head>
<body>
    <form class="box" method="post">
            <h1>
                LOST & FOUND
            </h1>
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="LOGIN"></td>
                <a href="<?=site_url('penemuan')?>" class='btn' >Founded Items</a></li>
                <td><?=$this->session->flashdata('msg')?>
                <div style="color: red;"><?validation_errors()?></div></td>
            </tr>
    </form>
</body>
</html?