<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<head>
    <center>
    <title>LOST&FOUND</title>
    <style>
        body { 
            font-family: arial;
            background-color: #d5f0f3;  
        }
        h1 {
            font-size: 30px;
            text-align: center; 
        }
        .menu {
            background-color: black;
            font-weight: bold;
            font-size: 14px;
        }
        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .menu ul li {
            display: inline-table;
            margin-left: 4px;
        }
        .menu ul li a {
            display: block;
            text-decoration: none;
            line-height: 40px;
            padding: 0 10px;
            color: #fff;
        }
        .menu ul li a:hover {  
            background-color: white; 
            color: black; 
        }
        h3 { text-align: center;
        }

        table { margin: 20px auto; 
        
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
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1>LOST & FOUND</h1>
    <h3>CHANGE PHOTO ITEMS</h3>
    <?=$this->session->flashdata('msg')?>
    <div style="color: red;"><?=$error?></div>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>CURRENT PHOTO</td>
                <td><img src="<?=base_url('uploads/kehilangan1/'.$lost->photobrg)?>" width="128" height="128" /></td>
            </tr>
            <tr>
                <td>NEW PHOTO</td>
                <td><input type="file" name="photobrg" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="upload" value="UPLOAD PHOTO" class="btn">
                </td>
            </tr>
        </table>
    </form>
    <a href="<?=site_url('kehilangan')?>" class="btn"><h4>Back</h4></a>
    </center>
</body>
</html>