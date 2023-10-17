<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories Form</title>
</head>
<body>
    <center>
    <h1>LOST & FOUND</h1>
    <h3>Categories Form</h3>
    <style>
        body { 
            font-family: arial;
            background-color: #d5f0f3;  
        }
        h1 {
            font-size: 30px;
            text-align: center; 
        }
        .btn{
            background-color: black;
            border-radius: 10px;
            line-height: 10px;
            font-size: 16px;
            font-weight: bold;
            font-family: arial;
            border: none;
            border-radius: 8px;
            color: white;
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
    <?php
      $name         ='';
      $description  =''; 

    if(isset($category)) {
       $name            = $category->category_name;
       $description     = $category->description;
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="category_name" value="<?=$name?>" required></td>
            </tr>
            <tr>
                <td>Item Description</td>
                <td><textarea name="description" cols="25" rows="5" ><?=$description?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="submit" class="btn">
                    <a href="<?=site_url('category')?>"><input type="button" value="CANCEL" class="btn"></a>
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>