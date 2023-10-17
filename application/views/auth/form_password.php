<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<head>
    <center>
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
        .btn{
            background-color: black;
            border-radius: 10px;
            line-height: 10px;
            font-size: 16px;
            font-weight: bold;
            font-family: Verdana;
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
            background-color: white;
            color: black;
        }
    </style>
</head>
    <h1>LOST & FOUND</h1>
    <h3>CHANGE PASSWORD</h3>
    <?=$this->session->flashdata('msg')?>
    <div style="color: red;"><?validation_errors()?></div>
    <form action="" method="post">
        <table>
            <tr>
                <td>OLD PASSWORD</td>
                <td><input type="password" name="oldpassword" required></td>
            </tr>
            <tr>
                <td>NEW PASSWORD</td>
                <td><input type="password" name="newpassword" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="change" value="CHANGE PASSWORD" class="btn">
            </td>
            </tr>
        </table>
    </form>
    <a href="<?=base_url()?>" class="btn"><h4>Back to Home</h4></a>
    </center>
</body>
</html>