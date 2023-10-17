<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOST & FOUND</title>
    <style>
        body { 
            font-family: arial;
            background-color: #d5f0f3;  
        }
        h1 {
            font-size: 30px;
            text-align: center; 
        }
        .btn {
            width: 100px;
            height: 30px;
            background: orange;
            border: 3px solid orange;
            margin-top: 10px;
            color: white;
            font-size: 16px;
            border-radius: 10px;
        }
        .btn:hover {
            background-color: blue;
            color: black;
        }
    </style>
</head>
<center>
<body?>
    <h1>LOST & FOUND</h1>
    <h3>USERS FORM</h3>
    <?php
      $name='';
      $type='';
      $fullname='';

    if(isset($user)) {
        $name       =$user->username;
        $type       =$user->usertype;
        $fullname   =$user->fullname;
    }
    ?>
    <form action="" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?=$name?>" placeholoder="Enter Username" required ></td>
        </tr>
        <tr>
            <td>Usertype</td>
            <td>
                <input type="radio" name="usertype" value="Admin" <?=$type=='Admin'?'checked':''?> required>Admin
            </td>
        </tr>
        <tr>
            <td>Fullname</td>
            <td><input type="text" name="fullname" value="<?=$fullname?>" placeholder="Enter Fullname" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="SAVE" name="submit" class="btn">
                <a href="<?=site_url('users')?>"><input type="button" class="btn" value="CANCEL"></a>
            </td>
        </tr>
    </table>
</form>
</center>
</body>
</html>